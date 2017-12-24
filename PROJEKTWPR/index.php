<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 23.12.2017
 * Time: 21:24
 */





include ('data_genertor_class/OnetGenerator.php');


$test = new OnetGenerator();



$test ->generateNews();




print_r($test->getArrayNews());


