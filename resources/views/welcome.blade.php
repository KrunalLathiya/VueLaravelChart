<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Add Coin Details</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
   <div class="container" id="app">
       <coin-add-component></coin-add-component>
       <chart-component></chart-component></chart-component>
   </div>
   <script>
        window.Laravel = <?php echo json_encode([
            '_token' => csrf_token(),
        ]); ?>
    </script>
   <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>