<div class="row mb-3">


    <div class="col-md-6">
        <label for="name" class="col-form-label ">{{ __('Name') }}</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
            name="name" value="{{ $product->name ? $product->name : old('name') }}"   autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    
    <div class="col-md-6">
        @if($product->image)
        <img src="{{Storage::url($product->image)}}" alt="" height="100">
        @endif
        <label for="sale_price" class="col-form-label ">Image (optional)</label>
        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
            name="image" autocomplete="image">

        @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">


    <div class="col-md-6">
        <label for="sale_price" class="col-form-label ">Sale Price</label>
        <input id="sale_price" type="text" class="form-control @error('sale_price') is-invalid @enderror"
            name="sale_price" value="{{ $product->sale_price ? $product->sale_price : old('sale_price') }}"   autocomplete="email">

        @error('sale_price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="buy_price" class="col-form-label ">Buy Price</label>
        <input id="buy_price" type="text" class="form-control @error('buy_price') is-invalid @enderror"
            name="buy_price" value="{{$product->buy_price ? $product->buy_price : old('buy_price') }}"   autocomplete="email">

        @error('buy_price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">


    <div class="col-md-6">
        <label for="sale_price" class="col-form-label ">Quantity</label>
        <input id="qty" type="number" class="form-control @error('qty') is-invalid @enderror"
            name="qty" value="{{$product->qty ? $product->qty : old('qty') }}"   autocomplete="qty">

        @error('qty')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="unit" class="col-form-label ">Unit</label>
        <select name="unit" class="form-control @error('unit') is-invalid @enderror" id="unit">
            <option value="">Select Unit
            </option>
         @foreach ($units as $item)
             
           <option value="{{$item->id}}" >{{$item->name}}</option>
         @endforeach
           
        </select>

        @error('unit')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-0">
    <div class="col-md-6 ">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </div>
</div>