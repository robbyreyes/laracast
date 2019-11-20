@extends('layouts.app')

@section('content')
    @if(!is_null($posts))
    @foreach ($posts as $p)
        <div class="card p-4">
            <p><h4>{{$p->id}}</h4></p>
            <p><h2>{{$p->firstname}} {{$p->lastname}}</h2></p>
        </div>
        
    @endforeach
    
    @else
    <h2>xd</h2>
    @endif
    {{-- {{ $po }} --}}
@endsection