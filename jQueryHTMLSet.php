<!DOCTYPE html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("#test1").text("<b>Hello world!</b>");
            });

            $("#btn2").click(function(){
                $("#test2").html("<b>Hello world!</b>");
            });

            $("#btn3").click(function(){
                $("#test3").val("Dolly Duck");
            });

            $("#btn4").click(function(){
                $("#test4").text(function(i, origText){
                    return "Old text: " + origText + " New text: Hello world! (index: " + i + ")";
                });
            });

            $("#btn5").click(function(){
                $("#test5").html(function(i, origText){
                    return "Old html: " + origText + " New html: Hello <b>world!</b> (index: " + i + ")";
                });
            });

            $("#btn6").click(function(){
                // $("#w3s").attr({
                //     "href": "https://www.w3schools.com/jquery/",
                //     "title": "W3Schools jQuery Tutorial"
                // }); 
                $("#w3s").attr("href", function(i, origValue){
                    return origValue + "/jquery/";
                });
            });

        });
    </script>
</head>

<body>
    <p id="test1">This is a paragraph.</p>
    <p id="test2">This is another paragraph.</p>
    <p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>
    <button id="btn1">Set Text</button>
    <button id="btn2">Set HTML</button>
    <button id="btn3">Set Value</button>

    <p id="test4">This is a <b>bold</b> paragraph.</p>
    <p id="test5">This is another <b>bold</b> paragraph.</p>

    <button id="btn4">Show Old/New Text</button>
    <button id="btn5">Show Old/New HTML</button>

    <p><a href="https://www.w3schools.com" title="some title" id="w3s">W3Schools.com</a></p>
    <button id="btn6">Change href Value</button>
    
</body>