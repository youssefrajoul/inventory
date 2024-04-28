@extends('canevas')
@section('content')


    @foreach ($emplacements as $emplacement)
                <p id='{{$emplacement["id"]}}'>
                    {{$emplacement["name"]}} => contient: {{$emplacement["number"]}} 
                </p>
    @endforeach


<div id="detail"></div>

<script>
    $(document).ready(function() {
        $('p').click(function() {
            var clickedItemId =  $(this).attr('id');
            console.log(clickedItemId);
            fetch("http://127.0.0.1:8000/api/emplacement/${clickedItemId}/objets")
                .then((response) => response.json())
                .then(data => function (data) {
                    console.log("test");
                    for (let i = 0; i < data.length; i++) {
                        for (let j = 0; j < data[i].length; j++) {
                            $('#detail').append(data[i]['name']);
                        }
                    }  
                });
        });
    });
        
  

</script>

</div>
@endsection