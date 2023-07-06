<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
</head>
<body>
<div class="container p-3">
    <form action="{{route('enregistrer')}}" method="post">
        @csrf
        <h1 class="mb-3">RELEVE</h1>
        <x-form::input name="matricule" label="Matricule" placeholder="Matricule"/>
        <x-form::input name="nom" label="Name" placeholder="Name"/>
        <x-form::select name="promotion" label="Promotion">
            <option value="bac1">Bac 1</option>
            <option value="bac2">Bac 2</option>
            <option value="bac3">Bac 3</option>
        </x-form::select>
        <button class="btn btn-primary">Soumettre</button>
    </form>

    <hr>
    <h1>LISTE DES DEMANDES</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Promotion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($demandes as $demande)
            <tr>
                <td>{{$demande->matricule}}</td>
                <td>{{$demande->nom}}</td>
                <td>{{$demande->promotion}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<x-form::scripts/>
</body>
</html>
