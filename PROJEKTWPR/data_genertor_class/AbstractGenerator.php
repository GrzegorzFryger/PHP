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

    private $simpleHtmlDom;



  private $domDataaWorld;
  private $domDataPoland;

  private $newsArray;


  abstract protected function divStatement();
  abstract protected function getTitle($html);
  abstract protected function getDescription($html);
  abstract protected function getUrl($html);
  abstract protected function getUrlPicture($html);
  abstract protected function getTags($html);
  abstract protected function setWebAddress();




    /**
     constructor for abstract classs
     */
    public function __construct($str,$st2)
    {

     $this-> simpleHtmlDom = new simple_html_dom();
     



     }



     protected function generateNews()
     {

         foreach ($this->htmlData as $item)
         {
             $a =new News();
             $a->title = $this->getTitle($item);
            $a->description = $this->getDescription($item);
            $a->sourceUrl = $this->getUrl($item);
            $a->sourcePictureUrl = $this->getUrlPicture($item);
            $a->tags = $this->getTags();
            $this->newsArray[] = $a;
            if(count($this->newsArray)== 6) break;

         }

     }

    private function setDomWorld()
    {

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