@extends('layouts.dashboard')
@section('styles')
    <style>
        @media screen and (max-width:480px) {
            .unit-img {
                display: none;
            }
        }
    </style>
@endsection
@section('content')
    <div class="card-body">
        <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Create a <b class="text-primary">Unit</b></h4>
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item" style="float: left;">
                            <a href="{{route('dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item" style="float: left;"><a href="{{route('units.index')}}">Units</a></li>
                        <li class="breadcrumb-item" style="float: left;"><a href="{{route('units.create')}}">Create</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 p-4" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:20px">
                <form method="POST" action="{{ route('units.store') }}">
                    @csrf

                    <div class="row mb-3">


                        <div class="col-md-12">
                            <label for="name" class="col-form-label ">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 unit-img">
                <img src="{{ asset('files/assets/images/unit.png') }}" alt="" height="350">
            </div>
        </div>
    </div>

@endsection
