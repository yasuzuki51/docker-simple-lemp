FROM centos:latest

# ルートディレクトリを作成
RUN yum update -y && yum clean all
RUN yum install -y epel-release
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum install -y --enablerepo=remi,remi-php72 php php-devel php-mbstring php-pdo php-gd php-xml php-mcrypt php-zip php-mysql
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer global require "laravel/installer"

RUN mkdir -p /var/www/
