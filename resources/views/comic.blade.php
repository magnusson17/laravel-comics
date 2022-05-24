@extends('layout.layout')

@section('content')
<div class="p_40">
    <div class="d_flex justify_content_center align_items_center">
        <div class="w_50 p_10">
            <h2>{{ $singleComicContainer['title'] }}</h2>
            <p>{{ $singleComicContainer['description'] }}</p>
        </div>
        <div class="">
            <img src="{{ asset('images/adv.jpg') }}" alt="img">
        </div>
            {{-- <img src="{{ $array['thumb'] }}" alt=""> --}}
    </div>
</div>
    
@endsection