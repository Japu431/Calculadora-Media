<?php


Class Calc {
    private $a;
    private $b;

    public function __construct(float $a , float $b) {
        $this->a = $a;
        $this->b = $b;
    }
    public function somar() {
        
        $valueA = $this->a;
        $valueB = $this->b; 
        print("A soma de $valueA + $valueB = "); 
        return print($valueA + $valueB);
    }


    public function subtracao() {
        
        $valueA = $this->a;
        $valueB = $this->b; 
        print("A subtração de $valueA - $valueB = "); 
        return print($valueA - $valueB);
    }

    public function dividir() {
        
        $valueA = $this->a;
        $valueB = $this->b; 
        print("A divisão de $valueA / $valueB = "); 

        if($valueB == 0 || $valueB < 0) {
            print("ERROR!!! Não podemos calcular valor de zero, tente outro calculo!!");
        } else {
            return print($valueA / $valueB);
        }
    }

    public function raiz() {
        
        $valueA = $this->a;
        $valueB = $this->b;

        print(" A raiz dos valores $valueA e $valueB = "); 
        return print(sqrt($valueA + $valueB));
    }

    public function exponencial() {
        
        $valueA = $this->a;
        $valueB = $this->b;
        
        print("O exponencial de $valueA e $valueB = "); 
        return print(pow($valueA, $valueB));
    }


}
?>