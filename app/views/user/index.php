<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-xl font-bold">Users</h1>
    <a href="/index.php?route=create" class="bg-blue-500 text-white px-4 py-2 rounded">Create User</a>
    <table class="min-w-full divide-y divide-gray-200 mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td>
                        <a href="/index.php?route=show&id=<?= $user['id'] ?>" class="text-blue-500">View</a>
                        <a href="/index.php?route=edit&id=<?= $user['id'] ?>" class="text-yellow-500">Edit</a>
                        <a href="/index.php?route=delete&id=<?= $user['id'] ?>" onclick="return confirm('Are you sure?')" class="text-red-500">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
