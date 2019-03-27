# Contao 4 WebP Bundle

Contao 4 Bundle to automatically replace jpg images with the webp Format, if the browser supports it.


## Requirements

For webp conversion your webserver must support one of the following libraries/methods:

 * `cwebp`
 * `gd`
 * `imagick`
 * `gmagick`
 
 If none of the libraries is available the image is returned in jpg format.

## Usage

All image and text contentelements contain an additional "Use WebP Format" checkbox.
If the checkbox is selected, the image will be converted.


