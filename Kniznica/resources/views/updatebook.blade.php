<?php
?>
<form method="post" action="{{ action('BookController@updateBookAction', ['id'=>$book->id]) }}">
    Názov knihy:<br>
    <input type="text" name="bookname" value="{{$book->nazov}}"> <br>
    Meno autora: <br>
    <input type="text" name="author" value="{{$book->autor}}"> <br>
    Dátum vydania: <br>
    <input type="date" name="releasedate" value="{{$book->datum_vydania}}"> <br>
    Počet strán: <br>
    <input type="number" name="pages" value="{{$book->pocet_stran}}"> <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="upraviť">
</form>
<a href="{{action("BookController@showAllBookAction") }}">späť na zoznam</a>
