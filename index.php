<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<p id="shoutbox"></p>

<form id='contactForm1' name='contactForm1' action='postshout.php' method='post'>
<div class="row">
    <div class="col-md-12">
    <input id="message" class="form-control shoutbox_msgbox" type='text' size='100%' name="message">
    </div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    var frm = $('#contactForm1');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
            },
            complete: function(){
              $("#message").focus().val('');
              $('#shoutbox').load('getshout.php');
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });
</script>

<script>
    function updateShouts(){
        // Assuming we have #shoutbox
        $('#shoutbox').load('getshout.php');
    }
    setInterval( "updateShouts()", 15000 );
	updateShouts();
</script>

</body>
</html>