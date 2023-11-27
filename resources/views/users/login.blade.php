<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>
    <h2> Login Page</h2>
    <form method="post" action="{{route('users.login')}}">
        @csrf
        <label for="email"></label>
            <input type="email" id="email" placeholder="abc@gmail.com" >
     
        <lablel for ="password"></label>
            <input type="password" id="password" placeholder="123456">

        <button type="submit"> Login </button>
    </form>

</body>
</html>