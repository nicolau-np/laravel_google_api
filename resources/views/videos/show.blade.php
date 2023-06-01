@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $id }}?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    </div>
</div>
@endsection
