# Define config path for various config files
$config_path = "puppet:////vagrant/puppet/configs"

# Prepare to run puppet shtuffz
Exec { path => "/bin:/usr/bin:/usr/local/bin" }
group { "puppet": ensure => present }

# Update package info...
exec { "apt-get update": command => "apt-get update" }

# Install MySQL...
class mysql ( $root_password = 'root' ) {
	
	# Retrieve required packages if they haven't already been defined
  if ! defined(Package['mysql-server']) {
    package { 'mysql-server':
      require => Exec["apt-get update"],
      ensure => 'present',
    }
  }

  if ! defined(Package['mysql-client']) {
    package { 'mysql-client':
      require => Exec["apt-get update"],
      ensure => 'present',
    }
  }

  # Start MySql
  service { "mysql":
    enable => true,
    ensure => running,
    require => Package["mysql-server"],
  }

  # Set new root password for db
  exec { "Set MySQL server root password":
    unless => "/usr/bin/mysqladmin -uroot -p${root_password} status",
    command => "/usr/bin/mysqladmin -uroot password ${root_password}",
    require => Package["mysql-server"],
  }

}

# Install Nginx
class nginx {
	
	# Upload config file before doing anything...
	file { "/etc/nginx/sites-available/default":
    ensure => file,
    source => "${config_path}/default",
    before => Service["nginx"],
  }

	# Retrieve required packages if they haven't already been defined
	if ! defined(Package['nginx']) {
    package { 'nginx':
      require => Exec["apt-get update"],
      ensure => 'present',
    }
  }

  # Run Nginx
  service { "nginx":
    enable => true,
    ensure => running,
    require => Package["nginx"],
  }

}

# Install php-fpm & other PHP stuffz
class php-fpm {

	# Upload config files before doing anything...
	file { "/etc/php5/fpm/pool.d/www.conf":
    ensure => file,
    source => "${config_path}/www.conf",
    before => Service["php5-fpm"],
  }
  file { "/etc/php5/apache2/php.ini":
    ensure => file,
    source => "${config_path}/php.ini",
    before => Service["php5-fpm"],
  }
	
	# Retrieve required packages if they haven't already been defined
	if ! defined(Package['php5-fpm']) {
    package { 'php5-fpm':
      require => Exec["apt-get update"],
      ensure => 'present',
    }
  }
  package { "libapache2-mod-php5": ensure => present }
  package { "php5": ensure => present }
  package { "php5-gd": ensure => present }
  package { "php5-curl": ensure => present }
  package { "php5-cli": ensure => present }
  package { "php5-dev": ensure => present }
  package { "php5-mcrypt": ensure => present }
  package { "php5-mysql": ensure => present }
  package { "php-pear": ensure => present }
  package { "php5-xmlrpc": ensure => present }

  # Run php-fpm
  service { "php5-fpm":
    enable => true,
    ensure => running,
    require => Package["php5-fpm"],
  }

}

include mysql
include nginx
include php-fpm
include phpmyadmin