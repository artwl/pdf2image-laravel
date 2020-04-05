<?php

namespace Artwl\Pdf2Image;

/**
 * Description of PdfToImageFacade
 *
 * @author jianhua.wang
 */
use Illuminate\Support\Facades\Facade;

class Pdf2ImageFacade extends Facade
{

    /**
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Pdf2Image';
    }

}
