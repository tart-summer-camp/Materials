<?php

/**
 * This is first assingment for Fundamentals of PHP Lecture
 * Due : 2012-07-13 00-00
 * @category   SummerCamp\Assignment
 * @package    PHP
 * @author     Cihangir SAVAS <cihangir.savas@tart.com.tr>
 */

/**
 * Write a function that takes an array and outputs as a csv file.
 * The only thing that you know about the array is data structure,
 * all data for mapping comes under a single key which also not known but suprisingly not to be used anywhere
 */

$customers = array(
    "data" => array(
        array(
            "name" => "Tart",
            "surname" => "New Media"
        ),
        array(
            "name" => "Techinox"
        ),
        array(
            "surname" => "PHP",
            "age" => 13
        )
    )
);


/**
 * Sample output as a csv
 * 
 * name,surname,age
 * Tart,New Media,
 * Techinox,,
 * ,PHP,13
 */
