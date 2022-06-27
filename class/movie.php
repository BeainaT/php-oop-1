<?php 
//Set class called Movie and declaire some attributes
class Movie {
    public $title;
    public $year;
    public $director;
    public $MainCast = Array();
    public $genre = Array();

    //Define a construct in class
    public function __construct($_title, $_year, $_director, $_MainCast, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->MainCast = $_MainCast;
        $this->director = $_director;
        $this->genre = $_genre;
    }
    //Define at least one method in class
    public function getOld() {
        if($this->year < 2009) {
            return "You may have seen {$this->title} in VHS";
        }
        return "No VHS for {$this->title}";
    }
}
