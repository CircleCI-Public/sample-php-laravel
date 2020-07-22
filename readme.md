# Sample Laravel Application with Codeception tests.

[![CircleCI](https://circleci.com/gh/CircleCI-Public/circleci-demo-php-laravel.svg?style=svg)](https://circleci.com/gh/CircleCI-Public/circleci-demo-php-laravel)

### Setup

You can setup this sample use [Laradock](https://laradock.io/) to automatically set up a development environment for you.

#### Laradock
- Install docker and docker-compose
- Clone repo
- Create your .env file from the example file: `cp .env.testing .env`
- Go to the `laradock` directory
- Run `docker-compose up -d nginx mysql workspace`
- Browse to http://localhost/

To SSH into the machine to run your tests, run `docker exec -it laradock_workspace_1 /bin/bash`.

### To test

Run Codeception, installed via Composer

```
./vendor/bin/codecept build
./vendor/bin/codecept run
```

## Tests

Please check out some [good test examples](https://github.com/janhenkgerritsen/codeception-laravel5-sample/tree/codeception-2.1/tests) provided.

### Functional Tests

Demonstrates testing of [CRUD application](https://github.com/janhenkgerritsen/codeception-laravel5-sample/blob/codeception-2.1/tests/functional/PostCrudCest.php) with

* [PageObjects](https://github.com/janhenkgerritsen/codeception-laravel5-sample/blob/codeception-2.1/tests%2Ffunctional%2F_pages%2FPostsPage.php)
* [authentication](https://github.com/janhenkgerritsen/codeception-laravel5-sample/blob/codeception-2.1/tests%2Ffunctional%2FAuthCest.php) (by user, credentials, http auth)
* usage of session variables
* [routes](https://github.com/janhenkgerritsen/codeception-laravel5-sample/blob/codeception-2.1/tests%2Ffunctional%2FRoutesCest.php)
* creating and checking records in database
* testing of form errors

### API Tests

Demonstrates functional [testing of API](https://github.com/janhenkgerritsen/codeception-laravel5-sample/blob/codeception-2.1/tests%2Fapi%2FPostsResourceCest.php) using REST and Laravel5 modules connected, with

* partial json inclusion in response
* GET/POST/PUT/DELETE requests
* check changes inside database
