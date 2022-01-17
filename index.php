<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>

<body>
<?php
    
    class Film {
        public $title;
        public $subtitle;
        public $movieDirector;

        public function __construct($title){
            $this -> title = $title;
        }

        public function getFullTitle(){
            if($this -> $subtitle){
                return $this -> title . ": " . $this -> subtitle;  
            }else{
            return $this -> title;
        }}

        public function __toString(){
            if($this -> $movieDirector){
                return $this -> getFullTitle() . ": " . $this -> movieDirector; 
            }else{
            return $this -> getFullTitle() . "| " ."???";
        }}
    };

    $m1 = new Film("Matrix");
    $m2 = new Film("Fantozzi 2");
    $m3 = new Film("Peter Pan");

    

    $m2 -> subtitle = "il ritorno di fantozzi";
    

    $m3 -> subtitle = "il ritorno dell'isola che non c'è";
    $m3 -> movieDirector = "Robin Budd";

    echo "1) " . $m1 . "<br>";
    echo "2) " . $m2 . "<br>";
    echo "3) " . $m3 . "<br>";

     
    ?>
    
</body>
</html>