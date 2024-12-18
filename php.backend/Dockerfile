FROM php:8.3-fpm

# Install Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Copy custom php.ini configurations
COPY ./php.ini /usr/local/etc/php/conf.d/

# Enable Xdebug settings for remote debugging
RUN echo "zend_extension=xdebug.so" > /usr/local/etc/php/conf.d/99-xdebug.ini \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/99-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/99-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/99-xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/99-xdebug.ini \
    && echo "xdebug.log=/var/log/xdebug.log" >> /usr/local/etc/php/conf.d/99-xdebug.ini
