<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calc($num1,$operator,$num2)
    {
        if ($operator == 'addition') {
            $result = $num1 + $num2;
        } elseif ($operator == 'subtraction') {
            $result = $num1 - $num2;
        } elseif ($operator == 'multiplication') {
            $result = $num1 * $num2;
        } elseif ($operator == 'division') {
            $result = $num1 / $num2;
        } else {
            $result = '演算子が間違えてます。';
        }
        return view('calc', [
            'result' => $result,
        ]);
    }
}
