@extends('canevas')
@section('content')
<div>
<form action="ajouter" method="get">
    @csrf
    <label for="">Objet: </label>
    <input type="text" name="objet" id="">
    <br>

    <p>frigo = 1, tiroir1 = 2, tiroir2 = 3, Garde robe = 4 </p>
    <label for="">Emplacement:</label>
    <input type="number" name="emplacement" id="">
    <br>

    <button type="submit" name="submit">ajouter objet</button>

</form>
</div>
@endsection