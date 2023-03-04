<?php

namespace App\Controller;

use App\Service\MathService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MathController
{
    private $mathService;

    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    /**
     * @Route("/{operation}/{operatorA}/{operatorB}", name="math_operation")
     */
    public function operation($operation, $operatorA, $operatorB): Response
    {
        switch ($operation) {
            case 'suma':
                $result = $this->mathService->suma($operatorA, $operatorB);
                break;
            case 'resta':
                $result = $this->mathService->resta($operatorA, $operatorB);
                break;
            case 'multiplicacion':
                $result = $this->mathService->multiplicacion($operatorA, $operatorB);
                break;
            case 'division':
                $result = $this->mathService->division($operatorA, $operatorB);
                break;
            case 'porcentaje':
                $result = $this->mathService->porcentage($operatorA, $operatorB);
                break;
            case 'potencia':
                $result = $this->mathService->potencia($operatorA, $operatorB);
                break;
            case 'raiz':
                $result = $this->mathService->raizEnesima($operatorA, $operatorB);
                break;				
            default:
                throw new \InvalidArgumentException("Operacion no valida");
        }

        return new JsonResponse(['result' => $result]);
    }
	
	
	 /**
     * @Route("raiz-cuadrada/{operatorA}}", name="math_raiz_cuadrada")
     */
    public function raizCuadrada($operatorA): Response
    {
         $result = $this->mathService->raizCuadrada($operatorA);   
    return new JsonResponse(['result' => $result]);
	}
    
}