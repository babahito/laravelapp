<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;


class HelloController extends Controller
{
  public function index(){
      $colors=[
          '白','黒','黄色'
      ];
      return view('hello.index',['colors'=>$colors]);
  }
  public function post(Request $request){
   
      $msg=$request->msg;

      $data=[
          'msg'=>$msg,
      ];

      return view('hello.index',$data);
  }
}
