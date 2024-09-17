<?php
  class movie{
    public $titolo;
    public $genere;
    public $lingua;
    

    public function __construct($_titolo, $_genere, $_lingua){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->lingua = $_lingua;
    
    }
    
    public function getFullMovie(){
        return $this->titolo."   ".$this->genere."   ".$this->lingua;
    }

  }

  $star_wars = new movie("star_wars", "fantascienza", "italiano");
  $jhon_wick = new movie("jhon_wick", "azione", "italiano");
  $pirati_dei_caraibi = new movie("pirati_dei_caraibi", "azione", "italiano");
  $harry_potter = new movie("harry_potter", "fantascienza", "italiano");
  $avatar = new movie("avatar", "fantascienza", "italiano");

  echo $star_wars->getFullMovie();
  echo "<br>";
  echo $jhon_wick->getFullMovie();
  echo "<br>";
  echo $pirati_dei_caraibi->getFullMovie();
  echo "<br>";
  echo $harry_potter->getFullMovie();
  echo "<br>";
  echo $avatar->getFullMovie();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP MOVIE</title>
</head>
<body>
    
</body>
</html>