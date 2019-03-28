<?php
/**
 * Created by PhpStorm.
 * User: Mario-Laptop
 * Date: 27.03.2019
 * Time: 09:53
 */

namespace Postyou\ContaoWebPBundle\Util;

use Contao\Environment;
use Symfony\Component\Filesystem\Filesystem;
use WebPConvert\WebPConvert;

class WebPHelper
{

    public static function getWebPPicture($picture) {
        $picture['img']['src'] = self::getWebPImage($picture['img']['src']);
        $picture['img']['srcset'] = self::getWebPSrcsets($picture['img']['srcset']);

        foreach ($picture['sources'] as $key => $source) {
            $picture['sources'][$key]['src'] = self::getWebPImage($picture['sources'][$key]['src']);
            $picture['sources'][$key]['srcset'] = self::getWebPSrcsets($picture['sources'][$key]['srcset']);
        }
        return $picture;
    }


    public static function getWebPSrcsets($srcsetStr) {
        $srcsets = explode(", ",$srcsetStr);

        foreach ($srcsets as $key => $srcset) {
            $src = substr($srcset,0, strpos($srcset, " "));
            $factor = substr($srcset, strpos($srcset, " "));
            $srcsets[$key] = self::getWebPImage($src).$factor;
        }

        return implode(", ",$srcsets);
    }

    public static function getWebPImage($src) {
        if (strpos(strtolower($src),'.jpg') !== false || strpos(strtolower($src),'.jpeg') !== false) {
            $filesystem = new FileSystem();
            $newPath = substr($src, 0, strrpos($src, '.')).'.webp';

            if (!$filesystem->exists($newPath)) {

                $created = WebPConvert::convert($src, $newPath);

                if ($created) {
                    return $newPath;
                } else {
                    return $src;
                }
            }

            return $newPath;
        }

        return $src;
    }


    public static function hasWebPSupport() {
        $ua = Environment::get('agent');

        return ($ua->browser == 'firefox' && $ua->version >= 65)
            || ($ua->browser == 'chrome' && $ua->version >= 32)
            || ($ua->browser == 'edge' && $ua->version >= 18)
            || ($ua->browser == 'opera' && $ua->version >= 18)
            || (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false);
    }


}
