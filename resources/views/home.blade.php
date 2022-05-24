@extends('layout.layout')


@section('content')

<main>
    <div class="p_40">
        <div class="">
            <div class="text_center">
                @foreach ($comicsContainer as $key => $comics)

                <a href="{{ route('comic', ['id' => $key] ) }}">

                    <img src="{{ $comics['thumb'] }}" alt="">
                    
                </a>
                @endforeach
            </div>

        </div>
    </div>
</main>

@endsection