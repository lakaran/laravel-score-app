<!DOCTYPE html>
<html>
<head>
    <title>Ranking</title>
</head>
<body>

<h1>Enviar Pontuação</h1>

<form method="POST" action="{{ route('score.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nome" required>
    <input type="number" name="score" placeholder="Pontuação" required>
    <button type="submit">Enviar</button>
</form>

<h2>Ranking</h2>

<ul>
@foreach($scores as $score)
    <li>{{ $score->name }} - {{ $score->score }}</li>
@endforeach
</ul>

</body>
</html>
