var LoginBtn = document.getElementById("Login-btn");
var LoginForm = document.getElementById("Login-form");
var HomeBtn = document.getElementById("home-btn");
var productsBtn = document.getElementById("Products-btn");
var ProductsForm = document.getElementById("Products-form");
var HomePage = document.getElementById("home");
var ProductsPage = document.getElementById("Products");

LoginBtn.addEventListener("click", function() {
  if (LoginForm.style.display === "none") {
    LoginForm.style.display = "block";
  } else {
    LoginForm.style.display = "none";
  }
});

homeBtn.addEventListener("click", function() {
  homePage.style.display = "block";
  productPage.style.display = "none";
});

productBtn.addEventListener("click", function() {
  homePage.style.display = "none";
  productPage.style.display = "block";
  window.location.href = "products.html";
});


