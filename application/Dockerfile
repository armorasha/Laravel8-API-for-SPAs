# FROM php:7.1.8-apache
FROM php:7.3.0-apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf


RUN a2enmod rewrite

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /srv/app

RUN docker-php-ext-install mbstring pdo pdo_mysql \
    && chown -R www-data:www-data /srv/app
