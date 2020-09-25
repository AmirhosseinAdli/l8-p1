@extends('test')

@section('body')

    <div>
        Child Test
    </div>
    <form action="{{ route('test.form',array_merge(['data' => $data], $query) )}}" method="post">
        {{dd($query)}}
        {{dd(array_merge(['data' => $data], $query))}}
        @csrf
        <input type="text" name="inp" /><br>
        <br>
        <button type="submit">submit</button>
    </form>
    @parent
@endsection
