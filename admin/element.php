<?php

function inputElement($icon, $placeholder, $name, $value){
    $element = "
        <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text bg-warning\">$icon</div>
                        </div>
                        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
                    </div>
    
    ";

    echo $element;
}

function buttonElement($id, $style, $text, $name, $attr) {
    $button = "
        <button name='$name' '$attr' class='$style' id='$id'>$text</button>
    ";
    echo $button;
}