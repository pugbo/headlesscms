# Mini workshop su headless cms Directus
Esercizio di installazione e configurazione del cms Directus 

## Materiale occorrente 
* apache2/httpd
* mod_fcgi
* php7 fpm
* mariadb-server/mysql
* node, npm/yarn
* nvm?

Installare Directus:
* `git clone https://github.com/directus/directus`
* mysql `create database directus`
* mysql `create user directus identified by directus`
* `mysql < directus.sql`
* puntare la root di apache su _./public_
* login con admin@example.com / password

## Installare l’ambiente
* `composer install`
* `yarn`

## Pronti, via!

:grin:
