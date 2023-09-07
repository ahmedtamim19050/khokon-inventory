@extends('layouts.dashboard')
@section('content')


    <div class="row justify-content-end mb-3" >
        <div class="col-2">
            <a class="btn btn-primary w-100" href="{{route('units.create')}}">Create Products</a>
        </div>
    </div>
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
        <div class="row align-items-end my-3 mx-3">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>All <b class="text-primary">Products</b></h4>
    
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item" style="float: left;">
                            <a href="{{route('dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item" style="float: left;"><a href="{{route('units.index')}}">Index</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                @if ($products->count() > 0)
                    <table class="table table-styling">
                        <thead>
                            <tr class="table-primary">
                                <th>#</th>
                                <th>name</th>
                                <th>sale price</th>
                                <th>buy price</th>
                                <th>Quantity</th>
                                <th>Created at</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($products as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->sale_price }}</td>
                                    <td>{{ $item->buy_price }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('units.edit', $item) }}" class="btn btn-primary">Edit</a>
                                        <form action="" class="d-inline">
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                @else
                    <h4 class="text-center text-danger">No Items found</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
