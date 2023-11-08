
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌿Your Digital Recipe Book🌿</title>
    <!-- <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        function recipeForm() {
            return {
                title: '',
                ingredients: '',
                prepTime: '',
                cookingTime: '',
                servings: '',
                calories: '',
                directions: '',
                notes: '',

                saveRecipe() {
                    // Prepare the data to be sent to the backend
                    const formData = {
                        title: this.title,
                        ingredients: this.ingredients,
                        prepTime: this.prepTime,
                        cookingTime: this.cookingTime,
                        servings: this.servings,
                        calories: this.calories,
                        directions: this.directions,
                        notes: this.notes,
                    };

                    // Send the data to your Laravel backend using an HTTP request
                    // For example, using fetch API or Axios
                    fetch('/save-recipe', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token if using Laravel CSRF protection
                        },
                        body: JSON.stringify(formData),
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Handle the response from the backend if needed
                        console.log(data);
                    })
                    .catch(error => {
                        // Handle errors if any
                        console.error(error);
                    });
                }
            };
        }
    </script>
</head>

<body>

    <div x-data="recipeForm()" class="text-center">
        <div class="recipe">
        <div class="recipe-title">
            <h1><input class="text-4xl font-bold mb-8" type="text" x-model="title" placeholder="Enter recipe title here"></h1>
        </div>
        <div class="recipe-middle">
            <div class="ingredients">
                <div class="recipe-ingredients">
                    <h3 class="recipe-subtitle">INGREDIENTS</h3>
                    <input type="text" x-model="ingredients" placeholder="Enter recipe ingredients here">
                    
                </div>
            </div>
            <div class="info-directions">
                <h3 class="recipe-subtitle">COOKING INFORMATION</h3>

                <div class="important-info">
                    <div class="info-icon"><div><span class="material-symbols-outlined">schedule</span> <input type="text" x-model="prepTime" placeholder="Prep Time"></div> Prep Time</div>
                    <div class="info-icon"><div><span class="material-symbols-outlined">timer</span> <input type="text" x-model="cookingTime" placeholder="Cooking Time"></div>Cooking Time</div>
                    <div class="info-icon"><div><span class="material-symbols-outlined">dining</span> <input type="text" x-model="servings" placeholder="Servings"></div>Servings</div>
                    <div class="info-icon"><div><span class="material-symbols-outlined">local_fire_department</span> <input type="text" x-model="calories" placeholder="Calories"></div>Calories</div>
    
                </div>
                <div class="recipe-directions">
                    <h3 class="recipe-subtitle">DIRECTIONS</h3>
                    <input type="text" x-model="directions" placeholder="Enter recipe directions here">
                </div>
            </div>
        </div>
        <div class="notes">
            <h3 class="recipe-subtitle">NOTES</h3>
            <input type="text" x-model="notes" placeholder="Enter recipe notes here">

         

        </div>

        <button @click="saveRecipe" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Save</button>

    </div>



</body>

</html>