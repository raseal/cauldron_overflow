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
- `php bin/console server:dump`

## Debugging on Symfony
In order to properly debug in sf, we need two packages: `profiler` and `debug`.

### Symfony profiler
We only need this tool on dev:
````
composer require profiler --dev
````
This include a profile bottom-bar (very useful to debug) and also the `dump()` and `dd()` functions.

### Debug pack
We need this package **on production**:
````
 composer require debug
````

This will include:
 - A new section on the profiler: `Logs`
 - A `var/log/dev.log` file
 - improved `dump()` : now the dump will be show on the profiler bar!
 - A new console command: `server:dump` : it will print every dump output into the terminal (very useful when debugging AJAX calls!)
 

