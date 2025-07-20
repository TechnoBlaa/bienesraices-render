FROM php:8.2-apache

# Instalar extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiar los archivos del proyecto
COPY bienesraices/. /var/www/html/

# Asegurar permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer puerto 80 (Apache)
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
