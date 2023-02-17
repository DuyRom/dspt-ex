<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PDF;


class DemoController extends Controller
{
    public function pdfDemo()
    {
    	$pdf = PDF::loadView('pdf.invoice', $data);
    	dd($demo);
    	return $pdf->download('invoice.pdf');
    }
}
