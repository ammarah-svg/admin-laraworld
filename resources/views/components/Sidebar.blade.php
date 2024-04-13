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
<body class="">



    <div style=" background-color:#192237" class="sidebar p-3 shadow text-white col-lg-2">

<div class="d-flex p-3">

    <img style="border-radius:50%" width="40px" height="40px" src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png" alt="">
<div class="ms-2">
    <h6>User1</h6>
    <p>Admin</p>
</div>

</div>

<div>
    <p>Pages</p>
    <div class="dash d-flex flex-column ">
       <a class="text-white text-decoration-none" href="/dash">Dashboard</a>
       <a class="text-white text-decoration-none" href="/users">Users</a>
       <a class="text-white text-decoration-none" href="/products">Products</a>
       <a class="text-white text-decoration-none" href="/transactions">Transactions</a>
<hr>

    </div>
</div>
<div>
    <p>Analytics</p>

    <div class="dash d-flex flex-column ">
       <a class="text-white text-decoration-none" href="/revenue">Revenue</a>
       <a class="text-white text-decoration-none" href="/reports">Reports</a>
       <a class="text-white text-decoration-none" href="/products">Teams</a>



    </div>
</div>
<hr>
<div>
    <p>User</p>

    <div class="dash d-flex flex-column pb-4 ">
       <a class="text-white text-decoration-none" href="/settings">Settings</a>
       <a class="text-white text-decoration-none" href="/help">Help</a>
       <a class="text-white text-decoration-none" href="/logout">Logout</a>



    </div>
</div>

    </div>

</div>
</body>
</html>

