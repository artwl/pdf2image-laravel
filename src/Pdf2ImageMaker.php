<?php

namespace Artwl\Pdf2Image;

/**
 * split pdf file and save as image by one page
 *
 */
use Intervention\Image\Facades\Image;
use imagick;

class Pdf2ImageMaker
{
    protected $totalPages;
    protected $pdfFile = '';

    public function setFile($filename = '')
    {
        $this->pdfFile = $filename;
        return $this;
    }

    public function totalPages()
    {
        if (empty($this -> totalPages)) {
            $imagick = new \imagick();
            $imagick -> readImage($this->pdfFile);
            $this -> totalPages = (int)$imagick->getnumberimages();
        }
        return $this -> totalPages;
    }

    public function saveImages($saveDir, $pageIndex = -1)
    {
        $imagick = new \imagick();
        $imagick -> readImage($this -> pdfFile);
        $start = 0;
        $end = (int) $imagick->getnumberimages();
        $this->totalPages = $end;
        if ($pageIndex >= $end || $pageIndex < 0) {
            return null;
        }
        $ret = [];
        if ($pageIndex == -1) {
            for ($i = $start; $i < $end; $i++) {
                $ret[] = $this->saveImage($saveDir, $i);
            }
        } else {
            $ret[] = $this->saveImage($saveDir, $pageIndex);
        }
        return $ret;
    }

    private function saveImage($saveDir, $pageIndex) {
        $pdfFileName = explode("/", $this -> pdfFile).pop();
        $fileName = $saveDir . "/" . $pdfFileName . "_" . $pageIndex . ".jpg";
        $imagick = new \imagick();
        $imagick->setResolution(100, 100);
        $imagick -> readImage($this -> pdfFile . "[$pageIndex]");
        Image::make($imagick) -> save($fileName);
        return $fileName;
    }

}
