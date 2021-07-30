
/* add code here */
var daysOfWeek = new Array("Mon", "Tues", "Wed", "Thur", "Fri");
daysOfWeek.push("Sat");
daysOfWeek.unshift("Sun");
document.write(daysOfWeek + "<br>");

document.write("<table border=1>");
document.write("<tr>");
for (var i = 0; i < daysOfWeek.length; i++) {
    if (daysOfWeek[i].length < 4)
        day = daysOfWeek[i];
    else
        day = "<em>" + daysOfWeek[i] + "</em>";

    document.write("<th>" + daysOfWeek[i] + "</th>");
}

document.write("</tr>");

document.write("<tr>");
for (var i = 1; i <= 7; i++) {
    document.write("<th>" + i + "</th>");
}
document.write("</tr>");
document.write("<tr>");
for (var i = 8; i <= 14; i++) {
    document.write("<th>" + i + "</th>");
}
document.write("</tr>");
document.write("<tr>");
for (var i = 15; i <= 21; i++) {
    document.write("<th>" + i + "</th>");
}
document.write("</tr>");
document.write("<tr>");
for (var i = 22; i <= 28; i++) {
    document.write("<th>" + i + "</th>");
}
document.write("</tr>");
document.write("<tr>");
for (var i = 29; i <= 30; i++) {
    document.write("<th>" + i + "</th>");
}
document.write("</tr>");

document.write("</table>");


