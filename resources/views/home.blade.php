@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-lg-3">
                <div class="card" style="width: 13rem;">
                    <img src="{{url('public/bookshop-in-a-town-vector-17085654.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 13rem;">
                    <img src="{{url('public/bookshop-in-a-town-vector-17085654.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 13rem;">
                    <img src="{{url('public/bookshop-in-a-town-vector-17085654.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 13rem;">
                    <img src="{{url('public/bookshop-in-a-town-vector-17085654.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
    </div>


        {{-- <div class="card" style="width: 18rem;">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}

@endsection
