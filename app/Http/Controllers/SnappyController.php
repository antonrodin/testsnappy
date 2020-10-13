<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SnappyController extends Controller
{

    /**
     * Ejemplo basico de Snappy
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
//    public function index()
//    {
//
//        $snappy = App::make('snappy.pdf');
//        $name = time();
//
//        $html = '<h1>Bill</h1><p>You owe me money, dude.</p>';
//        $snappy->generateFromHtml($html, "/tmp/bill-{$name}.pdf");
//
//        return response(
//            $snappy->getOutputFromHtml($html),
//            200,
//            array(
//                'Content-Type' => 'application/pdf',
//                'Content-Disposition' => 'attachment; filename="invoice-' . $name . '.pdf"'
//            )
//        );
//    }

    /**
     * Crear PDF con una vista y loadView
     * @return mixed
     */
    public function loadView()
    {
        $pdf = \PDF::loadView('pdf.invoice', [
            'nombre' => 'Fruteria Paco S.A.'
        ]);

        return $pdf->download('invoiceView.pdf');
    }

    public function loadFile()
    {
        $pdf = \PDF::loadFile('http://sotelo.test/snappy/invoice')
            ->setPaper('A4')
            ->setOption('copies', 2)
            ->inline('invoiceFile.pdf');

        return $pdf;
    }

    public function invoice()
    {
        return view('pdf.invoice');
    }
}
