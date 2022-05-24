@extends('layout.layout')


@section('content')

<main>
    <div class="p_40">
        <div class="">
            <div class="text_center">
                @foreach ($array as $key => $eroi)

                <a href="{{ route('eroe', ['id' => $key] ) }}">

                    <img src="{{ $eroi['thumb'] }}" alt="">
                    
                </a>
                @endforeach
            </div>

        </div>
    </div>
</main>

@endsection