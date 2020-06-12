<?php
class Footer extends Block {

    private $footer;

    function __construct($footer) {
        $this->footer= $footer;
    }

    function getFooter() {
        return $this->footer;
    }

    function setFooter($footer) {
        $this->footer = $footer;
    }

    public function draw() {
        $str = <<<EOD
     <!-------------Блок "Footer"-------------------------->
       
     <!-- Container (Contact Section) -->
     <div id="contact" class="container-fluid bg-grey">
       <h2 class="text-center">{$this->footer}</h2>
       <div class="row">
         <div class="col-sm-5">
           <p>Contact us and we'll get back to you within 24 hours.</p>
           <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
           <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
           <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
         </div>
           </div>
         </div>
       </div>
     </div>
     
     <!-- Image of location/map -->
     
     </footer>
    <!-------------Конец блока "Footer"-------------------->\n
EOD;
        return $str;
    }

}

