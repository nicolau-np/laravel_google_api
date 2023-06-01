@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                @foreach ($videos['items'] as $video)
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header">{{ $video['snippet']['title'] }}</div>
                        <div class="card-body">
                            <img src="{{ $video['snippet']['thumbnails']['high']['url'] }}" alt="" style="width: 100%;" srcset=""/>
                            <p>
                                {{ $video['snippet']['description'] }}
                            </p>

                        </div>
                        <div class="card-footer">
                         Data da Publicação: {{ date('d-m-Y', strtotime($video['snippet']['publishTime'])) }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
