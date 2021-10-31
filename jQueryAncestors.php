<!DOCTYPE html>
<html>
    <head>

        <style>
           .ancestors * {
               display: block;
               border: 2px solid lightgray;
               color: lightgray;
               padding: 5px;
               margin: 15px;
           } 
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

            $(document).ready(function(){
                // $("span").parent().css({"color": "red", "border": "2px solid red"});
                // $("span").parents("ul").css({"color": "red", "border": "2px solid red"});
                $("span").parentsUntil("div").css({"color": "red", "border": "2px solid red"});
            });            
            
        </script>

    </head>

    <body>
    <div class="ancestors">
        <div style="width:500px;">div (great-grandparent)
            <ul>ul (grandparent)  
                <li>li (direct parent)
                    <span>span</span>
                </li>
            </ul>   
        </div>

        <div style="width:500px;">div (grandparent)   
            <p>p (direct parent)
                <span>span</span>
            </p> 
        </div>
    </div>
    </body>

</html>