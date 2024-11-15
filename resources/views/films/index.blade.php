<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<?php require "../resources/views/layout/nav.blade.php"; ?>
<main class="flex-grow">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-8 mt-8">
        <h1 class="text-4xl font-bold mb-6 text-center">Films</h1>
        <div class="flex justify-end mb-4">
            <a href="/create" class="bg-blue-500 text-white px-5 py-3 rounded hover:bg-blue-700 transition">Add New Film</a>
        </div>
        <table class="min-w-full mt-4 bg-white border border-gray-300">
            <thead>
            <tr class="bg-gray-200 text-gray-700 text-sm leading-normal">
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Title</th>
                <th class="py-3 px-6 text-left">Director</th>
                <th class="py-3 px-6 text-left">Year</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
            <?php if (empty($films)): ?>
            <tr>
                <td colspan="5" class="py-3 px-6 text-center">No hi ha pelis disponibles.</td>
            </tr>
            <?php else: ?>
                <?php foreach ($films as $film): ?>
            <tr class="border-b border-gray-200 hover:bg-gray-100 transition">
                <td class="py-3 px-6"><?=$film['id'] ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($film['name']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($film['director']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($film['year']) ?></td>
                <td class="py-3 px-6 text-center">
                    <a href="/edit/<?= $film['id'] ?>" class="text-blue-500 hover:text-blue-700 transition">Edit</a>
                    <a href="/delete/<?= $film['id'] ?>" class="text-red-500 hover:text-red-700 transition">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>
<?php require "../resources/views/layout/footer.blade.php"; ?>
</body>
</html>
