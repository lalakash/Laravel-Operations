<!doctype html>
<html>
<head>
    <title>MyLoanCare | CRM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        color: #000;
        text-align: center;
    }
    fieldset.scheduler-border {
        border: 3px groove #ddd !important;
        padding: 0 1.4em 1.4em 1.4em !important;
        margin: 0 0 1.5em 0 !important;
        -webkit-box-shadow:  0px 0px 0px 0px #000;
        box-shadow:  0px 0px 0px 0px #000;
    }

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }

    .form-control {
        font-size: 13px;
    }

    .btn-warning {
        color: #fff;
        font-size: 13px;
    }

    .buttons-group {
        display: block; 
        margin-left: auto; 
        margin-right: auto; 
        display: table-cell;
    }
    </style>
</head>
<body>

@include('header')
<div class="container">
    <div id="main" class="row">
            @yield('content')
    </div>
    <footer>
        <!-- @include('footer') -->
    </footer>
</div>
<div id="main">
    @yield('query_content')
</div>
</body>
</html>
