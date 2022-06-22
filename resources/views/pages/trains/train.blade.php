 @extends('layout.layout')

@section('content')

<div>
@forelse ($trains as $key => $train)

@empty
        <h2>I treni non sono ancora arrivati a Tenerife </h2>
@endforelse
</div>
@endsection
