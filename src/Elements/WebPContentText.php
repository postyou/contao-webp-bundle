<?php


namespace Postyou\ContaoWebPBundle\Elements;

use Postyou\ContaoWebPBundle\Util\WebPHelper;

class WebPContentText extends \ContentText {

    public function compile()
    {
        parent::compile();

        if ($this->addImage && $this->singleSRC != '')
        {

            if (\Config::get('useWebP') && WebPHelper::hasWebPSupport()) {

                $picture = WebPHelper::getWebPPicture($this->Template->picture);
                $this->Template->picture = $picture;
            }
        }

    }


}
