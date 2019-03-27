<?php


namespace Postyou\ContaoWebPBundle\Elements;

use Postyou\ContaoWebPBundle\Util\WebPHelper;

class WebPContentText extends \ContentText {

    public function compile()
    {
        parent::compile();

        if ($this->addImage && $this->singleSRC != '')
        {
            if ($this->useWebP && WebPHelper::hasWebPSupport()) {
                $picture = WebPHelper::getWebPPicture($this->Template->picture);
                $this->Template->picture = $picture;
                $this->Template->href = $picture['img']['src'];
            }
        }

    }


}
