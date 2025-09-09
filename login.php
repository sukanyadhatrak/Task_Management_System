           
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title> 
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style1.css">
  <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgb(63, 196, 173);
  }
  .container {
    position: relative;
    max-width: 500px;
    width: 100%;
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  }
  .container header {
    font-size: 1.5rem;
    color: #333;
    font-weight: 500;
    text-align: center;
  }
  .container .form {
    margin-top: 30px;
  }
  .form .input-box {
    width: 70%;
    margin-top: 20px;
  }
  .links{
display: flex;
justify-content: space-between;
}
.links a {
margin: 15px;
font-size: 0.80em;
  padding: 8px; /* Add padding inside cells */

color: #8f8f8f;
text-decoration: underline;
}
  .input-box label {
    color: #333;
  }
  .form :where(.input-box input, .select-box) {
    position: relative;
    height: 50px;
    width: 100%;
    outline: none;
    font-size: 1rem;
    color: #707070;
    margin-top: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 0 15px;
  }
  .input-box input:focus {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  }
  .form .column {
    display: flex;
    column-gap: 15px;
  }
  .form .gender-box {
    margin-top: 20px;
  }
  .gender-box h3 {
    color: #333;
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 8px;
  }
  .form :where(.gender-option, .gender) {
    display: flex;
    align-items: center;
    column-gap: 50px;
    flex-wrap: wrap;
  }
  .form .gender {
    column-gap: 5px;
  }
  .gender input {
    accent-color: rgb(130, 106, 251);
  }
  .form :where(.gender input, .gender label) {
    cursor: pointer;
  }
  .gender label {
    color: #707070;
  }
  .address :where(input, .select-box) {
    margin-top: 15px;
  }
  .select-box select {
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    color: #707070;
    font-size: 1rem;
  }
  .form button {
    height: 55px;
    width: 20%;
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    margin-top: 30px;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    background: rgb(11, 37, 19);
  }
  .form button:hover {
    background: rgb(86, 151, 90);
  }
  /*Responsive*/
  @media screen and (max-width: 500px) {
    .form .column {
      flex-wrap: wrap;
    }
    .form :where(.gender-option, .gender) {
      row-gap: 15px;
    }
    table {
  width: 50%; /* Set table width */
  border-collapse: collapse; /* Collapse borders between cells */
  margin: 20px 0; /* Add margin above and below the table */
}

th, td {
  border: 1px solid #d13636; /* Add borders to cells */
  padding: 8px; /* Add padding inside cells */
  text-align: left; /* Align text within cells */
}

th {
  background-color: #cdd4d4; /* Background color for table headers */
  font-weight: bold; /* Make header text bold */
}
  tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  }
</style>
</head>
<body>

    <section class="container">  
       
      <h2>LOGIN</h2>
        <form action="login_db.php" method="post">
     
      <div class="input-group">
        <label for="email">Username</label>
        <input type="username" id="username" name="username" placeholder="Enter your Username" required />
      </div>
     
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required />
      </div>

      <button type="submit"  name="login" class="btn">LOGIN</button>
      <div class="login-link">
        Don't have an account? <a href="registration.php">REGISTER HERE</a>
      </div>
    </form>
    </section>
  </body>
</html>