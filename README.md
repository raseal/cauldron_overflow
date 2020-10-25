# CAULDRON OVERFLOW
SF5 workshop from symfonyCasts (with `docker`)

The goal is to build an app like stackoverflow (questions and answers).

## Templating
We will use `twig` as a template system since it's recommended by symfony.
```` 
composer require template
````
The recipe will create a `templates` folder in our project, but we can change its location via `config/packages/twig.yaml`

## Symfony console
Simply type `php bin/console` to see a list of commands.
There are a lot of useful commands:
- `php bin/console debug:router` 
- `php bin/console security:check`
