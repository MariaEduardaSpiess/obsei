<?php
    $link = strip_tags($_GET['p']);
?> 
    <footer class="footer">
        <div class="container">
            <hr class="featture-divider mb-0 <?php if ($link == '' or $link == 'link') echo 'mt-5'; ?>">
                <div class="container">
                    <p class="d-inline">&copy; 2018 OBSEI
                        &middot; <a href="#">Privacy</a>
                        &middot; <a href="#">Terms</a> &middot;</p>
                    <p class="d-sm-inline d-block">
                        Apoio:
                        <a href="http://www.cnpq.br" target="_blank"><img class="img-fluid ml-3 pb-md-1" height="16,3" width="55" src="images/cnpq.jpg"></a>
                        <a href="http://www.unisociesc.com.br" target="_blank"><img class="img-fluid ml-3 pb-sm-1 pb-md-2" height="16,5"
                                width="76,9" src="images/unisociesc-color.png"></a>
                    </p>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>