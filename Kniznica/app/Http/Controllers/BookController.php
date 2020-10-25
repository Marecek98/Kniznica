<?php


namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BookController extends Controller
{
/*
    public function showBookAction($id){
        $book = Books::find($id);
        echo $book->nazov."<br>";
        echo $book->autor."<br>";
        echo $book->datum_vydania."<br>";
        echo $book->pocet_stran."<br>";
    }

    public function insertBookAction(){
        $book = new Books();
        //$prev_book = Books::find(1);
        $datum = \Carbon\Carbon::now();
        $book ->nazov = "Harry Potter";
        $book->autor = "J.K. Rowling";
        $book->datum_vydania = $datum->toDateString();
        $book->pocet_stran = mt_rand(300,800);
    }

    public function deleteBookAction($id){
        $book = Books::find($id);
        $book->delete();
    }

    public function updateBookAction($id){
        $book = Books::where("id","=",$id)->get();
        $book -> update(["pocet_stran" => mt_rand(300,800),
                         "autor" => Str::random(1)+"."+Str::random(1)+" Rowling"]);
    }

    public function showAllBookAction(){
        $books = Books::all();
        foreach ($books as $book){
            echo $book->nazov." ".$book->autor." ".$book->datum_vydania." ".$book->pocet_stran."<br>";
        }
    }
*/


    public function getAddBookForm(){
        return view('addbook');
    }

    public function showAllBookAction(){
        $book = Books::all();
        return view("book", ['books'=>$book]);
    }

    public function showBookAction($id){
        $book = Books::find($id);
        return view("updatebook", ['book'=>$book]);
    }

    public function showdeleteBookAction($id){
        $book = Books::find($id);
        return view("deletebook", ['book'=>$book]);
    }

    public function insertBookAction(Request $request){
        $bookname = $request->input('bookname');
        $author = $request->input('author');
        $releasedate = $request->input('releasedate');
        $pages = $request->input('pages');

        $book = new Books();
        $book->nazov = $bookname;
        $book->autor = $author;
        $book->datum_vydania = $releasedate;
        $book->pocet_stran = $pages;

        $book->save();

        return response()->view('addbook');
    }

    public function updateBookAction($id, Request $request){
        $book = Books::where("id", "=",$id)->first();
        $book->update(["nazov" => $request->input('bookname'),
            'autor' => $request->input('author'),
            'datum_vydania' => $request->input('releasedate'),
            'pocet_stran'=> $request->input('pages') ]);
        return redirect()->action('BookController@showAllBookAction');
    }

    public function deleteBookAction($id){
        $book = Books::find($id);
        $book->delete();

        return redirect()->action('BookController@showAllBookAction');
    }


}
