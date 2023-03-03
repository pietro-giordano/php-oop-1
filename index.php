<?php

class Movie
{
      public $title;
      public $year;
      public $language;
      public $vote;
      public $genre;
      public $director;
      public $cast;

      public function __construct(string $_title, int $_year, string $_language, float $_vote, array $_genre, array $_director, array $_cast)
      {
            $this->title = $_title;
            $this->year = $_year;
            $this->language = $_language;
            $this->vote = $_vote;
            $this->genre = $_genre;
            $this->director = $_director;
            $this->cast = $_cast;
      }
}

$matrix = new Movie('Matrix', 1999, 'English', 8.7, ['action', 'sci-fi'], ['Lana Wachowski', 'Lilly Wachowski'], ['Keanu Reeves', 'Carrie-Ann Moss', 'Laurence Fishburne']);
var_dump($matrix);

$django = new Movie('Django Unchained', 2012, 'English', 8.8, ['Drama', 'Western'], ['Quentin Tarantino'], ['Jamie Fox', 'Leonardo di Caprio', 'Christoph Waltz', 'Samuel L. Jackson']);
var_dump($django);
