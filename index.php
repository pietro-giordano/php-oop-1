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

      public function getTitle()
      {
            return $this->title;
      }

      public function setTitle($title)
      {
            $this->title = $title;
            return $this;
      }

      public function getYear()
      {
            return $this->year;
      }

      public function setYear($year)
      {
            $this->year = $year;
            return $this;
      }

      public function getLanguage()
      {
            return $this->language;
      }

      public function setLanguage($language)
      {
            $this->language = $language;
            return $this;
      }

      public function getVote()
      {
            return $this->vote;
      }

      public function setVote($vote)
      {
            $this->vote = $vote;
            return $this;
      }

      public function getGenre()
      {
            return $this->genre;
      }

      public function setGenre($genre)
      {
            $this->genre = $genre;
            return $this;
      }

      public function getDirector()
      {
            return $this->director;
      }

      public function setDirector($director)
      {
            $this->director = $director;
            return $this;
      }

      public function getCast()
      {
            return $this->cast;
      }

      public function setCast($cast)
      {
            $this->cast = $cast;
            return $this;
      }
}

$matrix = new Movie('Matrix', 1999, 'English', 8.7, ['action', 'sci-fi'], ['Lana Wachowski', 'Lilly Wachowski'], ['Keanu Reeves', 'Carrie-Ann Moss', 'Laurence Fishburne']);
// var_dump($matrix);

$django = new Movie('Django Unchained', 2012, 'English', 8.8, ['Drama', 'Western'], ['Quentin Tarantino'], ['Jamie Fox', 'Leonardo di Caprio', 'Christoph Waltz', 'Samuel L. Jackson']);
// var_dump($django);

?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Movies</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

      <div id="app">

            <div class="container">
                  <div class="row mt-3">

                        <div class="col-4">
                              <div class="card">
                                    <div class="card-body">
                                          <h5 class="card-title">
                                                Titolo: <?php echo $matrix->getTitle() ?>
                                          </h5>
                                          <p>Anno: <?php echo $matrix->getYear() ?></p>
                                          <p>Lingua: <?php echo $matrix->getLanguage() ?></p>
                                          <p>Voto: <?php echo $matrix->getVote() ?></p>
                                          <ul class="list-group">
                                                <li class="list-group-item fw-bold">Generi:</li>
                                                <li class="list-group-item"><?php echo $matrix->getGenre()[0] ?></li>
                                          </ul>
                                          <ul class="list-group">
                                                <li class="list-group-item fw-bold">Regista/i:</li>
                                                <li class="list-group-item"><?php echo $matrix->getDirector()[0] ?></li>
                                          </ul>
                                          <ul class="list-group">
                                                <li class="list-group-item fw-bold">Cast:</li>
                                                <li class="list-group-item"><?php echo $matrix->getCast()[0] ?></li>
                                          </ul>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>

      </div>

      <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</body>

</html>