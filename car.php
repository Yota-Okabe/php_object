<?php

// クラス車を定義
    class Car{
    // 車の特徴 = プロパティ（名詞）
        public $company_name;
        public $name;
        public $color;
    // 車の為せる技 = メソッド（動詞）
        public function run(){
            return "高速を走ります";
        }
    }

// インスタンス化
    $car = new Car();
    $car->company_name = "トヨタ ";
    $car->name = "プリウス";
    echo $car->company_name;
    echo $car->name . '<br>';

    $car1 = new Car();
    $car1->company_name = "日産 ";
    $car1->name = "リーフ" . '<br>';
    echo $car1->company_name;
    echo $car1->name;

    $car2 = new Car();
    $car2->company_name = "テスラ ";
    $car2->name = "Model X" . '<br>';
    echo $car2->company_name;
    echo $car2->name;


?>