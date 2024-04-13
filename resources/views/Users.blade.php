<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-MYqvu3HlL5IB5sSmHvXItH3ORCe66/GJi87e7vS12iZj+nWQgEJ4FL/2x4Zs8lUFlMI+z9Zvl1wNU+qHp1mH9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class=" p-3 d-flex">
<x-Sidebar></x-Sidebar>
<div style="background-color:#151c2d" class="sidebar p-3 text-white col-lg-8">
    <x-Navbar/>
    <form method="POST" action="/add-user">
        @csrf
<div class="d-flex flex-column gap-3">
    <input class="w-50 form-control" type="text" placeholder="Username" name="username" required>

    @error('username')
        <p class="text-danger">{{ $message }}</p>
    @enderror

        <input class="w-50 form-control" type="text" name="email" placeholder="Email">
        @error('email')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <input class="w-50 form-control" type="text" name='phone' placeholder="Phone">
        @error('email')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <input class="w-50 form-control" type="text" name="password" placeholder="Password">
        @error('password')
        <p class="text-danger">{{ $message }}</p>
    @enderror
        <div class="w-50 ">
            <p class="text-success">Role</p>
        <select class="form-control"  name="role" id="">
            <option name='admin' value="admin">Admin</option>
            <option name='employee' value="employee">Employee</option>
            <option name='ceo' value="ceo">CEO</option>
        </select>
        @error('role')
        <p class="text-danger">{{ $message }}</p>
    @enderror  </div>


<button class="mt-5 btn btn-success shadow">Sign up</button>
        </form>

        </div>
</body>
</html>


