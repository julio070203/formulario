<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido!</title>
    <link rel="stylesheet" href="">
</head>

<body>
    @section ('start')
    <main>
    <form action="{{action('kobe@verify')}}" method = "POST">
        {{csrf_field()}}
        <label for="user">Usuario</label>
        <input type="text" name = "user">
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name = "pass">
        <br>
       
        <input type="submit" value = "Ingresar">
    </form>
    </main>
    @show
</body>

</html>