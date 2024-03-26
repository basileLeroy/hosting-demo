# Basile & Code - Hosting a Laravel project

## Version 2.0.0

### HTACCESS file

```sh
<IfModule mod_rewrite.c>
# That was ONLY to protect you from 500 errors
# if your server did not have mod_rewrite enabled

RewriteEngine On
# RewriteBase /
# NOT needed unless you're using mod_alias to redirect

RewriteCond %{REQUEST_URI} !/public
RewriteRule ^(.*)$ public/$1 [L]
# Direct all requests to /public folder

</IfModule>
```
