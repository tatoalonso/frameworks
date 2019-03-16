<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Config\Definition\Exception\Exception;

class CalculatorController extends Controller
{

    public function addAction(int $param1, int $param2):Response
    {
        $calculator = new Calculator();

        $number1 = $this->sanitizacion($param1);
        $number2 = $this->sanitizacion($param2);

        return new Response((int)$calculator->add((int)$number1, (int)$number2));
    }

    public function subtractAction(Request $request):Response
    {
        $number1 = $this->sanitizacion($request->query->get('n1'));
        $number2 = $this->sanitizacion($request->query->get('n2'));
        $calculator = new Calculator();
        return new Response((int)$calculator->subtract($number1, $number2));
    }

    public function multiplyAction(Request $request):Response
    {

        $number1 = $this->sanitizacion($request->request->get('n1'));
        $number2 = $this->sanitizacion($request->request->get('n2'));
        $calculator = new Calculator();
        return new Response((int)$calculator->multiply($number1, (int)$number2));
    }

    public function divideAction(int $param1, Request $request):Response
    {
        $number1 = $this->sanitizacion($param1);
        $number2 = $this->sanitizacion($request->query->get('n2'));
        $calculator = new Calculator();


        $result = $calculator->divide((int)$number1, (int)$number2);

        if ($result === null)
        {
            return new Response('error divison by zero', 400);
        }
        else{

            return new Response($result);
        }

    }

    private function sanitizacion(int $number):int
    {

        return filter_var($number, FILTER_SANITIZE_NUMBER_INT);

    }

}