@extends("layout.app")
@section("content")

<table style="border: 1px black solid" border="1">

<tr><td>name</td><td>isbn</td><td>pages</td></tr>

@foreach($books as $book)

<tr><td>{{$book->name}}</td><td>{{$book->isbn}}</td><td>{{$book->nb_page}}</td></tr>

@endforeach

</table>

@endsection