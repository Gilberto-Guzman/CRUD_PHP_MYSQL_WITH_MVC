<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-xl font-bold">User Details</h1>
    <p><strong>ID:</strong> <?= htmlspecialchars($user['id']) ?></p>
    <p><strong>Name:</strong> <?= htmlspecialchars($user['name']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
    <a href="/index.php" class="mt-4 inline-block text-blue-500">Back to Users</a>
</body>
</html>
