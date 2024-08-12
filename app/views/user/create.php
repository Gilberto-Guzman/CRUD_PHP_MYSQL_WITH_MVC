<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-xl font-bold">Create User</h1>
    <form action="/index.php?route=create" method="POST" class="mt-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        <label class="block text-gray-700 mt-4">Email</label>
        <input type="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Create</button>
    </form>
    <a href="/index.php" class="mt-4 inline-block text-blue-500">Back to Users</a>
</body>
</html>
