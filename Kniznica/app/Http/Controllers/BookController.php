<?php


namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Support\Str;


class BookController extends Controller
{

    public function showBookAction($id){
        $book = Books::find($id);
        echo $book->nazov."<br>";
        echo $book->autor."<br>";
        echo $book->datum_vydania."<br>";
        echo $book->pocet_stran."<br>";
    }

    public function insertBookAction(){
        $book = new Books();
        $datum = \Carbon\Carbon::now();
        $book->nazov = "Harry Potter";
        $book->autor = "J.K. Rowling";
        $book->datum_vydania = $datum->toDateString();
        $book->pocet_stran = mt_rand(300,800);
        $book->save();
    }

    public function deleteBookAction($id){
        $book = Books::find($id);
        $book->delete();
    }

    public function updateBookAction($id){
        $book = Books::where("id","=",$id)->first();
        $book -> update(["pocet_stran" => mt_rand(300,800),
                         "autor" => Str::random(1).".".Str::random(1)." Rowling"]);
    }

    public function showAllBookAction(){
        $books = Books::all();
        foreach ($books as $book){
            echo $book->nazov." ".$book->autor." ".$book->datum_vydania." ".$book->pocet_stran."<br>";
        }
    }
}
