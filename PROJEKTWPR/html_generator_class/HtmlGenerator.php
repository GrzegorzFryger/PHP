<?php




  class HtmlGenerator
  {



      public static function generateHtml($test,$test2)
      {
          $statement = count($test);

          for ($i = 0; $i < $statement; $i++) {
              echo '<hr class="featurette-divider">

    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-6">

                <img class="rounded mx-auto d-block" src="' . $test[ $i]->sourcePictureUrl . '">

                <h2 class="">' . $test[ $i ]->title .
                  '<span class="text-muted"></span>
                </h2>
                <p class="lead">
                    ' . $test[ $i ]->description . '
                </p>


            </div>


            <div class="col-xs-6">


                <img class="rounded mx-auto d-block" src="' . $test2[ $i ]->sourcePictureUrl . '">
                
                <h2 class="">' . $test2[$i]->title . '
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">
                    ' . $test2[$i]->description . '
                </p>


            </div>
        </div>';


          }

      }
  }