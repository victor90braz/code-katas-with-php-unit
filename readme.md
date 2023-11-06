github: https://github.com/victor90braz/code-katas-with-php-unit.git

composer require phpunit/phpunit

# set-up

composer.json

{
"require-dev": {
"phpunit/phpunit": "^10.4"
},
"autoload": {
"psr4": {
"App\\" : "src/"
}
}
}

run
composer dump-autoload
composer require --dev phpunit/phpunit
composer update
vendor/bin/phpunit tests/PrimeFactorsTest.php
