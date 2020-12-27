# Relationships in Laravel

## Aim

The main goal of this project is the give an example on the use of relationships (blongsTo and hasMany) under Laravel. Data will be returned in JSON format. This example uses also the API Resource notion (not the resource route).

The example uses a database that contains two tables :

- drivers : contains data about drivers,
- cars : contains data about cars.

Every driver can drive several cars, a car is driven by only one driver.

## Modifications 

### Migrations

Two migrations are necessary to create the target database : one migration for each table. The "drivers" migration should be created first because the "cars" migration will refere to the "drivers" table.

### Seeders

Given that no particular IHM will be created, two seeders are used to populate the database.

### API Resource

To create an API Resource, the following command can be used :

`php artisan make:resource Driver`

`php artisan make:resource Car`

Then the `toArray()` function can be override to adapt the model to the JSON response.

## Important note

The response will be wrapped in the 'data' field in the json response. For example, if you have thefollowing driver :

`{
    'id' : 1,
    'full_name' : 'Sebastian Vettel'
}`

The generated json response will be :

`{
    'data': {
        'id' : 1,
        'full_name' : 'Sebastian Vettel'
    }
}`