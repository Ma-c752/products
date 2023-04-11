@extends('layout.createproducts')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h3>Products</h3>
                    </div>
                </div>
                <!-- from here -->

                <div class="container">
                    <style>
                        .uper {
                            margin-top: 40px;
                        }
                    </style>
                    <div class="card uper">
                        <div class="card-header">
                            Add Product
                        </div>
                        <div class="card-body">
                            <form method="post" action="/insert">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Product Name:</label>
                                    <input type="text" class="form-control" name="product_name" />
                                </div>
                                <div class="form-group">
                                    <label for="price">Product Price :</label>
                                    <input type="text" class="form-control" name="product_price" />
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Product Quantity:</label>
                                    <input type="text" class="form-control" name="product_qty" />
                                </div>
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
                <script src="js/app.js" type="text/js"></script>

    </html>





    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <th>{{ $d->id }}</th>
                <th>{{ $d->name }}</th>
                <th>{{ $d->price }}</th>
                <th>{{ $d->quantity }}</th>
                <td>


                    <form action="{{ url('delete/' . $d->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection('content')
