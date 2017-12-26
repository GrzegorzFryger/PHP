<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 26.12.2017
 * Time: 13:50
 */
//include ('data_genertor_class/OnetGenerator.php');

$dom = new DOMDocument('1.0');

echo $dom->saveHTML();





$rowElement = $dom->createElement('div' );//Create new <style> tag with the css tags
$domAttribute = $dom->createAttribute('class');//Create the new attribute 'type'
$domAttribute->value = 'col-xs-6';//Add value to attribute
$rowElement->appendChild($domAttribute);//Add the attribute to the style tag

$dom->appendChild($rowElement);//Add the style tag to document


$tekst ='asd';
$imgElement = $dom ->createElement('img');
$classAtribute = $dom->createAttribute('class');
$classAtribute ->value = 'rounded mx-auto d-block';
$srcAtribute = $dom->createAttribute('src');
$srcAtribute ->value = 'testowedane';
$imgElement ->appendChild($classAtribute);
$imgElement->appendChild($srcAtribute);

$rowElement ->appendChild($imgElement);


$h2Element = $dom ->createElement('h2',"przykładowa tresc");
$classAtribute ->value = ' ';
$spanElement = $dom->createElement('span');


$h2Element ->appendChild($classAtribute);
$classAtribute ->value = 'text-muted';
$spanElement ->appendChild($classAtribute);

$h2Element ->appendChild($spanElement);



$rowElement ->appendChild($h2Element);

$pElement = $dom -> createElement('p',"jakas wartosc");
$classAtribute ->value = 'lead';
$pElement ->appendChild($classAtribute);
$rowElement ->appendChild($pElement);

////-----------------------------------------------------------------



//$dom->appendChild($style2);



echo "sad";

$test = new OnetGenerator();

echo $test ->getArrayWorld()[4]->sourcePictureUrl;

//print_r( $dom->saveHTML());


//------------------------------------------------------------------------------------------------------------------------


<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 26.12.2017
 * Time: 13:36
 */


include ('data_genertor_class/OnetGenerator.php');

class HtmlGenerator2
{


    private $test;


    public function __construct($a)
    {
        $this->test = $a;
    }

    public function generate($var)
    {







        $dom = new DOMDocument('1.0');

        echo $dom->saveHTML();





        $rowElement = $dom->createElement('div' );//Create new <style> tag with the css tags
        $domAttribute = $dom->createAttribute('class');//Create the new attribute 'type'
        $domAttribute->value = 'col-xs-6';//Add value to attribute
        $rowElement->appendChild($domAttribute);//Add the attribute to the style tag

        $dom->appendChild($rowElement);//Add the style tag to document


        $tekst ='asd';
        $imgElement = $dom ->createElement('img');
        $classAtribute = $dom->createAttribute('class');
        $classAtribute ->value = 'rounded mx-auto d-block';
        $srcAtribute = $dom->createAttribute('src');

        $srcAtribute ->value = $this ->test->getArrayWorld()[$var]->sourcePictureUrl;

        $imgElement ->appendChild($classAtribute);
        $imgElement->appendChild($srcAtribute);

        $rowElement ->appendChild($imgElement);


        $h2Element = $dom ->createElement('h2',$this ->test->getArrayWorld()[$var]->title);
        $classAtribute ->value = ' ';
        $spanElement = $dom->createElement('span');


        $h2Element ->appendChild($classAtribute);
        $classAtribute ->value = 'text-muted';
        $spanElement ->appendChild($classAtribute);

        $h2Element ->appendChild($spanElement);



        $rowElement ->appendChild($h2Element);

        $pElement = $dom -> createElement('p',$this ->test->getArrayWorld()[$var]->description);
        $classAtribute ->value = 'lead';
        $pElement ->appendChild($classAtribute);
        $rowElement ->appendChild($pElement);

////-----------------------------------------------------------------



//$dom->appendChild($style2);

        return $dom->saveHTML();
    }

}




