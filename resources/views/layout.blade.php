<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Eloquent ORM - CRUD</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f0f4f8; /* Softer background color */
            padding-top: 30px; /* Reduced padding */
        }
        h1 {
            text-align: center;
            margin-bottom: 20px; /* Reduced margin */
            color: #333; /* Darker text for better readability */
            font-size: 24px; /* Smaller font size */
        }
        .container {
            background-color: white;
            padding: 20px; /* Reduced padding */
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Softer shadow */
            max-width: 800px; /* Set a max width */
            margin: auto; /* Center the container */
        }
        .table th, .table td {
            vertical-align: middle;
            font-size: 14px; /* Smaller font size for table */
        }
        a {
            color: #007bff;
        }
        a:hover {
            color: #0056b3;
            text-decoration: underline; /* Changed to underline */
        }
        .add-user-btn {
            margin: 10px 0; /* Reduced margin */
        }
        .card {
            margin-bottom: 15px; /* Reduced margin */
            border: 1px solid #e0e0e0; /* Light gray border */
        }
        .card-header {
            background-color: #e7f1ff; /* Softer header background */
            color: #333; /* Darker text for better readability */
            padding: 10px; /* Reduced padding */
            border-radius: 5px 5px 0 0;
        }
        .card-body {
            padding: 15px;
        }
        .bg-warning-subtle {
            background-color: #fff; /* Removed the warning background */
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0; /* Added a border for subtlety */
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
