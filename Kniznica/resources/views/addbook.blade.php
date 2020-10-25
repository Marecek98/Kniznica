
<form method="post" action="{{ action('BookController@insertBookAction') }}">
    Názov knihy:<br>
    <input type="text" name="bookname" value=""> <br>
    Meno autora: <br>
    <input type="text" name="author" value=""> <br>
    Dátum vydania: <br>
    <input type="date" name="releasedate" value=""> <br>
    Počet strán: <br>
    <input type="number" name="pages" value=""> <br>
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Odoslat">
</form>
<a href="{{action("BookController@showAllBookAction") }}">späť na zoznam</a>
