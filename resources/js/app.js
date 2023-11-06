import './bootstrap';

function toAddRecipe() {
    window.location.href = 'recipe.html'
}

function recipeForm() {
    return {
        recipeTitle: '',
        recipeIngredients: '',
        prepTime: '',
        cookingTime: '',
        servings: '',
        calories: '',
        recipeDirections: '',
        recipeNotes: '',

        saveRecipe() {
            // Prepare the data to be sent to the backend
            const formData = {
                title: this.recipeTitle,
                ingredients: this.recipeIngredients,
                prepTime: this.prepTime,
                cookingTime: this.cookingTime,
                servings: this.servings,
                calories: this.calories,
                directions: this.recipeDirections,
                notes: this.recipeNotes,
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

// }