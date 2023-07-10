FROM php:7.0-apache
WORKDIR /var/www/html
COPY . .
EXPOSE 80
#Instala las extensiones de PHP necearias para MYSQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

CMD ["apache2-foreground"]