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
    private $html = 'http://wiadomosci.onet.pl/swiat';
    private $htmlPoland = 'http://wiadomosci.onet.pl/kraj';

    private $newsArray = array();

    public function __construct()
    {
        parent::__construct($this->html);

    }

    public function generateNews()
    {



        foreach ($this->htmlData as $item)
        {

            $a = new News();
            $a->title = $item->children(2)->children(1)->plaintext; // title
            $a->description = $item->children(2)->children(2)->plaintext; //description
            $a->sourceUrl = $item->children(2)->getAttribute('href'); //href
            $a->sourcePictureUrl = $item->children(2)->children(0)->children(0)->getAttribute('data-original'); //pictrue
            $a->tags = $item->children(0)->plaintext;
            $this->newsArray[] = $a;
            if(count($this->newsArray)== 6) break;

        }

    }

    public function getArrayNews()
    {
        return $this->newsArray;
    }

    protected function divStatement()
    {
        return $this -> statement;
    }
}