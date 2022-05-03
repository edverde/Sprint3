<?php
include 'tigger.php';
$random = rand(1,10);
for($i=0;$i<$random;$i++){
    echo Tigger_singleton::getInstance()->roar();
}
if($random != 1){
    echo "I m'he queixat ".Tigger_singleton::getInstance()->getCounter()." cops.";
}else{
    echo "I m'he queixat ".Tigger_singleton::getInstance()->getCounter()." cop.";
}

?>