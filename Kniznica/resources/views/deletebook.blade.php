<?php
?>
Prajete si vymazať túto knižku? <br>
<form method="post" action="{{ action('BookController@deleteBookAction', ['id'=>$book->id]) }}">
    <td>
        {{$book->nazov}} od {{$book->autor}}
    </td>
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Ano">
</form>
<form method="get" action="{{ action('BookController@showAllBookAction') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Nie">
</form>
