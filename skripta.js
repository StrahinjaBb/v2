function fun() {
    var i;
    for(i=1; i<=5; i++) {
        var x = document.createElement("P");
        var t = document.createTextNode("Red broj: " + i);
        x.appendChild(t);
        document.body.appendChild(x);
    }
}