<?php include'./views/partials/head.php';?>

<?php include'./views/partials/header.php';?>

<div class="jumbotron">
  <h1>WorldLens Adventures :)</h1>
  <p>See the world through my lens, where every adventure is a story waiting to be told.</p>
</div>

<section class="my-5">
        <div class="py-5">
            <h2 class="text-center" >About Us</h2>
        </div>
        <br>
        <br>
        <div class="container-fluid"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="./images/sampl.jpg" alt="" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-5">WorldLens Adventures</h2>
                    <br><br>
                    <p py-4>
                    I'm a friendly travel photographer and tour guide. With a keen eye and a love for exploration, I capture the essence of each country, weaving stories through my lens. Join me on a visual journey that brings the world's wonders to life by capturing its essence through breathtaking photography. Explore, experience, and capture the world with us.
                    </p>
                    <a href="contact.php" class="btn btn-success">Know more</a>
                </div>
            </div>
        </div>
    </section>

<hr>
<hr>
<br>
<center><p>Ready to embark on your next adventure? Contact us now and let's capture your journey together!</p></center>
<br>
<hr>
<hr>
    <section class="my-5 text-white section-dark bg-dark">
            <div class="py-5">
                <h2 class="text-center">Contacts</h2>
            </div>
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post" onsubmit="return myfunction()">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" autocomplete="off" class="form-control" id='user'>
                    </div>
                    <div class="form-group">
                        <label>Email-Id</label>
                        <input type="text" name="email" autocomplete="off" class="form-control" id='email'>
                    </div>
                    <div class="form-group">
                        <label>Mobile no.</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control" id='mobile'>
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" name="comment"></textarea>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> I agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-success active">Submit</button>
                    <br><br><br><br>
                </form>
            </div>
        </section>

        <?php include'./views/partials/footer.php';?>

</body>
</html>