<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DemoController extends Controller
{
    public function pdfDemo()
    {

    	$data = [
    		'id'=>1,
    		'name'=>'demo'
    	];
    }	
     public function fnDemo($value='')
     {
         # code...
     }

    	return view('pdf.invoice');
    }	

    public function mainBranch($value='')
    {
    	# code...
    }

    public function devBranch($value='')
    {
        return true;
    }

}
