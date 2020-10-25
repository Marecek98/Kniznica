<?php
?>
<table>
    @foreach($books as $book)
        <tr>
            <td>
                {{$book->nazov}}
            </td>
            <td>
                {{$book->autor}}
            </td>
            <td>
                {{$book->datum_vydania}}
            </td>
            <td>
                {{$book->pocet_stran}}
            </td>
            <td>
                <a href="{{action("BookController@showBookAction", ['id' => $book->id]) }}">editovat</a>
            </td>
            <td>
                <a href="{{action("BookController@showdeleteBookAction", ['id' => $book->id]) }}">odstrániť</a>
            </td>
        </tr>
    @endforeach
</table>
<br>
<a href="{{action("BookController@getAddBookForm") }}">Pridať novú knihu</a>
