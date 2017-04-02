<?php

/* 
 * Copyright (C) 2017 RTG
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * Device: MacBook Pro ( Mac OS Sierra 10. 11 )
 * 
 */

// Basic PHP Tutorial /Knowledge!

/*
 * 
 * WHAT IS PHP: PHP stands for Hypertext Preprocessor, Every function we use in PHP are just basic English and it means the same.
 * 
 * Where can i learn PHP?
 * - You can learn PHP at:
 * @link https://www.w3schools.com
 * @link https://www.php.net
 * 
 * What can i do with PHP?
 * - You can create a Hacking Script for Instagram, Spotify Premium, Facebook and so on..
 * 
 * Can i earn with PHP?
 * - Of course! You can earn tons of money only if you know how to execute and assign all values!
 * 
 * PHP is hard!
 * - It's not, practice makes a man perfect... Nothing is hard, it just takes time.
 * 
 * How many years will i take to learn PHP?
 * - Not even a week!
 * 
 * I hope you guys get a concept of PHP from this:
 * 
 * NOTE: This is a chain!
 * 
 *  CONCEPT:
 * 
 *  YOUR BROWSER -> PHP -> SERVER -> YOUR BROWSER
 * 
 * Conclusion: PHP is a mediator, it acts as a redirector.
 * 
 */




// I'm gonna start a simple web page now..


// To start a normal PHP File, make sure you have <?php at the start tags. You don't always need to add the closing line for PHP

echo "Echo means you are gonna spit out a content / word. You can use echo";

// Now whats Variable?
        
$c // This is a variable, in PHP variables can be used in the same class or as a GLOBAL variable using public.

// Example of GLOBAL Variable?
// public $c;

// Now let's go to Array handling...
// [] means array! or you can simple use array();

$x = [  // Example 1
    "RTG",
    "Test RTG",
    "RTGIsANoob"
];

$y = array( // Example 2
    "RTG",
    "Test RTG",
    "RTGIsANoob"
);

// Q: How to spit out an array?!

// A: This is how :)

// we will use foreach(), foreach() means it turns array into STRING. String means a line / sentence. Foreach() stands for "For Each".

foreach ($x as $line) {
    echo "\n" . $line; // "\n" means new line! Now this array is a String. 
}

// Q: Now how do i make it a long sentense with "," after easy name in the array $y;

// A: Here!

foreach ($y as $line) {
    
    // Use implode() to add the "," in between each letter
    
    $final = implode(", ", $line);
    echo $final; // now the final product will be like: "RTG, Test RTG, RTGIsANoob".
    
}

// If we've time, i'll create a simple file :).
// This is whatever is behind PHP.

// Learn more https://www.w3schools.com

// My GitHub: https://github.com/RTGDaCoder

// Thanks and Good Luck!
