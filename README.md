
# pdf2image-laravel

Laravel pdf to image tool

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

```php
use Pdf2Image;

$imgs = Pdf2Image::setFile(public_path() . "/imgs/test.pdf") -> saveImages(public_path() . "/imgs/");
```
