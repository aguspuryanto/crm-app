<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Dashboard</h2>
    <p>Welcome, <?= session()->get('username'); ?>!</p>
    <a href="/customers" class="btn btn-primary">Manage Customers</a>
    <a href="/logout" class="btn btn-danger">Logout</a>
</div>
</body>
</html>
