What is the difference
======================

- Added **NodeJs configuration option**. There are different NodeJS paths in some cases. The original Edition does not support the set different paths in different server or in different development environments on installation. 
- Added **PHP CS Fixer with `.php_cs` config file**. Using: `bin/php-cs-fixer fix --config-file=.php_cs`
- Added **Webtown/KunstmaanSetupBundle** and upgrade README.md
- Added **Webtown/WebtownDoctrineSchemaUpdateBundle**
- Added **.gitattributes** file
- Change **parameters.yml.dist**, use the `%database_name%` parameter
- Added **deployer/deployer** package
- Added **JMSTranslationBundle** fork

Install with Webtown/KunstmaanSetupBundle
=========================================

```
    composer install
    bin/init-existing-km-project
```

The `bin/init-existing-km-project` command check and install everything what you need.

Javascripts
===========

Kunstmaan Bundles Standard Edition
==================================

Welcome to the Kunstmaan Bundles Standard Edition - a fully-functional CMS (content management system) based on Symfony2 that you can use as the skeleton for your websites. Please refer to the documentation at [http://bundles.kunstmaan.be/getting-started](http://bundles.kunstmaan.be/getting-started) to get your CMS up and running.

![Screenshot](http://bundles.kunstmaan.be/uploads/media/521f4ef030de9.png?7dd5040)

Enjoy!

[![Build Status](https://travis-ci.org/Kunstmaan/KunstmaanBundlesStandardEdition.png?branch=master)](http://travis-ci.org/Kunstmaan/KunstmaanBundlesStandardEdition)
[![Total Downloads](https://poser.pugx.org/kunstmaan/bundles-standard-edition/downloads.png)](https://packagist.org/packages/kunstmaan/bundles-standard-edition)
[![Latest Stable Version](https://poser.pugx.org/kunstmaan/bundles-standard-edition/v/stable.png)](https://packagist.org/packages/kunstmaan/bundles-standard-edition)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Kunstmaan/KunstmaanBundlesCMS/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Kunstmaan/KunstmaanBundlesCMS/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Kunstmaan/KunstmaanBundlesStandardEdition/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Kunstmaan/KunstmaanBundlesStandardEdition/?branch=master)
