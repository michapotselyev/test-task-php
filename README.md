# TestTask.php

## Instalation
Download directory, then
```
cd test-task-php
```

then
```
composer install
```
then make file
```phpunit.xml

<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/8.0/phpunit.xsd"
    backupGlobals="false"
    colors="true"
    bootstrap="vendor/autoload.php"
>
    <testsuites>
        <testsuite name="Tests">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>

```

## Usage
To run test use
```
vendor/bin/phpunit
```

To run program use
```
php src/index.php
```
