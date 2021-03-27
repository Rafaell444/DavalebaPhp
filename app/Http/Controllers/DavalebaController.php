<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DavalebaController extends Controller
{
    public function calc(Request $request)
    {
//        return $action;
        if (($request->action) == "/") {
            return $request->num1 / $request->num2;
        }

        if (($request->action) == "*") {
            return $request->num1 * $request->num2;
        }

        if (($request->action) == "-") {
            return $request->num1 - $request->num2;
        }

        else {
            return $request->num1 + $request->num2;
        }


    }
}
