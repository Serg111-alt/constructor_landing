<?php

class Text extends Block {

    private $text;
    private $text_img;
    function __construct($text,$text_img = "") {
        $this->text = $text;
        $this->text_img = $text_img;
    }

    function getText() {
        return $this->text;
    }

    function setText($text) {
        $this->text = $text;
    }

    public function draw() {
        if ($this->text_img) {
            $text_img1 = "<img src=\"{$this->text_img}\" alt=\"logo\" class=\"logo\"/>";
        } else
           $text_img1 = "";
        $str = <<<EOD
     <!-------------Блок "Text"-------------------------->
     <!-- Container (Services Section) -->
     <div id="services" class="container-fluid text-center">
       <div class="row slideanim">
         <div class="col-sm-4">
          {$text_img1}
         
         </div>
         {$this->text}
       </div>
     </div>
      
    <!-------------Конец блока "Text"-------------------->\n
EOD;
        return $str;
    }

}
