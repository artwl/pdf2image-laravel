
# pdf2image-laravel

Laravel pdf to image tool

## Dependencies

1、imagick
2、intervention/image": "^2.0"

## Install

`$ composer require jianhuawang/laravel-pdf-to-image:0.4`
## Optional(Add Provider And Alias if laravel < 5.5)

Add this to your config/app.php

under "providers":

`JianhuaWang\PdfToImage\PdfToImageMaker::class,`

under "aliases":

`'PdfToImage'=>JianhuaWang\PdfToImage\PdfToImageFacade::class,`

## Examples

```
use PdfToImage;
 
PdfToImage::pdfDisk("localnormal") -> saveImages();
```
