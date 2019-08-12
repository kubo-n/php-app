#!/bin/sh

sudo yum -y update

# 日本語
sudo localectl set-locale LANG=ja_JP.UTF-8

# ファイルウォール無効化
sudo systemctl stop firewalld.service
sudo systemctl mask firewalld.service

# Apacheインストール
sudo yum -y install httpd
sudo cp /etc/httpd/conf/httpd.conf /etc/httpd/conf/httpd.conf.org
sudo cp /vagrant/provision/httpd/conf/httpd.conf /etc/httpd/conf/httpd.conf
sudo systemctl start httpd

# PHPインスççトール
sudo yum install -y epel-release
sudo rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
sudo yum install -y --enablerepo=remi,remi-php72 php php-devel php-mbstring php-pdo php-gd php-intl php-mysqlnd php-pecl-zip php-dom

sudo cp /etc/php.ini /etc/php.ini.org

sudo sed -i -e "s/;error_log = php_errors.log/error_log = \/var\/log\/php_errors.log/g" /etc/php.ini
sudo sed -i -e 's/;default_charset = "iso-8859-1"/default_charset = "UTF-8"/g' /etc/php.ini
sudo sed -i -e "s/;mbstring.language = Japanese/mbstring.language = Japanese /g" /etc/php.ini
sudo sed -i -e "s/;mbstring.internal_encoding = EUC-JP/mbstring.internal_encoding = UTF-8/g" /etc/php.ini
sudo sed -i -e "s/;mbstring.http_input = auto/mbstring.http_input = auto/g" /etc/php.ini
sudo sed -i -e "s/;mbstring.http_output = SJIS/mbstring.http_output = pass/g" /etc/php.ini
sudo sed -i -e "s/;mbstring.encoding_translation = Off/mbstring.encoding_translation = Off/g" /etc/php.ini
sudo sed -i -e "s/;mbstring.detect_order = auto/mbstring.detect_order = auto/g" /etc/php.ini
sudo sed -i -e "s/;date.timezone =/date.timezone = Asia\/Tokyo/g" /etc/php.ini

sudo systemctl restart httpd

# MySQLインストール
sudo yum localinstall -y http://dev.mysql.com/get/mysql57-community-release-el7-10.noarch.rpm
sudo yum -y install mysql-community-server
sudo systemctl enable mysqld.service
sudo systemctl start mysqld

# Composerインストール
sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo export PATH=$PATH:/usr/local/bin
sudo /usr/local/bin/composer global require "laravel/installer=~1.1"

# Laravelインストール
sudo /usr/local/bin/composer create-project laravel/laravel /vagrant/portfolio --prefer-dist