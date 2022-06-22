<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD USUARIOS</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

@extends('layouts.app')

@extends('complements.modal')

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD </a>
        </div>
    </nav>
    <div class="container">
        <div class="card py-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <caption>Lista de usuarios</caption>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-success" onclick="form([])" data-bs-toggle="modal" data-bs-target="#modal">Nuevo usuarios</a>
                    </div>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $info)
                        <tr>
                            <th scope="row">{{$info['id']}}</th>
                            <td>{{$info['NAME']}} {{$info['LAST_NAME']}} {{$info['LAST_NAME2']}}</td>
                            <td><a onclick="form(`{{ $info }}`)" data-bs-toggle="modal" data-bs-target="#modal"><img src="img/pencil-square.svg"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    function form(data) {

        let {
            id,
            NAME,
            LAST_NAME,
            LAST_NAME2
        } = data == "" ? "" : JSON.parse(data);
        $('#staticBackdropLabel').text(data == '' ? 'Nuevo usuario' : 'Editar usuario');
        $('#recipient-id').val(id == undefined ? "" : id);
        $('#recipient-name').val(NAME == undefined ? "" : NAME);
        $('#recipient-last').val(LAST_NAME == undefined ? "" : LAST_NAME);
        $('#recipient-last2').val(LAST_NAME2 == undefined ? "" : LAST_NAME2);
        $("#form").attr('action', data == '' ? '/' : `/update/${id == undefined ? "" : id}`);

    }
</script>