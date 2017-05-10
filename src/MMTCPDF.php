<?php
namespace BeyondPlus\TCPDF;

use BeyondPlus\TCPDF\TCPDF_FONTS;
use BeyondPlus\TCPDF\TCPDF_STATIC;
use Elibyy\TCPDF\Facades\TCPDF;
use BeyondPlus\TCPDF\TCPDF_IMAGES;

/**
 *
 */
class MMTCPDF
{

  // function __construct(argument)
  // {
  //   # code...
  // }
      public static function font($fontname){
        TCPDF::setFontSubsetting(true);
        if($fontname == 'Zawgyi-One'){
          $fontname = TCPDF_FONTS::addTTFfont(dirname(__FILE__).'/font/Zawgyi-One.ttf', 'TrueTypeUnicode', '', 32);
        } elseif ($fontname == 'Myanmar3') {
          $fontname = TCPDF_FONTS::addTTFfont(dirname(__FILE__).'/font/Myanmar3.ttf', 'TrueTypeUnicode', '', 32);
        }
        return  $fontname;
      }

      public static function SetFont($fontname, $size){
        return TCPDF::SetFont($fontname, '', $size);
      }

      public static function SetTitle($title){
        return TCPDF::SetTitle($title);
      }

      public static function AddPage($ori, $paper){
        return TCPDF::AddPage($ori, $paper);
      }

      public static function writeHtml($data){
        return TCPDF::writeHtml($data);
      }

      public static function Output($name, $usage){
        return TCPDF::Output($name, $usage);
      }

      public static function setBgImage($img, $width , $height) {
        return TCPDF::Image($img, 0, 0, $width, $height, '', '', '', false, 300, '', false, false, 0);
      }
}



 ?>
