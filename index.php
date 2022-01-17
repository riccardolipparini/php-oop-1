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
            if($this -> $subtitle == "notFound"){
                return $this -> title;
            }else
            return $this -> title . ": " . $this -> subtitle;
        }

        public function __toString(){
            if($this -> $movieDirector == "notFound"){
                return $this -> getFullTitle() . "| " ."???";
            }else
            return $this -> getFullTitle() . ": " . $this -> movieDirector;
        }
    };

    $m1 = new Film("Matrix");
    $m2 = new Film("Fantozzi 2");
    $m3 = new Film("Peter Pan");

    $m1 -> subtitle = "notFound";
    $m1 -> movieDirector = "notFound";

    $m2 -> subtitle = "il ritorno di fantozzi";
    $m2 -> movieDirector = "notFound";

    $m3 -> subtitle = "il ritorno dell'isola che non c'è";
    $m3 -> movieDirector = "Robin Budd";

    echo "1) " . $m1 . "<br>";
    echo "2) " . $m2 . "<br>";
    echo "3) " . $m3 . "<br>";

     
    ?>
    
</body>
</html>