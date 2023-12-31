
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌿Your Digital Recipe Book🌿</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="resources/js/app.js" defer></script>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div x-data="{ showButtons: true }" class="text-center">
        <div class="title">
            <h1 class="text-4xl font-bold mb-8">🌿Your Digital Recipe Book🌿</h1>
        </div>

        <div class="home-btns" x-show="showButtons">
            <button x-on:click="window.location.href='/add-recipe'"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-4">
                Add New Recipe
            </button>

            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Cruise Your Recipes
            </button>
        </div>


    </div>

</body>
</html>