<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JSON Data</title>
</head>
<body>

    <div id="placeholder"></div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
	$.getJSON('../application/model/createJson.php', function(data) {
        console.log(data);
        var htmlCode="<ul>";
        // Loop through the JSON array
        for (var i in data.pageTextData) {
            htmlCode += "<li>" + data.pageTextData[i].title 
                + " " + data.pageTextData[i].subtitle + " | " 
                + data.pageTextData[i].description+"</li>";
        }
        htmlCode+="</ul>";
        console.log(htmlCode);
        // Assign HTML to the placeholder tag using JQuery .html() id selector method
        $('#placeholder').html(htmlCode);
  	});
    </script>
</body>    

</html>