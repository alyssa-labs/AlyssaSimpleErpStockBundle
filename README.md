AlyssaSimpleErpStockBundle
==========================

**Warning**: This is my first Symfony2 bundle


Installation
============


Download bundles
----------------

Add the following lines to the file ``deps``::

    [AlyssaSimpleErpStockBundle]
        git=http://github.com/alyssa-labs/AlyssaSimpleErpStockBundle.git
        target=/bundles/Alyssa/SimpleErp/AlyssaSimpleErpStockBundle

and run::

  php bin/vendors install

Configuration
-------------

Next, be sure to enable the bundles in your autoload.php and AppKernel.php
files:

.. code-block:: php

    <?php
    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Alyssa\SimpleErp\StockBundle\AlyssaSimpleErpStockBundle(),
            // ...
        );
    }

    // autoload.php
    $loader->registerNamespaces(array(
        // ...
        'Alyssa'      => __DIR__.'/../vendor/bundles',
        // ...
    ));
