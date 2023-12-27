
End Points:
http://localhost/chat_app/Back_end/start/middleware.php/Prooms - POST
http://localhost/chat_app/Back_end/start/middleware.php/Pmessages - POST
http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/anonces- GET : all Anonces

http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/users - GET  : all Users

http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/PAnonces - POST : Insert Anonce
http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/PUsers - POST : Insert User

http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/MAnonces/id - PUT : update anonce
http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/Musers/id - PUT : update users

http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/Danonces/id - DELETE : delete anonce
http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/Dusers/id - DELETE : delete users





fetch users:  
<!-- 

var xhr = new XMLHttpRequest();
xhr.open("GET", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/users", true);
xhr.setRequestHeader("token", "code");
xhr.setRequestHeader("userid", 1);

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            // Successful response
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        } else {
            // Error handling
            console.error('XHR error:', xhr.status, xhr.statusText);
        }
    }
};

xhr.send();

 -->
 fetch anonces
 <!-- 
 var xhr = new XMLHttpRequest();
xhr.open("GET", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/anonces", true);
xhr.setRequestHeader("token", "code");
xhr.setRequestHeader("userid", 1);

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            // Successful response
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        } else {
            // Error handling
            console.error('XHR error:', xhr.status, xhr.statusText);
        }
    }
};

xhr.send();
  -->
 ADD USER 
 <!-- 
var xhr = new XMLHttpRequest();
xhr.open("POST", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/Pusers", true);
xhr.setRequestHeader("Content-Type", "application/json");  // Set the Content-Type header for JSON data
xhr.setRequestHeader("token", "code");
xhr.setRequestHeader("userid", "1");

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            // Successful response
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        } else {
            // Error handling
            console.error('XHR error:', xhr.status, xhr.statusText);
        }
    }
};

var requestData = {
    "username": "taha",
    "Email": "john@example.com",
    "MotDePasse": "securepassword",
    "id_role": "2"
};

xhr.send(JSON.stringify(requestData));

  -->
  ADD ARTICLE
  <!-- 
  var xhr = new XMLHttpRequest();
xhr.open("POST", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/PAnonces", true);
xhr.setRequestHeader("Content-Type", "application/json");  // Set the Content-Type header for JSON data
xhr.setRequestHeader("token", "code");
xhr.setRequestHeader("userid", "1");

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            // Successful response
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        } else {
            // Error handling
            console.error('XHR error:', xhr.status, xhr.statusText);
        }
    }
};

var requestData = {
    "Titre": "taha",
    "Contenu": "john@example.com",
    "id_user": 3
};

xhr.send(JSON.stringify(requestData))
   -->

DELETE user
<!-- 
var xhr = new XMLHttpRequest();
xhr.open("DELETE", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/Dusers/7", true);
xhr.setRequestHeader("Content-Type", "application/json");  // Set the Content-Type header for JSON data
xhr.setRequestHeader("token", "code");
xhr.setRequestHeader("userid", "1");

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            // Successful response
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        } else {
            // Error handling
            console.error('XHR error:', xhr.status, xhr.statusText);
        }
    }
};



xhr.send()
 -->

 DELETE ARTICLE
 <!-- 
    var xhr = new XMLHttpRequest();
xhr.open("DELETE", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/DANONCES/4", true);
xhr.setRequestHeader("Content-Type", "application/json");  // Set the Content-Type header for JSON data
xhr.setRequestHeader("token", "code");
xhr.setRequestHeader("userid", "1");

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            // Successful response
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        } else {
            // Error handling
            console.error('XHR error:', xhr.status, xhr.statusText);
        }
    }
};



xhr.send()
  -->

Modify anonce
<!-- 
var xhr = new XMLHttpRequest();
xhr.open("PUT", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/MAnonces/5", true);
xhr.setRequestHeader("Content-Type", "application/json");  // Set the Content-Type header for JSON data
xhr.setRequestHeader("token", "code");
xhr.setRequestHeader("userid", "1");

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            // Successful response
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        } else {
            // Error handling
            console.error('XHR error:', xhr.status, xhr.statusText);
        }
    }
};

var requestData = {
    "Titre": "lakhje",
    "Contenu": "john@example.com",
    "id_user": 3
};

xhr.send(JSON.stringify(requestData))
 -->

 Modify user
<!-- 
var xhr = new XMLHttpRequest();
xhr.open("PUT", "http://localhost/Survey-Corps_Blog/Back_end/start/middleware.php/Musers/3", true);
xhr.setRequestHeader("Content-Type", "application/json");  // Set the Content-Type header for JSON data
xhr.setRequestHeader("token", "code");
xhr.setRequestHeader("userid", "1");

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            // Successful response
            var data = JSON.parse(xhr.responseText);
            console.log(data);
        } else {
            // Error handling
            console.error('XHR error:', xhr.status, xhr.statusText);
        }
    }
};

var requestData = {
    "username": "ahmed",
    "Email": "john@example.com",
    "MotDePasse": "securepassword",
    "id_role": "2"
};

xhr.send(JSON.stringify(requestData))
 -->


 photos
 <!-- 
function uploadFile() {
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];

            var formData = new FormData();
            formData.append('file', file);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'http://localhost/Survey-Corps_Blog/Back_end/start/middlewarephotos.php', true);
            
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Handle the response from the server
                    console.log(xhr.responseText);
                } else {
                    console.error('Error during file upload. Status:', xhr.status);
                }
            };

            xhr.send(formData);
        }
  -->
  get photos
  <!-- 
  var xhr = new XMLHttpRequest();
        xhr.open("GET", "http://localhost/Survey-Corps_Blog/Back_end/start/storage/Capture d'écran 2023-10-03 111341.png", true);
        xhr.responseType = "blob"; 

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {

                    var blob = xhr.response;
                    var imageUrl = URL.createObjectURL(blob);

                    var imageContainer = document.getElementById('imageContainer');
                    var imageElement = document.createElement('img');
                    imageElement.src = imageUrl;
                    imageElement.alt = 'Fetched Image';
                    imageContainer.appendChild(imageElement);
                } else {
                    // Error handling
                    console.error('XHR error:', xhr.status, xhr.statusText);
                }
            }
        };

        xhr.send();
   -->