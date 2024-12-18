<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<!-- Navbar -->
<?php require "../resources/views/layout/nav.blade.php"; ?>

<main class="flex-grow">
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-8 mt-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Edit Film</h1>
        <form action="/update" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($film->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-3">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name:</label>
                <input type="text" name="name" value="<?= htmlspecialchars($film->name) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="director" class="block text-sm font-medium text-gray-700 mb-1">Director:</label>
                <input type="text" name="director" value="<?= htmlspecialchars($film->director) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Year:</label>
                <input type="number" name="year" value="<?= htmlspecialchars($film->year) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Edit</button>
        </form>
        <a href="/" class="text-gray-500 hover:underline mt-4 block text-center">Return</a>
    </div>
</main>

<!-- Footer -->
<?php require "../resources/views/layout/footer.blade.php"; ?>
</body>
</html>
