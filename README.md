1) Make Custom Validation Rule via artisan command -->  php artisan make:rule RuleName
2) Call rule in your controller--> 'field_name' => ['required', 'email', new RuleName],
