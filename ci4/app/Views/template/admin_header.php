<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
    <header>
        <h1>Admin Portal Berita</h1>
    </header>
    <nav>
        <a href class="active">Dashboard</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= base_url('/about');?>">Tambah Artikel</a>
    </nav>
    <section id="wrapper">
        <section id="main">
        