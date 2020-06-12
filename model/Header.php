<?php

class Header extends Block {

    private $landing_header;
    private $logo_img;

    function __construct($landing_header = "Header", $logo_img = "") {
        $this->landing_header = $landing_header;
        $this->logo_img = $logo_img;
    }

    public function draw() {
        if ($this->logo_img) {
            $img = "<img src=\"{$this->logo_img}\" alt=\"logo\" class=\"logo\"/>";
        } else
            $img = "";
        $str = <<<EOD
    <!-------------Блок "Header"-------------------------->
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#myPage">{$img}</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about"></a></li>
          <li><a href="#services"></a></li>
          <li><a href="#portfolio"></a></li>
          <li><a href="#pricing"></a></li>
          <li><a href="#contact"></a></li>
        </ul>
      </div>
    </div>
  </nav>
  
<div class="jumbotron text-center">
<h1>{$this->landing_header}</h1>    

<form class="form-inline">
  <div class="input-group">
    
    <div class="input-group-btn">
      
    </div>
  </div>
</form>
</div>
    <!-------------Конец блока "Header"-------------------->\n
EOD;
        return $str;
    }

}
