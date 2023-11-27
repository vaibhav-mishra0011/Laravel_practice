<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
    <h2> Register Page </h2>
    <form method="post" action="{{route('users.register')}}">
        @csrf
        <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="abc@gmail.com" >
     
        <lablel for ="password"></label>
            <input type="password" id="password" name="password" placeholder="123456">

        <button type="submit"> SignUp </button>
    </form>

</body>
</html>