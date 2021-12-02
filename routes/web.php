<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice1', function () {
    return view('invoice.invoice1');
});

Route::get('/generate1', function() {
    $pdf = PDF::loadView('invoice.invoice1');
    return $pdf->download('test_invoice.pdf');
    // return $pdf->stream('test_invoice.pdf');
});

Route::get('/generate-pdf', function() {
    // ===========USING PACKAGE https://github.com/barryvdh/laravel-snappy

    // $pdf = App::make('snappy.pdf.wrapper');
    // $html= '<h1>Hello This is test pdf</h1>';
    // $pdf->generateFromHtml($html, 'hello.pdf');
    // $pdf->inline();

    // $html= '<h1>Hello This is test pdf</h1>';
    // $pdf = PDF::loadHtml($html);
    // ============TO VIEW PDF IN BROWSER
    // return $pdf->stream();

    // ============TO DOWNLOAD PDF IN DOWNLOADS FOLDER
    // return $pdf->download('hello.pdf');

    // ============TO LOAD VIEW
    $data = [
        [
            'name' => 'Java Script',
            'logo' => 'javascript.png'
        ],
        [
            'name' => 'PHP',
            'logo' => 'php.png'
        ],
        [
            'name' => 'Node JS',
            'logo' => 'node.png'
        ]
        ];


    $pdf = PDF::loadView('pdf.tutorial', ['skills' => $data]);
    // $pdf->setOrientation('landscape');
    // $pdf->setOption('header-left','[page]');
    // $pdf->setOption('header-right','[date]');
    // $pdf->setOptions([
    //     'header-left' => '[page]',
    //     'header-right' => '[date]',
    //     'footer-right' => 'Vasu',
    // ]);
    $pdf->setOptions([
        'header-left' => '[page]',
        'header-right' => '[date]',
        'footer-right' => 'Vasu',
        'footer-html' => view('pdf.footer')
    ]);

    $pdf->setOption('footer-html', view('pdf.footer'));

    return $pdf->stream('test.html');
});

Route::get('/pdf', function() {
    $data = [
        [
            'name' => 'Java Script',
            'logo' => 'javascript.png'
        ],
        [
            'name' => 'PHP',
            'logo' => 'php.png'
        ],
        [
            'name' => 'Node JS',
            'logo' => 'node.png'
        ]
        ];

    return view('pdf.tutorial', ['skills' => $data]);
});