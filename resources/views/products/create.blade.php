@extends('layouts.dashboard')
@section('content')
<div class="row align-items-end mb-5">
    <div class="col-lg-8">
        <div class="page-header-title">
            <div class="d-inline">
                <h4>Product <b class="text-primary">Create</b> </h4>
             
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
    <div class="card-body" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:20px">
        <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
            @csrf

            @include('products.form')
        </form>
    </div>
@endsection
