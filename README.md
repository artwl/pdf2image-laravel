
# pdf2image-laravel

Laravel pdf to image tool

[![Latest Version on Packagist](https://img.shields.io/packagist/v/artwl/pdf2image-laravel.svg?style=flat-square)](https://packagist.org/packages/artwl/pdf2image-laravel)

## Dependencies

1、imagick

2、intervention/image": "^2.0"

## Install

`$ composer require artwl/pdf2image-laravel`
## Optional(Add Provider And Alias if laravel < 5.5)

Add this to your config/app.php

under "providers":

`Artwl\Pdf2Image\Pdf2ImageMaker::class,`

under "aliases":

`'Pdf2Image'=>Artwl\Pdf2Image\Pdf2ImageFacade::class,`

## Examples

### Get pdf file pages count

```php
use Pdf2Image;

$pageCount = Pdf2Image::setFile(public_path() . "/imgs/test.pdf") -> totalPages();
```


### Pdf all page to imgs
```php
use Pdf2Image;

$imgs = Pdf2Image::setFile(public_path() . "/imgs/test.pdf") -> saveImages(public_path() . "/imgs/");
```

### Pdf one page to img
```php
use Pdf2Image;

$imgs = Pdf2Image::setFile(public_path() . "/imgs/test.pdf") -> saveImages(public_path() . "/imgs/", 0);
```
