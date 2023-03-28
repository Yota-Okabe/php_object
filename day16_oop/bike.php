<!-- 継承 -->
<?php

    require_once('car2.php');

    class Bike extends Car{

    }

    $bike = new Bike('ヤマハ');
    echo $bike->getName();

?>