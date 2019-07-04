@extends('layout.footer') <!-- 公共尾部代码 -->

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title></title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="/1/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/1/stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="/1/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="/1/stylesheets/colors/color1.css">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="/1/stylesheets/animate.css">

    <!--[if lt IE 9]>
    <script src="/1/javascript/html5shiv.js"></script>
    <script src="/1/javascript/respond.min.js"></script>
    <![endif]-->
</head>
<body class="header_sticky header-style-1 has-menu-extra">

<!-- 公共头部代码 -->



@yield('content')








