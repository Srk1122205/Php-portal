<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Player Registration</title>

    <style>

        * {

  margin: 0;

  padding: 0;

}

body {

  background-color: #f0ebf8;

}

.container {

  width: 55%;

  margin: auto;

}

h1,

.header-p {

  text-align: center;

  margin-bottom: 10px;

  letter-spacing: 1px;

}

.header-p {

  margin-bottom: 0;

}

.parts {

  background-color: white;

  border-radius: 5px;

  margin: 10px 0px;

  box-shadow: 0px 0px 5px darkgray;

  padding: 30px 20px;

  border-left: 5px solid #4285f4;

}
.parts h4 {

  margin-left: 5px;

  margin-bottom: 5px;

  letter-spacing: 1px;

  line-height: 18px;

  font-size: 17px;

}
.parts input[type="radio"] {

  margin: 15px 0px;

  margin-left: 5px;

}

button {

  background-color: #673ab7;

  color: white;

  width: 100%;

  padding: 15px 0px;

  border: none;

  cursor: pointer;

  margin-top: 10px;

  margin-bottom: 50px;

  position: relative;

}

button:hover {

  box-shadow: 0px 0px 10px grey;

}



.special {

  border-top: 10px solid #582a29;

  border-left: 5px solid #4285f4;

}



@media (max-width: 880px) {

  .container {

    width: 90%;

  }

}



    </style>

</head>

<body>

    <div class="container">

        <form action="store.php" method="POST">

            <div class="parts special">

                <h1>Player Registration</h1>

                <p class="header-p">This is a simple Player Registration Form!</p>

            </div>

            <div class="parts">

                <h4>First Name:</h4>

                <input type="text" placeholder="First Name" name="fname" required>

            </div>

            <div class="parts">

                <h4>Last Name:</h4>

                <input type="text" placeholder="Last Name" name="lname" required>

            </div>

           

            <div class="parts">

                <h4>Score</h4>

                <input type="text" placeholder="Scorer" name="score" required>

            </div>


            <div class="parts">

<h4>Status</h4>

<input type="radio" name="status" id="active" value="active" required>

<label for="active">Active</label> <br>

<input type="radio" name="status" id="block" value="block" required>

<label for="block">Block</label>

</div>
            <button type="submit">Submit Response</button>



        </form>

    </div>



</body>

</html>