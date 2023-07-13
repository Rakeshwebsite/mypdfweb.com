<div id="dvImage" style="height: 308px; width: 410px">
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    var images = ["loginbg.jpeg", "Desert.jpg", "loginbg.jpeg", "Jellyfish.jpg", "loginbg.jpeg", "Lighthouse.jpg", "Penguins.jpg", "Tulips.jpg"];
    $(function () {
        var i = 0;
        $("#dvImage").css("background-image", "url(http://localhost/rakeshproject/" + images[i] + ")");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
            $("#dvImage").fadeOut("slow", function () {
                $(this).css("background-image", "url(images/" + images[i] + ")");
                $(this).fadeIn("slow");
            });
        }, 5000);
    });
</script>