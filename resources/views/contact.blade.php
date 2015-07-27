@extends('app')

@section('content')
    <h1>Contact Page<h1>
        @if (count($people))
        <h2>People I like: <h2>
            <ul>
                @foreach($people as $person)
                <li>{{ $person }}</li>
                  @endforeach  
            </ul>
         @endif   

@stop


@section('footer')
     <script type="text/javascript"> alert('Alert from Ankita Oza')</script>
@stop