<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 23.12.2017
 * Time: 01:31
 */

include ('lib/simplehtmldom/simple_html_dom.php');

include ('data_class/News.php');

abstract class AbstractGenerator
{
  private $html2;
  protected $htmlData;

  abstract protected function divStatement();



    /**
     constructor for abstract classs
     */
    public function __construct($str)
    {

     $this-> html2 = file_get_html($str);
     $this ->setHtmlDom();

     }



     private function setHtmlDom()
    {
       $this->htmlData = $this ->html2 ->find($this->divStatement());
    }

    public function getArrayHtmlDom()
    {
      return $this ->htmlData;
    }






}