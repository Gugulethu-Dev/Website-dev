document.getElementById("loginBtn").addEventListener("click", function() {
   let email = document.getElementById("emailInput").value;
   let password = document.getElementById("passwordInput").value;
   let message = document.getElementById("emailMessage");

   if(email == "" || password == ""){
       message.innerText = "Please fill in both fields";
       return;
   }

   fetch("login.php", {
       method: "POST",
       body: new URLSearchParams({
           email: email,
           password: password
       })
   })
   .then(res => res.text())
   .then(data => {
       message.innerText = data;
       message.style.color = data.includes("Welcome") ? "green" : "red";

       if(data.includes("Welcome")){
           setTimeout(() => {
               window.location.href = "dashboard.html"; 
           }, 1000);
       }
   });
});