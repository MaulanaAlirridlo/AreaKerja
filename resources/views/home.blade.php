@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        
                        ini halaman home.
                        <h1>laravel laravel laravel. laravel dowo buntute</h1>

                        <b>gondol gondol pacul cul gembelengan. nyunggi-nyunggi wakulkul gembelengan. 
                        wakul glimpang. segone dadi sak latar
                        wakul glimpang. segone dadi sak latar</b>

                        yuhuuuu yahahahah hayyuuuk
                    <p>{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
