@extends('layouts.dashboard')

@section('styles')

@endsection
@section('content')


    <div class="row justify-content-end mb-3">
        <div class="col-2">
            <a class="btn btn-primary w-100" href="{{ route('products.create') }}">Create Products</a>
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
                    {{-- <ul class="breadcrumb-title">
                        <li class="breadcrumb-item" style="float: left;">
                            <a href="{{route('dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item" style="float: left;"><a href="{{route('units.index')}}">Index</a></li>

                    </ul> --}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">

                            </span>
                        </div>
                    </div>
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
                                <th>Unit</th>
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
                                    <td>{{ $item->unit->name }}</td>
                                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $item) }}" class="btn btn-primary">Edit</a>
                                        <form id="deleteForm" action="{{ route('products.destroy', $item) }}" class="d-inline"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="button" onclick="alert()" class="btn btn-danger">Delete</button>
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

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script>
        
        function alert() {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    
                    const form = document.getElementById("deleteForm");
                    form.submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection
