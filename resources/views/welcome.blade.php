<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
<h1>Chào mừng đến trang chủ!</h1>
@auth
    <p>Xin chào, {{ Auth::user()->name }}!</p>
    <a href="{{ route('dashboard') }}">Vào Dashboard</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Đăng xuất</button>
    </form>
@else
    <a href="{{ route('login') }}">Đăng nhập</a> |
    <a href="{{ route('register') }}">Đăng ký</a>
@endauth
</body>
</html>
