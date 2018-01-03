<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 23.12.2017
 * Time: 21:54
 */


include('data_genertor_class/AbstractGenerator.php');


class OnetGenerator extends AbstractGenerator
{
    private $statement = 'div[class="listItem listItemSolr itarticle"]';
    private $HTMLWORLD = 'http://wiadomosci.onet.pl/swiat';
    private $HTMLPOLAND = 'http://wiadomosci.onet.pl/kraj';

    private $newsArray = array();

    public function __construct()
    {
        parent::__construct();

    }



    public function getArrayNews()
    {
        return $this->newsArray;
    }

    protected function divStatement()
    {
        return $this -> statement;
    }

    protected function getTitle($html)
    {
       return $html->children(2)->children(1)->plaintext;
    }

    protected function getDescription($html)
    {
       return $html->children(2)->children(2)->plaintext;
    }

    protected function getUrl($html)
    {
      return  $html->children(2)->getAttribute('href');
    }

    protected function getUrlPicture($html)
    {
        if('' == ($html->children(2)->children(0)->children(0)->getAttribute('data-original')))
        {
            $temphtml = file_get_html($html->children(2)->getAttribute('href'));
        print_r( $temphtml->find('div[class="pageContent pageWrapper"]'));




        }
        else
            return  $html->children(2)->children(0)->children(0)->getAttribute('data-original');


    }

    protected function getTags($html)
    {
      return  $html->children(0)->plaintext;
    }


    protected function htmlWorldStatement()
    {
         return $this->HTMLWORLD;
    }

    protected function htmlPolandStatement()
    {

        return $this->HTMLPOLAND;
    }


}
