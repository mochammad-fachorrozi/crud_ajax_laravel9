<div class="p2">
    <div class="form-group my-2">
        {{-- <label for="name">Product</label> --}}
        <input type="text" name="name" id="name" class="form-control" placeholder="Name Product" required>
    </div>
    <div class="form-group my-2">
        <input type="numeric" name="price" id="price" class="form-control" placeholder="Price Product" required>
    </div>
    <div class="form-group mt-4 text-end">
        <button type="submit" class="btn btn-success" onClick="store()"> Create</button>
    </div>
</div>