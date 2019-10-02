<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">PRODUCT LIST</div>
        <div class="panel-body">
            <div class="row">
                @foreach($list as $item)
                    <ul class="col-md-3 list-group">
                        <li class="col-12 list-group-item"><img src="{{$item->thubmnail}}" alt="" width="200px"></li>
                        <li class="col-12 list-group-item">{{$item->title}}</li>
                        <li class="col-12 list-group-item"><b>{{$item->price -$item->price*$item->discount}}</b> <span style="text-decoration: line-through">{{$item->price}}</span></li>
                    </ul>
                @endforeach
            </div>
        </div>
        <div class="panel-footer">
            {{ $list->links() }}
        </div>
    </div>
</div>
</body>
</html>
