<div class="row">
    @foreach ($datas as $data)
    
    <div class="col-md-3">
        
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $data->name }}</h5>
                <p class="card-text">Rp. {{ $data->price }}</p>
                <button class="btn btn-sm btn-primary" onclick="edit({{ $data->id }})"> <i class="fa-solid fa-pen-to-square"></i></button>
                <button class="btn btn-sm btn-danger" onclick="destroy({{ $data->id }})"> <i class="fa-solid fa-trash"></i></button>
            </div>
        </div>
        
    </div>

    @endforeach
</div>