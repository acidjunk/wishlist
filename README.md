Wishlist a Wish/Feature voting system
========================

This document contains information on how to download, install, and start
the wishlist. It's based on Symfony2; it features a bootstrap3 layout a small blog, contact page and a wishlist of features
with the ability to vote on features/wishes.

1) Installation
You'll need composer and sass preinstalled.

php composer.phar install

Tweak the setting in parameters.yml so it can reach at least a MySQL Database.

2) Generate DB and assets

Test the asset pipeline:
---
php app/console assetic:dump

Create DB:
---
mysqladmin -u MYSQLUSER -p create wishlist
OR use:
php app/console doctrine:database:create

Init the DB:
---
php app/console doctrine:schema:create

Generate some test data (optional)
---
php app/console doctrine:fixtures:load

3) Start the app in dev mode:

php app/console server:run

Released under the MIT or BSD license.

Enjoy!
