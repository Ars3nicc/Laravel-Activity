<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/expense.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class='col'>

        <div class="expenses-form">
            <p class="expenses-header">Expenses Tracker</p>
            <form class='w-75' method="POST" action='/expenses'>
                @csrf
                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select class="expenses-dropdown" name="category" id="cars">
                            <option value="Personal">Personal</option>
                            <option value="Bill">Bill</option>
                            <option value="Transportation">Transportation</option>
                            <option value="Grocery">Grocery</option>
                            <option value="Shopping">Shopping</option>
                            <option value="Medicine">Medicine</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-10">
                        <input type="number" step="any" class="form-control" id="amount" name="amount">
                    </div>
                </div>
                <button type="submit" class="expenses-btn">Submit</button>
            </form>

        </div>
    </div>
    <div class='col'>
        <p class="expenses-header">Expenses Table</p>
        <table class="table  table-hover w-75">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                @isset($expenses)
                @foreach($expenses as $expense)
                <tr>
                    <th scope='row'>{{ $expense['id']}}</th>
                    <td>{{ $expense['category'] }}</td>
                    <td>{{ $expense['description'] }}</td>
                    <td> {{ $expense['amount'] }} </td>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>

</body>

</html>