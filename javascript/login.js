const form = document.querySelector(".login form"),
  continueBtn = form.querySelector(".button input"),
  errorText = form.querySelector(".error-txt");
successText = form.querySelector(".success-txt");

form.onsubmit = (e) => {
  e.preventDefault();//preventing form from submitting
}

continueBtn.onclick = () => {
  // lets start ajax coding
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/login.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "success") {
          location.href = "users.php";
        } else {
          errorText.textContent = data;
          errorText.style.display = "block";

        }
      }
    }
  }
  // sending form data through ajax from Html to php
  let formData = new FormData(form); //creating new formData Object
  xhr.send(formData); //sending the form data to php
}