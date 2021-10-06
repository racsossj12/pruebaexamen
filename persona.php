<?php 
class persona {
    public $nombre ;
    public $altura;
    public $peso ; 
    
    public function calcularIMC($nombre,$altura,$peso)
    {   $IMC = ( $peso/ ($altura*$altura));
        if ($IMC == 18.5){
            echo ($nombre. " esta en "."delgadez o bajo
            peso");
        } elseif ($IMC <=24.9 && $IMC >= 18.5) {
            echo ($nombre. " esta en peso "."normal");
        }
     elseif ($IMC <=29.9 && $IMC >= 25) {
        echo ($nombre." esta en "."sobrepeso");
    }elseif ($IMC >= 30) {
        echo ($nombre." esta en "."obesidad");
    }
    elseif($IMC == 0 ){
        echo(" esta muerto ");
    }
    else{
        echo(" esta muerto".$IMC);
    }
}
}
