<?php




  class HtmlGenerator
  {



      public static function generateHtml($test,$test2)
      {
          $statement = count($test);

          for ($i = 0; $i < $statement; $i++) {
              echo '<div class="col-lg-6 portfolio-item">


          <div class="card h-100">
          
            <a href="#">
            <img class="card-img-top" src="'.$test[$i]->sourcePictureUrl .'"  alt="">
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="'.$test[$i]-> sourceUrl .'">'. $test[$i] -> title .'</a>
              </h4>
              <p class="card-text">'.$test[$i]-> description.'</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="'.$test2[$i]->sourcePictureUrl .'"  alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="'.$test2[$i]-> sourceUrl .'">'. $test2[$i] -> title .'</a>
              </h4>
              <p class="card-text">'.$test[$i]-> description.'</p>
            </div>
          </div>
        </div>';


          }

      }
  }