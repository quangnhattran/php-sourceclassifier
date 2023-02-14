<?php

include ("vendor/autoload.php");

$detector = LanguageDetector::loadFromFile("model");
$i = 2;

$lang = $detector->classify(<<<CODE
<?php
class A {
    private $i = 1;
}
CODE
);

echo $lang; // C
