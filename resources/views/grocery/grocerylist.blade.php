<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/grocerylist.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class='row'>
        <div class='col'>
            <h2>ITEM DISPLAY</h2>
            <table class="table  table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($groceries)
                    @foreach($groceries as $grocery)
                    <tr>
                        <th scope='row'>{{ $grocery['id']}}</th>
                        <td>{{ $grocery['itemname'] }}</td>
                        <td>{{ $grocery['category'] }}</td>
                        <td> {{ $grocery['quantity'] }} </td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
        <div class='col'>

            <div class="container-fluid">
                <h2>Grocery List </h2>
                <form class='w-75' method="POST" action='/grocery'>
                    @csrf
                    <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">Item Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="itemname" name="itemname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="category" name="category">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="quantity" name="quantity">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>


</body>

</html>