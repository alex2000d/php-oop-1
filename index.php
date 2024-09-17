<?php
  class movie{
    public $titolo;
    public $genere;
    public $lingua;
    public $descrizione;

    public function __construct($_titolo, $_genere, $_lingua, $_descrizione){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->lingua = $_lingua;
        $this->descrizione = $_descrizione;

    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>