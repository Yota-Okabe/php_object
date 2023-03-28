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

// セッターとゲッター
    // セッター
        // public function setName($car_name){
        //     // $this このクラスの
        //     $this->name = $car_name;
        // }
    // ゲッター
        public function getName(){
            return "この車種は" . $this->name . "です。";
        }
// コンストラクタ
        public function __construct($car_name){
            $this->name = $car_name;
        }
    }

// ゲッターとセッター
    // $car = new Car();
    // $car->setName("トヨタ");
    // echo $car->getName();

    // $car1 = new Car();
    // $car1->setName("テスラ");
    // echo $car1->getName();

// コンストラクタ
    $car = new Car("トヨタ");
    echo $car->getName();
?>