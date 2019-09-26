
@extends('layouts.app')
@section('content')
    <div class="container"> <h2>Ukupno prijavljenih ucesnika:</h2>
        <h3>{{ $br }}</h3>
{{--<p>        {{ $ucesnici->links() }}</p>--}}
    <div class="col-md-12" style="margin: 0 auto; width: 100%">
{{--
    @foreach($ucesnici as $u)
    <div class="col-md-6 bg-light shadow" style="height: 300px; padding:13px; width:60%;">
        <div class="col-md-6" style=" width:40%;">
        <p>{{ $u->ime }}</p>
        <p>{{ $u->prezime }}</p>
        <p>{{ $u->email }}</p>
        <p>{{ $u->godina_rodjenja }}</p>
        </div>
        <div class="col-md-6"  style=" width:40%;">
        <p>{{ $u->tip_organizacije }}</p>
        <p>{{ $u->organizacija }}</p>
        <p>{{ $u->pozicija }}</p>
        <p>{{ $u->iskustvo }}</p>
        <p>{{ $u->updated_at }}</p>
        </div>
    </div>

    @endforeach--}}
    </div></div>
@endsection