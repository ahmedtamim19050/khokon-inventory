@extends('layouts.dashboard')
@section('content')
    <div class="card-body">
        <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4><b class="text-primary">Edit</b> {{$unit->name}}</h4>
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item" style="float: left;">
                            <a href="../index.html"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item" style="float: left;"><a href="#!">Widget</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 p-4" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:20px">
                <form method="post" action="{{ route('units.update',$unit) }}">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">


                        <div class="col-md-12">
                            <label for="name" class="col-form-label ">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{$unit->name }}" autocomplete="name" autofocus>

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
                <img src="{{ asset('files/assets/images/unit.png') }}" alt="" height="300">
            </div>
        </div>
    </div>


@endsection