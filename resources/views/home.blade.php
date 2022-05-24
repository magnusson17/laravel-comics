@extends('layout.layout')


@section('content')

<main>
    <div class="containeR">
        <div class="roW">

            @foreach ($array as $key => $eroi)

            <a href=" {{ route ( 'eroe', ['id' => $key] ) }} ">vai</a>
            <div class="coL">
                ciao
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection