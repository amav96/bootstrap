<?php


     function calcular ($calculo){    

    if(!strcmp("suma",$calculo)){

        global $numero1;
        global $numero2;

        $resultado=$numero1+$numero2;
        echo "El resultado es : $resultado";
    }
    if(!strcmp("resta",$calculo)){
        
        global $numero1;
        global $numero2;

        $resultado=$numero1-$numero2;
        echo "El resultado es : $resultado";
    }
    if(!strcmp("multiplicacion",$calculo)){
        global $numero1;
        global $numero2;

        $resultado=$numero1*$numero2;
        echo "El resultado es : $resultado";
    }
    if(!strcmp("division",$calculo)){
        global $numero1;
        global $numero2;

        
        $resultado=$numero1/$numero2;
        echo "El resultado es : $resultado";
    }
    if(!strcmp("modulo",$calculo)){
        global $numero1;
        global $numero2;

        $resultado=$numero1%$numero2;

        echo "El resultado es : $resultado";
    }
    if(!strcmp("incremento",$calculo)){
        global $numero1;
        $numero1++;
        
        $resultado=$numero1;
        echo "El resultado es : $resultado";
    }
    if(!strcmp("decremento",$calculo)){
        global $numero1;
        
        $numero1--;
        $resultado=$numero1;
        

        echo "<p>El resultado es : $resultado</p>";
    }


}

?>