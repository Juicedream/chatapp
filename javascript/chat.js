const form = document.querySelector(".typing-area"),
  inputField = form.querySelector(".input-field"),
  sendBtn = form.querySelector("button");

form.onsubmit = (e) => {
  e.preventDefault();//preventing form from submitting
}

sendBtn.onclick = () => {
  // lets start ajax coding
  let xhr = new XMLHttpRequest();//creating XML object
  xhr.open("POST", "php/insert-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        inputField.value = ""; //once message inserted into database then leave the input field blank


      }
    }
  }
  // sending form data through ajax from Html to php
  let formData = new FormData(form); //creating new formData Object
  xhr.send(formData); //sending the form data to php
}


setInterval(() => {
  // lets start ajax coding
  let xhr = new XMLHttpRequest();//creating XML object
  xhr.open("GET", "php/get-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (!searchBar.classList.contains("active")) { //if it is active in search bar, then the data will be added
          usersList.innerHTML = data;
        }
      }
    }
  }
  // sending form data through ajax from Html to php
  let formData = new FormData(form); //creating new formData Object
  xhr.send(formData); //sending the form data to php

}, 500); // this function will run frequently after 500ms 
