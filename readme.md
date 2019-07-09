## Emoji Calculator

![ScreenShot](https://github.com/EvhenZhykov/EmojiCalculator/blob/master/EmojiCalculator.png)

#### Installation

For correct installation, your server must have > PHP 7 installed.
To install, do the following:

- To clone the project to the local machine and enter the project folder
```bash
git clone https://github.com/EvhenZhykov/EmojiCalculator.git
cd EmojiCalculator/
```
- Run the web server
```bash
php -S localhost:8000
```
- Open page in browser: [http://localhost:8000/](http://localhost:8000/)

#### Tests

For running unit tests do the following:

- Install [Composer](https://getcomposer.org/)
```bash
composer install
```

- Make sure you have installed phpunit, if no 
```bash
wget -O phpunit https://phar.phpunit.de/phpunit-7.phar
```
```bash
sudo mv phpunit /usr/local/bin/phpunit
```
```bash
./phpunit --version
```
after that you should see something like this

```bash
PHPUnit 7.5.13 by Sebastian Bergmann and contributors.
```

And last step, run unit test

```bash
phpunit CalculatorTest.php
```

after that you should see something like this

```bash
PHPUnit 7.5.13 by Sebastian Bergmann and contributors.
....           4 / 4 (100%)
Time: 120 ms, Memory: 10.00 MB
OK (4 tests, 4 assertions)
```
