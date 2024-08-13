<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Customer List</h2>
    <a href="/customers/create" class="btn btn-primary mb-3">Add New Customer</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if($customers): ?>
            <?php foreach($customers as $customer): ?>
                <tr>
                    <td><?= $customer['name']; ?></td>
                    <td><?= $customer['email']; ?></td>
                    <td><?= $customer['phone']; ?></td>
                    <td><?= $customer['address']; ?></td>
                    <td>
                        <a href="/customers/edit/<?= $customer['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/customers/delete/<?= $customer['id']; ?>" method="post" style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No customers found.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
