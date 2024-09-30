<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Eloquent ORM - CRUD</title>
    <!-- Lexend Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;700&display=swap">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
            font-family: 'Lexend', sans-serif; /* Use Lexend font */
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #007bff;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        a {
            color: #007bff;
            transition: color 0.3s;
        }
        a:hover {
            color: #0056b3;
            text-decoration: none;
        }
        .add-user-btn {
            margin: 9px 15px;
            float: right;
        }
        .bg-warning-subtle {
            background-color: #fff3cd; /* Subtle yellow background */
            padding: 10px;
            border-radius: 9px;
            margin-bottom: 20px;
        }
        .bg-warning-subtle h4 {
            font-family: 'Lexend';
            text-align: center; 
            font-weight: bold;
            font-size: 20px;
            
        }
        .card {
            margin-bottom: 20px;
            border: 1px solid #007bff;
            border-radius: 8px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            padding: 7px;
            border-radius: 5px 5px 0 0;
            font-weight: 700; /* Bold for card header */
        }

        .card-header h5{
            font-size: 20px;
        }
        .card-body {
            padding: 15px;
        }

        
        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            .card {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laravel Eloquent ORM - CRUD Operations</h1>
        <div class="row">
            <div class="col-md-12 bg-warning-subtle">
                <h4>@yield('title')</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               @yield('content')
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>
