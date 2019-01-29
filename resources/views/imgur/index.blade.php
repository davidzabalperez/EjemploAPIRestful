<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Imgur</title>
</head>
<body>
<form action="{{route('imgur.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <p><label for="foto"> Foto:</label> <input type="file" name="foto" class="form-control-file"> </p>
    <input type="submit" value="Enviar" name="submit" class="btn- btin-success">
    @if (isset($img))
        <img src="{{$img}}" alt="">
    @endif
</form>
</body>
</html>