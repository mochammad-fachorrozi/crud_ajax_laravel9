<div class="p2">
    <div class="form-group my-2">
        {{-- <label for="name">Product</label> --}}
        <input type="text" name="name" id="name" value="{{ $datas->name }}" class="form-control" placeholder="Name Product">
    </div>
    <div class="form-group my-2">
        <input type="text" name="price" id="price" value="{{ $datas->price }}" class="form-control" placeholder="Price Product">
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-warning" onClick="update({{ $datas->id }})"> Update</button>
    </div>
</div>