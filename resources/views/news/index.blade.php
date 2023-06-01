@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                @foreach ($news['articles'] as $new)
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header">{{ $new['title'] }}</div>
                        <div class="card-body">
                            <a href="/news/{{ $new['id'] ?? null }}">
                                <img src="{{ $new['urlToImage'] }}" alt="" style="width: 100%;" srcset=""/>
                            </a>
                            <p>
                                {{ $new['description'] }}
                            </p>

                        </div>
                        <div class="card-footer">
                         Data da Publicação: {{ date('d-m-Y', strtotime($new['publishedAt'])) }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
