@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STAYEASY') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Vous vous êtes inscrit avec succès !') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <a href="route{{'reservation'}}">Reserver</a>
</div>
@endsection