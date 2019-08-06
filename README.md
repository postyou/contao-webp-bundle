[![](https://img.shields.io/maintenance/yes/2019.svg)](https://github.com/postyou/contao-webp-bundle)
# Contao 4 WebP Bundle

Contao 4 Bundle to automatically replace jpg and png images with the webp format, if the browser supports it.
You can disable the conversion of png images in the contao settings, e.g. when there are problems with the alpha channel.

## Requirements

For webp conversion your webserver must support one of the following libraries/methods:

 * `cwebp`
 * `gd`
 * `imagick`
 * `gmagick`
 
 If none of the libraries is available the image is returned in default format.

## Usage

In the conto system settings a "Use WebP Format" checkbox is added.
If the checkbox is selected, all images of image and text content elements will be converted.


