Documentation
=============

This vagrant box allows you to boot up a Linux-Nginx-PHP-FPM-MySQL server. (LEMP)
Specifically, this includes:
+	Nginx
+ PHP-FPM
+ PHP5/PHP (various modules)
+ MySQL
+ phpMyAdmin

Notes
-----
+ Vagrant documentation: http://docs.vagrantup.com/v2
+ Setup help from: http://vesselinv.com/lemp-with-vagrant/
+ A decent example: https://github.com/10up/varying-vagrant-vagrants


Changelog
---------

To-dos
------
+ Create easy to edit root user and db user variables

How To Setup
------------

1.	Copy this base to whichever directory you would like to host your new site.
2.	Edit your Vagrantfile to utilize the correct host IP
3.	Run vagrant up

4.	Create your MySQL database (no longer utilizing phpmyadmin)
5.	Edit your Wordpress wp-config.php file to utilize the

6.	Press on!