@extends("layout.app")
@section("content")

<div class="table-responsive">
<table class="table">

<tr><td>name</td><td>isbn</td><td>pages</td></tr>

@foreach($books as $book)

<tr><td>{{$book->name}}</td><td>{{$book->isbn}}</td><td>{{$book->nb_page}}</td></tr>

@endforeach

</table>
</div>

@endsection