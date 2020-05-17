<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户登录</title>
</head>
<body>
    <form action="{{  route('login')  }}" method="post">
        @csrf
        <div>
            用户名：
            <input type="text" name="username" value="admin" autocomplete="off">
        </div>
        <div>
            密码：
            <input type="password" name="password" value="password" autocomplete="off">
        </div>
        <div>
            <input type="submit" value="用户登录">
        </div>
    </form>
</body>
</html>