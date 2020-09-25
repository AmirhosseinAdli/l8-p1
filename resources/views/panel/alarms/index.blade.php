@extends('layouts.panel')
@section('content')
    <table>
        <a href="{{ route('panel.alarms.create') }}"><i class="fa fa-plus"></i>&nbsp;Create Alarm</a>

        <hr/>
        <tr>
            <th>Time Title</th>
            <th>Type</th>
            <th>Time</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->time->title}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->time}}</td>
        </tr>
        @endforeach
    </table>
@endsection
