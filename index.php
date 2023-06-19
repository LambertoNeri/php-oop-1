<?php

class Movie {
    public $title;
    public $duration;
    public $type;

    public function __construct($title, $duration, $type){
        $this->title = $title;
        $this->duration = $duration;
        $this->type = $type;
    }
    
        
    
}