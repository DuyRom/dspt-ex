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
    	// $pdf = Pdf::loadView('pdf.invoice', $data);
    	// // dd($pdf);
    	// return $pdf->download('invoice.pdf');
    	// $path = '/pdf/usec.pdf';
    	// $pdf = \App::make('dompdf.wrapper');
    	// $pdf->loadHTML(public_path().'/pdf/usec.pdf');
    	// return $pdf->stream();
    	//return Pdf::loadFile(public_path().'/pdf/usec.pdf')->stream('download.pdf');
        // modifile
    	return Pdf::loadFile(public_path().'/storage/fonts/1.pdf')->stream('download.pdf');
  //   	$customer = Customer::findOrFail($id);
		// $pdf = Pdf::loadView('pdf.invoice', $data);
		// return $pdf->stream('info.pdf', array("Attachment" => false));
		// return $pdf->stream('info.pdf
    }	

    public function checkoutFromDm($value='')
    {
        # code...
    }
}
