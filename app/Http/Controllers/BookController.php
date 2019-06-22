<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
   public function booklist(){
       //lấy tất cả
       //$book = book::all();
       //lấy có điều kiện
//       $book = book::where("qty","<",10)
//           ->where("book_id","<",100)
//           ->where("qty","asc")
//           ->get();
//
       //lấy số lượng cụ thể
//       $book = book::orderBy("qty","asc")
//           ->skip(20)
//           ->take(10)
//           ->select(["book_id","book_name","qty")
//           ->get();
       //lấy có phân trang
//       $book = book::orderBy("qty","asc")
//           ->paginnate(10);

       return view("book.list",compact("books"));
   }
}
