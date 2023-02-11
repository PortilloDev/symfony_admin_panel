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
Annotations Doctrine: composer require doctrine/annotations
Templates front: composer require symfony/twig-pack
Debbug: composer require symfony/debug-pack
Bundle: composer require symfony/maker-bundle --dev
Admin Panel: composer require easycorp/easyadmin-bundle
Seeders: composer require orm-fixtures --dev
Faker: composer require zenstruck/foundry --dev
twig: composer require --dev friendsoftwig/twigcs
```
Created new crud:
php bin/console make:admin:crud

Authentication Service. Steps:
- php bin/console make:user
- php bin/console make:auth
- php bin/console make:registration-form
- Review security.yaml file


Install bootstrap:
- composer require symfony/webpack-encore-bundle
- npm install bootstrap --save-dev
- npm install

go assets/sytles/app.cs and include the next line "@import 'bootstrap';". Latest execute in terminal the next command:
- npm run dev

Install npm and node in container:

- apt install sudo
- usermod -aG sudo root 
- sudo apt install curl
- curl -fsSL https://deb.nodesource.com/setup_17.x | sudo -E bash -
- sudo apt-get install -y nodejs   
- configurar en el archivo app/config/packages/twig.yaml
    -     form_themes: ['bootstrap_5_layout.html.twig']

