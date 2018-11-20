<html>
    <head>
        <meta charset="UTF-8">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
    </head>
    <body >
        <form method="get">
        <pre>
       <input type="button" id="load" value="show"></pre>
       <center> <h1 id="content"></h1></center>
      </form>
    </body>
    <script>
$('#load').click(function (){
   
// Adding loading GIF
 $('#content').html('<img id="loader-img" alt="" src="https://media1.tenor.com/images/8ac12962c05648c55ca85771f4a69b2d/tenor.gif?itemid=9212724" width="100" height="100" align="center" />');
 
 // Ajax Request
 $.ajax({
 type: "GET",
 data: "no data here XD",
 url: "export.php",
  success: function (data)
  {
 // This replace the retrieved data to the div after the setTimeOut function
      setTimeout(function () 
      {
        $('#content').html(data);
      }, 3000);
  }
    });
});
    </script>
</html>
