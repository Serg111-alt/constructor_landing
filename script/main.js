function toUpper(){
    var textarea = document.getElementById('boot_main');
    var app = textarea.value;
    app = app.toUpperCase();
    textarea.value=app;
};

function toLower(){
    var textarea = document.getElementById('boot_main');
    var app = textarea.value;
    app = app.toLowerCase();
    textarea.value=app;
}

function toBold(){
    var textarea = document.getElementById('boot_main');
    textarea.style.fontWeight = "bold";
};

function toCursive(){
    var textarea = document.getElementById('boot_main');
    textarea.style.fontStyle = "italic";
};

function toLineThrough(){
    var textarea = document.getElementById('boot_main');
    textarea.style.textDecoration = "line-through";
};

function toUnderline(){
    var textarea = document.getElementById('boot_main');
    textarea.style.textDecoration = "underline";
};

function toNormal(){
    var textarea = document.getElementById('boot_main');
    textarea.style.textDecoration = "none";
    textarea.style.fontStyle = "normal";
    textarea.style.fontWeight = "normal";
};

function toLeft(){
    var textarea = document.getElementById('boot_main');
    textarea.style.textAlign = "left";
};

function toRight(){
    var textarea = document.getElementById('boot_main');
    textarea.style.textAlign = "right";
};

function toCenter(){
    var textarea = document.getElementById('boot_main');
    textarea.style.textAlign = "center";
};

function changeColor(){
    var textarea = document.getElementById('boot_main');
    var color_new = document.getElementById('color_ch').value;
    textarea.style.color = color_new;
};

function change_size(){
    var textarea = document.getElementById('boot_main');
    var size_value = document.getElementById('size_ch').value;
    var new_size = 2*(parseInt(size_value));
    textarea.style.fontSize = new_size+"px";
}