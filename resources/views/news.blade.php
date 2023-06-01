@extends('layouts.app')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Palavra</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($palavras as $palavra)
                <tr>
                    <td>{{ $palavra['id'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
