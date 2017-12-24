<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 23.12.2017
 * Time: 01:31
 */

include('lib/simplehtmldom/simple_html_dom.php');

include('data_class/News.php');

abstract class AbstractGenerator
{


    private $arrayNewsPoland = array();
    private $arrayNewsWorld = array();


    abstract protected function divStatement();

    abstract protected function htmlWorldStatement();

    abstract protected function htmlPolandStatement();


    abstract protected function getTitle($html);

    abstract protected function getDescription($html);

    abstract protected function getUrl($html);

    abstract protected function getUrlPicture($html);

    abstract protected function getTags($html);

    abstract protected function setWebAddress();


    /**
     * constructor for abstract classs
     */
    public function __construct()
    {


        $this->arrayNewsPoland = $this->generateNews($this->setHtmlDom(file_get_html($this->htmlPolandStatement())));
        $this->arrayNewsWorld = $this->generateNews($this->setHtmlDom(file_get_html($this->htmlWorldStatement())));


    }


    /**
     * @param $htmlData
     * @return array
     */
    protected function generateNews($htmlData)
    {
        $temp = array();
        foreach ($htmlData as $item) {
            $a = new News();
            $a->title = $this->getTitle($item);
            $a->description = $this->getDescription($item);
            $a->sourceUrl = $this->getUrl($item);
            $a->sourcePictureUrl = $this->getUrlPicture($item);
            $a->tags = $this->getTags($item);
            $temp[] = $a;
            if (count($temp) == 6) break;

        }
        return $temp;
    }

    protected function setHtmlDom($html2)
    {
        return $html2->find($this->divStatement());
    }

    public function refresh()
    {

        $this->arrayNewsPoland = $this->generateNews($this->setHtmlDom(file_get_html($this->htmlPolandStatement())));
        $this->arrayNewsWorld = $this->generateNews($this->setHtmlDom(file_get_html($this->htmlWorldStatement())));

    }


    public function getArrayPoland()
    {
        return $this->arrayNewsPoland;
    }

    public function getArrayWorld()
    {
        return $this->arrayNewsWorld;
    }


}
