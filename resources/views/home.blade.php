@extends('canevas')
@section('content')
<div>
    <p>Vous avez {{ $size}} objets dans votre inventaire</p>
    <a href="/emplacements">cliquez ici pour voir le détail</a>
</div>
@endsection
