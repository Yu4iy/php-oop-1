<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
class Movie{
    public $year;
    public $name;
    public $lang;

    function __construct($_name, $_year, $_lang)
    {
        $this->name = $_name;   
        $this->year = $_year;    
        $this->lang = $_lang;   
    }

    public function getPrime()
    {
        if($this->lang){ 
            echo 'disponibile con abbonamento prime';
        }else{
            echo 'non disponibile con abbonamento prime';

        }
    }
}



$movie1 = new Movie('Batman', 1999, true);
$movie2 = new Movie('Futurama', 2499, false);

var_dump($movie1);
var_dump($movie2);
?>

<hr>
<div>Title: <?php echo $movie1->name; ?></div>
<div>Year: <?php echo $movie1->year; ?></div>
<div><?php echo $movie1->getPrime(); ?></div>

<hr>
<div>Title: <?php echo $movie2->name; ?></div>
<div>Year: <?php echo $movie2->year; ?></div>
<div><?php echo $movie2->getPrime(); ?></div>

<hr>