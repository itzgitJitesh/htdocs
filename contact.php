<?php include'./views/partials/head.php';?>

<?php include'./views/partials/header.php';?>

<?php include'./views/form.php';?>

<?php include'./views/partials/footer.php';?>

<script>

function myfunction() {
 
 var user = document.getElementById("user").value;
 var email = document.getElementById("email").value;
 var mobile = document.getElementById("mobile").value;

 
 if(user === "" || email === "" || mobile === "")  {
     alert("PLease fill in the complete details");
     return false;
 } else if (user === "") {
     alert("Username cannot be blank");
 return false;
 } else if (email === "") {
     alert("Email-Id cannot be empty");
 return false;
 } else if (mobile === "" || mobile.length !==10) {
     alert("Enter valid mobile number");
 return false;
 } else {
     alert("Thankyou for contacting Us :)");
     alert("We have received your message and will get back to you shortly!");
 return true;
 }
}
</script>
</body>
</html>