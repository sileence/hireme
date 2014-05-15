@extends('layout')

@section('content')

<div class="container">
    <h1>Backend developers</h1>

    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Ver</th>
        </tr>

        <tr>
            <td>Duilio Palacios</td>
            <td>Freelance</td>
            <td>I'm a web developer senior, I love rainbow unicorns.</td>
            <td width="50">
                <a href="" class="btn btn-info">
                    Ver
                </a>
            </td>
        </tr>


    </table>

</div> <!-- /container -->

@endsection