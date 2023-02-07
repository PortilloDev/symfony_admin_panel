#  Symfony Project

## Servicios

### Servidor NGINX
    imagen: nginx:1.17.8-alpine
### PHP 
    imagen: php:8.1-fpm-buster
### MYSQL
    imagen: mysql:8.0


This project is created with the use of some development tools. Docker, PHPStan, Pre-commit and PHP CS-FIXER.

Steps for build the application:

```
- composer create-project symfony/skeleton:"6.2.*" application
- mv replace application/* .
- mueve manualmente el fichero .env y .gitignore y elimina la carpeta application

```

## Dependencies:
```
Databases dependency: composer require symfony/orm-pack
Templates front: composer require symfony/twig-pack
Debbug: composer require symfony/debug-pack
Bundle: composer require symfony/maker-bundle --dev
Admin Panel: composer require easycorp/easyadmin-bundle
Seeders: composer require orm-fixtures --dev
Faker: composer require zenstruck/foundry --dev
```
Created new crud:
php bin/console make:admin:crud