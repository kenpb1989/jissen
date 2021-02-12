<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{

    // function __construct()
    // {
    //     config(['sample.message' => '新しいメッセージ']);
    // }
    // public function index(Request $request)
    // {
    //     $sample_msg = config('sample.message');
    //     $sample_data = config('sample.data');


    //     $data = [
    //         'msg' => $sample_msg,
    //         'data' => $sample_data,
    //     ];

    //     return view('hello.index', $data);
    // }

    // public function other(Request $request)
    // {
    //     return redirect()->route('sample');
    // }


    // private $fname;

    // public function __construct()
    // {
    //     $this->fname = 'sample.txt';
    // }

    // public function index()
    // {
    //     $sample_msg = $this->fname;
    //     $sample_data = Storage::get($this->fname);

    //     $data = [
    //         'msg' => $sample_msg,
    //         'data' => explode(PHP_EOL, $sample_data),
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function other($msg)
    // {
    //     $data = Storage::append($this->fname, $msg);
    //     return redirect()->route('hello');
    // }


    // private $fname;

    // public function __construct()
    // {
    //     $this->fname = 'hello.txt';
    // }

    // public function index()
    // {
    //     $sample_msg = Storage::disk('public')->url($this->fname);
    //     $sample_data = Storage::disk('public')->get($this->fname);

    //     $data = [
    //         'msg' => $sample_msg,
    //         'data' => explode(PHP_EOL, $sample_data),
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function other($msg)
    // {
    //     $data = Storage::disk('public')->append($this->fname, $msg);
    //     return redirect()->route('hello');
    // }

    private $fname;

    public function __construct()
    {
        $this->fname = 'hello.txt';
    }

    public function index()
    {

        // ここまだ書いてる途中

        // $url = Storage::disk('public')->url($this->fname);
        // $size = Storage::disk('public')->size($this->fname);
        // $modified = Storage::disk('public')->lastModified($this->fname);

        // $modified_time = date('y-m-d H:i:s', $modified);
        // $sample_keys = ['url', 'size', 'modified'];
        // $sample_meta = [$url, $size, $modified_time];

        // $result = '<table><tr><th>' . implode('</th><th>', $sample_keys) . '</th></tr>';

        // $data = [
        //         'msg' => $sample_msg,
        //         'data' => explode(PHP_EOL, $sample_data),
        //     ];
        // return view('hello.index', $data);
    }

    public function other($msg)
    {
        $data = Storage::disk('public')->append($this->fname, $msg);
        return redirect()->route('hello');
    }
}
