<?php

    // step1 クラスを定義
    class Human{
    // step2 プロパティを記載
        public $name;
        public $gender;
        public $weight;

    // step3 メソッドを記載
        public function cook(){
            echo "料理をする";
        }
    }

    // step4 インスタンスを生み出す
    $human = new Human();
    $human->name = "YOTA";
    echo $human->name;
    $human->cook();

?>