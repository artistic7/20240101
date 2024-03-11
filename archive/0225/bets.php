<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 3, 8, 10',
		/*** Fav 1 **/
		'f1-f3' => '1, 5, 7',
		'f1-f9' => '1, 5, 8',
		'f1-f11' => '7, 8, 11',
		'union 1' => '1, 5, 7, 8, 11',
		/*** Fav 2 **/
		'f2-f3' => '1, 3, 5',
		'f2-f4' => '1, 2, 5',
		'union 2' => '1, 2, 3, 5',
		/*** Fav 3 **/
		'f1-f3' => '1, 5, 7',
		'f2-f3' => '1, 3, 5',
		'f3-f4' => '1, 4, 5',
		'f3-f5' => '1, 5, 7',
		'f3-f6' => '1, 6, 7',
		'f3-f7' => '3, 5, 7',
		'f3-f8' => '1, 3, 5',
		'f3-f10' => '1, 4, 5',
		'union 3' => '1, 3, 4, 5, 6, 7',
		/*** Fav 8 **/
		'f3-f8' => '1, 3, 5',
		'f5-f8' => '1, 5, 12',
		'f8-f9' => '1, 3, 5',
		'f8-f10' => '1, 5, 10',
		'union 8' => '1, 3, 5, 10, 12',
		/*** Fav 10 **/
		'f3-f10' => '1, 4, 5',
		'f8-f10' => '1, 5, 10',
		'f9-f10' => '1, 5, 8',
		'f10-f11' => '4, 8, 11',
		'union 10' => '1, 4, 5, 8, 10, 11',
		'union all' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',//count: 11
		'Place' => '1, 2, 3, 10',
		'WP' => '1, 5',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 6',
		/*** Fav 3 **/
		'f1-f3' => '2, 6, 7',
		'f3-f4' => '4, 7, 12',
		'f3-f6' => '2, 4, 6',
		'union 3' => '2, 4, 6, 7, 12',
		/*** Fav 6 **/
		'f3-f6' => '2, 4, 6',
		'union 6' => '2, 4, 6',
		'union all' => '2, 4, 6, 7, 12',//count: 5
		'Place' => '6',
		'WP' => '2, 4, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 8, 12, 13',
		/*** Fav 2 **/
		'f2-f3' => '1, 8, 12',
		'f2-f12' => '2, 10, 12',
		'union 2' => '1, 2, 8, 10, 12',
		/*** Fav 8 **/
		'f6-f8' => '1, 3, 12',
		'f7-f8' => '3, 11, 12',
		'f8-f12' => '2, 10, 12',
		'union 8' => '1, 2, 3, 10, 11, 12',
		/*** Fav 12 **/
		'f2-f12' => '2, 10, 12',
		'f8-f12' => '2, 10, 12',
		'union 12' => '2, 10, 12',
		/*** Fav 13 **/
		'union all' => '1, 2, 3, 8, 10, 11, 12',//count: 7
		'Place' => '2, 12',
		'WP' => '2, 10, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '6, 10',
		/*** Fav 6 **/
		'f1-f6' => '6, 10, 11',
		'f3-f6' => '4, 6, 11',
		'f4-f6' => '4, 11, 12',
		'f5-f6' => '4, 10, 12',
		'f6-f11' => '6, 11, 12',
		'union 6' => '4, 6, 10, 11, 12',
		/*** Fav 10 **/
		'union all' => '4, 6, 10, 11, 12',//count: 5
		'Place' => '6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 6',
		/*** Fav 4 **/
		'f2-f4' => '1, 2, 7',
		'f4-f7' => '1, 4, 7',
		'f4-f8' => '1, 2, 7',
		'union 4' => '1, 2, 4, 7',
		/*** Fav 6 **/
		'f1-f6' => '3, 4, 7',
		'f3-f6' => '3, 4, 7',
		'f6-f8' => '7, 9, 11',
		'union 6' => '3, 4, 7, 9, 11',
		'union all' => '1, 2, 3, 4, 7, 9, 11',//count: 7
		'Place' => '4',
		'WP' => '4, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '10',
		/*** Fav 10 **/
		'f6-f10' => '7, 10, 12',
		'union 10' => '7, 10, 12',
		'union all' => '7, 10, 12',//count: 3
		'Place' => '10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		/*** Fav 1 **/
		'f1-f3' => '1, 2, 9',
		'f1-f8' => '2, 8, 9',
		'union 1' => '1, 2, 8, 9',
		/*** Fav 3 **/
		'f1-f3' => '1, 2, 9',
		'f3-f4' => '1, 3, 10',
		'union 3' => '1, 2, 3, 9, 10',
		'union all' => '1, 2, 3, 8, 9, 10',//count: 6
		'Place' => '1, 3',
		'WP' => '1, 2, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 8, 9, 12',
		/*** Fav 4 **/
		'f1-f4' => '1, 6, 7',
		'f2-f4' => '2, 4, 6',
		'f3-f4' => '6, 7, 12',
		'f4-f5' => '4, 7, 8',
		'f4-f6' => '4, 6, 12',
		'f4-f10' => '4, 7, 9',
		'union 4' => '1, 2, 4, 6, 7, 8, 9, 12',
		/*** Fav 8 **/
		'f8-f9' => '2, 3, 13',
		'union 8' => '2, 3, 13',
		/*** Fav 9 **/
		'f2-f9' => '2, 4, 5',
		'f7-f9' => '3, 4, 5',
		'f8-f9' => '2, 3, 13',
		'f9-f10' => '3, 4, 10',
		'union 9' => '2, 3, 4, 5, 10, 13',
		/*** Fav 12 **/
		'union all' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',//count: 12
		'Place' => '4',
		'WP' => '2',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 14',
		/*** Fav 3 **/
		'f3-f5' => '3, 8, 11',
		'union 3' => '3, 8, 11',
		/*** Fav 14 **/
		'union all' => '3, 8, 11',//count: 3
		'Place' => '3',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 3, 4, 5',
		/*** Fav 1 **/
		/*** Fav 3 **/
		'f3-f4' => '3, 4, 11',
		'union 3' => '3, 4, 11',
		/*** Fav 4 **/
		'f3-f4' => '3, 4, 11',
		'union 4' => '3, 4, 11',
		/*** Fav 5 **/
		'union all' => '3, 4, 11',//count: 3
		'Place' => '3, 4',
		'WP' => '3, 4, 11',
	],
];
