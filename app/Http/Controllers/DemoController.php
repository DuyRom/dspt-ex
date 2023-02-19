<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DemoController extends Controller
{
    public function pdfDemo()
    {
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
