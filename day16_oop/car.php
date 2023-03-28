<?php

// クラス車を定義
    class Car{
    // 車の特徴 = プロパティ（名詞）
        public $company_name;
        public $name;
        public $color;
    // 車の為せる技 = メソッド（動詞）
        public function run(){
            return "が高速を走ります。";
        }
        public function distance($speed,$time){
            $distance = $speed * $time;
            return $distance;
        }
    }

// インスタンス化
    $car = new Car();
    $car->company_name = "トヨタ ";
    $car->name = "プリウス";
    echo $car->company_name;
    echo $car->name;
    echo $car->run();
    $distance = $car->distance(40,2);
    echo "走行距離は" . $distance . "kmです。" . '<br>';

    $car1 = new Car();
    $car1->company_name = "日産 ";
    $car1->name = "リーフ";
    echo $car1->company_name;
    echo $car1->name;
    echo $car->run();
    $distance = $car->distance(35,2);
    echo "走行距離は" . $distance . "kmです。" . '<br>';

    $car2 = new Car();
    $car2->company_name = "テスラ ";
    $car2->name = "Model X";
    echo $car2->company_name;
    echo $car2->name;
    echo $car->run();
    $distance = $car->distance(33,2);
    echo "走行距離は" . $distance . "kmです。" . '<br>';

?>

