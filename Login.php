<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>

  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }
  .container {
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  .homepage-link{
    text-decoration:none;
    color:blue;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    
        <form action="index.html" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Your username.." required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Your password.." required>

      <label for="submit"></a></label>

      <input type ="submit" value="Login" >
     
    </form>
  </div>
</body>
</html>
 