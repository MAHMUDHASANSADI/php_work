<?php
class RGB{
    private $color;

    //construct define
    function __construct($colorCode=''){
        $this->color=$colorCode;
    } 
    function getColor(){
        return $this->color;
    }

    function setColor($colorCode){
        $this->color=$colorCode;
    }

    private function parseColor(){

    }





}