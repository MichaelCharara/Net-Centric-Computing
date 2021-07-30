// define functions in this file

/*
function outputBox() {
    document.write("<div class='movingDiv' id='div1'>");
    document.write("This is div 1");
    document.write("</div>");

    var box = "<div class='movingDiv' id='div1'>";
    box += "This is div 1";
    box += "</div>";
    return box;
}
*/

// this variable has global scope
var boxClass = 'movingDiv';

function outputBox(num) {
    var box = "<div class=" + boxClass + " id='div" + num + "'>";
    box += "This is div " + num;
    box += "</div>";
    return box;
}

