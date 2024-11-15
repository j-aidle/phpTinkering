<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto">
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Delete Film</h1>
        <p class="mb-6 text-center text-gray-700">Vols eliminar la peli "<span class="font-bold text-xl"><?= htmlspecialchars($film->name) ?></span>"?</p>
        <form action="/destroy" method="POST" class="mt-4">
            <input type="hidden" name="id" value="<?= $film->id ?>">
            <button type="submit" class="w-full bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 trasintion duration-300">Delete</button>
        </form>
        <a href="/" class="text-gray-500 hover:underline mt-6 block text-center">Cancel</a>
    </div>
</div>
</body>
</html>