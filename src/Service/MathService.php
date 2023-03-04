<?php

namespace App\Service;

class MathService
{
    public function suma($a, $b): float
    {
        return $a + $b;
    }

    public function resta($a, $b): float
    {
        return $a - $b;
    }

    public function multiplicacion($a, $b): float
    {
        return $a * $b;
    }

    public function division($a, $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division por cero");
        }

        return $a / $b;
    }

    public function raizCuadrada($a): float
    {
        if ($a < 0) {
            throw new \InvalidArgumentException("No se puede calcular la raiz cuadrada de un numero negativo");
        }
        return sqrt($a);
    }

    public function porcentage($a, $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("No se puede calcular el porcentaje con un divisor de cero");
        }

        return ($a / $b) * 100;
    }
	
	public function potencia($a, $b): float
    {

        return pow($a , $b);
    }
	
	public function raizEnesima($a, $b): float
    {
		if ($b == 0) {
            throw new \InvalidArgumentException("No se puede calcular la raiz de indice 0");
        }
		$indice = (1 / $b);
        return pow($a , $indice);
    }
}
