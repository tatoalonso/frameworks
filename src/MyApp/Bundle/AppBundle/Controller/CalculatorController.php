<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{

    public function addAction($param1, $param2)
    {
        $calculator = new Calculator();
        return new Response((int)$calculator->add($param1, (int)$param2));
    }

    public function subtractAction(Request $request)
    {
        $number1 =$request->query->get('n1');
        $number2 =$request->query->get('n2');
        $calculator = new Calculator();
        return new Response((int)$calculator->subtract($number1, $number2));
    }

    public function multiplyAction(Request $request)
    {

        $number1 = $request->request->get('n1');
        $number2 = $request->request->get('n2');
        $calculator = new Calculator();
        return new Response((int)$calculator->multiply($number1, (int)$number2));
    }

    public function divideAction($param1, Request $request)
    {
        $param2 = $request->query->get('n2');
        $calculator = new Calculator();
        return new Response((int)$calculator->divide($param1, (int)$param2));
    }

}