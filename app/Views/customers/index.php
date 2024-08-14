<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
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
    
<?= $this->endSection() ?>
