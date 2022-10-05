<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">

                <h1>Toko Elektronik Pak Oji</h1>
                <button type="button" class="btn btn-primary" onClick="create()"> <i class="fa-solid fa-plus"></i> Tambah Product</button>
                <a href="{{ url('employee') }}">crud ajax employee</a>

                <div id="read" class="mt-3">

                    
                </div>
            </div>
        </div>
    </div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="page" class="p-2">

          </div>
        </div>
        
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> --}}


    <script>

        $(document).ready(function() {
            read();
        });
        // read db
        function read() {
            $.get("{{ url('read') }}", {}, function(data, status) {
                $("#read").html(data);
            });
        }

        // utk halaman create
        function create() {
            // url create = mengarah ke route web.php
            $.get("{{ url('create') }}", {}, function(data, status) {
                $("#exampleModalLabel").html('Create Product')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }

        // utk proses create data
        function store() {
            let name = $("#name").val();
            let price = $("#price").val();
            $.ajax({
                type: "get",
                url: "{{ url('store') }}",
                data: {
                    name: name,
                    price: price
                },
                success: function(data) {
                    $(".btn-close").click();
                    read();
                }
            });
        }

        // halaman edit (show)
        function edit(id) {
            $.get("{{ url('edit') }}/" + id, {}, function(data, status) {
                $("#exampleModalLabel").html('Edit Product')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }

        // proses edit data
        function update(id) {
            let name = $("#name").val();
            let price = $("#price").val();
            $.ajax({
                type: "get",
                url: "{{ url('update') }}/" + id,
                data: {
                    name: name,
                    price: price
                },
                success: function(data) {
                    $(".btn-close").click();
                    read();
                }
            });
        }

        // utk delete atau destroy data
        function destroy(id) {
            // confirm("Apakah anda yakin untuk menghapus data ?");
            $.ajax({
                type: "get",
               
                url: "{{ url('destroy') }}/" + id,
              
                success: function(data) {
                    $(".btn-close").click();
                    read();
                }
            });
        }


    </script>
  </body>
</html>