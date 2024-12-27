FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    curl \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo_pgsql pgsql

# If you get in trouble running XDebug, expose this port (9003 is xdebug default port)
# also is a good ideia to check if your firewall is not blocking the connection
# If firewall is blocking, create a new rule to allow connection through port 9003
# EXPOSE 9003