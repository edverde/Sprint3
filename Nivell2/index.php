<?php

include 'duck.php';
include 'turkey.php';
include 'turkeyAdapter.php';

echo "<hr><br><strong>clase Duck</strong><br><br>";

$donald = new Duck();
$donald->fly();
$donald->quack();

echo "<hr><br><strong>clase Turkey</strong><br><br>";

$turkey = new Turkey();
$turkey->fly().$turkey->gobble();

echo "<hr><br><strong>clase TurkeyAdapter</strong><br><br>";

$adapter = new TurkeyAdapter($turkey);
$adapter->quack().$adapter->fly();
echo '<br><hr>';


function duck_interaction($duck) {
    $duck->quack();
    $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...\n";
duck_interaction($duck);
echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);




// Output
// The expected output is as follows:
// The Turkey says...
// Gobble gobble
// I'm flying a short distance
// The Duck says...
// Quack
// I'm flying
// The TurkeyAdapter says...
// Gobble gobble
// I'm flying a short distance
// I'm flying a short distance
// I'm flying a short distance
// I'm flying a short distance
// I'm flying a short distance

// ?>
