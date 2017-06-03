<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="styles/animate.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <style>
        .hide-input {
            visibility: hidden;
            height: 0 !important;
            margin: 0;
        }
        .picker__date-display {
            background: #aed581;
        }
        .datepicker {
            cursor: pointer;
        }
        .picker__weekday-display {
            background: #8bc34a;
        }
        .picker__day--selected, 
        .picker__day--selected:hover, 
        .picker--focused .picker__day--selected {
            background: #aed581;
        }
        label {
            pointer-events: none;
        }
        .collection {
            border: 0 !important;
        }
        .collection-item {
            position: relative;
            overflow: hidden;
            min-height: 100px;
            background: #f2f2f2 !important;
            padding-bottom: 20px !important;
            box-sizing: border-box;
            padding-right: 110px !important;
        }
        .picker--opened .picker__frame {
            top: 10px;
            transform: scale(.85);
        }
        .logo {
            width: 150px;
            filter: invert();
            padding-top: 18px;
        }
        .collection-item__date {
            position: absolute;
            right: 20px;
            top: 10px;
            font-weight: bolder;
        }
        body {
            background: #f9f9f9;
            font-family: "Open Sans";
        }
        .delete {
            padding: 0 13px;
            float: right;
            position: absolute;
            bottom: 15px;
            right: 20px;
        }
        a:active,
        a:focus,
        a:hover,
        a {
            outline: none
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
