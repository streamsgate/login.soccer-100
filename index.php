<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #fafafa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: white;
      padding: 40px;
      width: 400px;
      border-radius: 15px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    h2 {
      margin: 0 0 20px;
      font-weight: 500;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    input[type="email"] {
      width: 100%;
      padding: 10px 5px;
      font-size: 16px;
      border: none;
      border-bottom: 2px solid #3f51b5;
      outline: none;
    }

    .btn {
      margin-top: 30px;
      background-color: #3f51b5;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      font-weight: bold;
      float: right;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.15);
    }

    .btn:hover {
      background-color: #303f9f;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Sign in with email</h2>
    <label for="email">Email</label>
    <input type="email" id="email" placeholder="" required />
    <button class="btn" onclick="forwardPage()">NEXT</button>
  </div>

  <script>
    function forwardPage() {
      var email = document.getElementById("email").value;
      if (email.trim() !== "") {
        // Redirect to the forward page
        window.location.href = "next.html"; // Change this to your desired page
      } else {
        alert("Please enter your email.");
      }
    }
  </script>
</body>
</html>
