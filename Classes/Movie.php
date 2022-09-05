<?php

    /** The class movie is a small example of a Movie */
    class Movie{
        private $title;
        private $year;
        private $director;

        /**
         * Create a new instance of a Movie object
         * 
         * @param [type] $_title
         * @param [type] $_year
         * @param [type] $_director
         */
        function __construct($_title, $_year, $_director){
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
        }

        public function getTitle(){
            return $this->title;
        }
        public function getYear(){
            return $this->year;
        }
        public function getDirector(){
            return $this->director;
        }
    }