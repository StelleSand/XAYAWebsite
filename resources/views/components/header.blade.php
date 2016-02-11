<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta title="AOXAY | Attitute, now and future">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>AOXAY | Attitute, now and future</title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Material Design -->
    <link href="dist/css/bootstrap-material-design.css" rel="stylesheet">
    <link href="dist/css/ripples.min.css" rel="stylesheet">

    <!-- Bootstrap Source-->
    <script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="dist/js/ripples.min.js"></script>
    <script src="dist/js/material.min.js"></script>
    <script>
        $(document).ready(function(){
            $.material.init()
        })
    </script>
</head>
<body>
<div class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">AOXAY</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Diaries
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Us</li>
                        <li><a href="javascript:void(0)">Lance</a></li>
                        <li><a href="javascript:void(0)">Veronica</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Articles
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Wheels</a></li>
                        <li><a href="javascript:void(0)">Points</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Gallery</a></li>
                <li><a href="about">About</a></li>
            </ul>
            @if(!Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login">Login</a></li>
                <li><a href="register">Register</a></li>
            </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <?php $user = Auth::user(); ?>
                    <p class="navbar-text">Hello, <a class="text-danger" href="user/{{ $user->id }}">{{ $user->name }}</a>. <a class="text-info" href="logout">logout</a> </p>
                </ul>
            @endif
        </div>
    </div>
</div>