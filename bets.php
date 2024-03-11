<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$threes = include(__DIR__ . DIRECTORY_SEPARATOR . "threes.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    $unionAll = [];
    $unions = [];
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    sort($favorites);
    sort($runners);
    $racetext = "";
   
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n";   
    $place = [];
    foreach($favorites as $one){
        $racetext .= "\t\t/*** Fav $one **/\n"; 
        $union = []; 
        $firstSet1 = true; 
        foreach($runners as $two){
            if($two !== $one){
                if($one < $two) $index = "f$one-f$two";
                else $index = "f$two-f$one";
                if(isset($threes[$raceNumber][$index])){
                    $threeSet = explode(", ", $threes[$raceNumber][$index]);
                    $racetext .= "\t\t'$index' => '" . implode(", ", $threeSet) . "',\n";
                    if($firstSet1) {
                        $firstSet1 = false;
                        $union = $threeSet;
                    }
                    else {
                        $union = array_values(array_unique(array_merge($union, $threeSet)));
                    }
                }
            }
        }
        if(!empty($union)){
            sort($union);
            $racetext .= "\t\t'union $one' => '" . implode(", ", $union) . "',\n";
            $inter = array_intersect($favorites, $union);
            if(in_array($one, $inter)){
                $place[] = $one;
            }
            $unionAll = array_values(array_unique(array_merge($unionAll, $union)));
            $unions[] = $union;
        } 
    }
    sort($unionAll);
    $racetext .= "\t\t'union all' => '" . implode(", ", $unionAll) . "',//count: " . count($unionAll) . "\n";
    if(!empty($place)){
        $racetext .= "\t\t'Place' => '" . implode(", ", $place) . "',\n";
    }
    if(count($unions) > 1){
        $interu = $unions[0];
        foreach($unions as $set){
            $interu = array_intersect($interu, $set);
        }
        $racetext .= "\t\t'WP' => '" . implode(", ", $interu) . "',\n";
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";

file_put_contents($outFile, $outtext);