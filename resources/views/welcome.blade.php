<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: 'Lato', sans-serif;
}

.header {
  overflow: hidden;
  background-color: #161b37;
  padding: 20px 10px;
}

.h1 title {
  text-align: center;
}

.lorem p {
  background-color: #161b37;
  margin-top: 3px;
  margin-bottom: 1px;
  text-align: center;
  font-weight: bold;
  font-size: 25px;
  line-height: 25px;
  border-radius: 4px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.container {
  padding-left: 350px;
  line-height: 35px;
}

.header a.logo {
  font-size: 25px;
  color: white;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  color: white;
}

.sea {
  border-bottom: solid 7px #33D0FF;
      display: inline;
      padding-bottom: 3px;
  text-decoration-color: white;
}

.header-right {
  
  float: right;
}

.responsive {
  width: 100%;
  height: auto;
}
.box {
  overflow-y:scroll;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}



/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 400px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: white;
}

/* Style the counter cards */
.card3 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: #161b37;
  color: white;
}

.button {
  background-color: #33D0FF;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}

.button-lg {
  background-color: #33D0FF;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
  width:700px;
  height:50px;
  font-weight: bold;
  font-size: 25px;
}

div.a {
  padding: 16px;
  position: relative;
  width: auto;
  height: 800px;
  border: 1px solid white;
}

div.b {
  position: absolute;
  left: auto;
  width: 900px;
  height: 800px;
  border: 1px solid white;
} 

div.c {
  padding: 16px;
  position: absolute;
  left: 1000px;
  width: 780px;
  height: 800px;
  border: 1px solid white;
} 

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

input[type=text], select, textarea {
  width: 100%;
  padding: 15px;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


.container-form {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}
</style>
</head>
<body>

<div class="box">
  <div class="header">
    <a href="#default" class="logo">LOGO</a>
    <div class="header-right">
      <a class="active" href="#home">HOME</a>
      <a href="#services">SERVICES</a>
      <a href="#contact">CONTACT US</a>
    </div>
    <img src="{{asset('/images/Capture.PNG')}}" class="responsive">
    <div class="lorem" style="color:white">
      <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</br>Vivamus posuere mauris lectus, molestie eleifend mi</br>tincidunt nec. Aliquam non la</p>
    </div>
  </div>

  <div style="text-align: center">
    <h1 class="title"><u class="sea">SERVICES</u></h1>
    <!-- <p>Resize the browser window to see the effect.
      
    </p>
    <p>Some content..</p> -->
  </div>
  <div class="container">
    <div class="row">
      <div class="column">
        <div class="card">
          <h3><img src="{{asset('/images/handshake.PNG')}}"></br>BUSINESS SETUP</h3>
          <p>Get a full range of business setup</br>solutions from the region's finest</br>business setup experts....</p>
          <p><button class="button">Learn More</button></p>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <h3><img src="{{asset('/images/banking.PNG')}}"></br>BANKING</h3>
          <p>Enhance your business with a wide range of financial assistance at your </br>fingertips. Services...</p>
          <p><button class="button">Learn More</button></p>
        </div>
      </div>
      
      <div class="column">
        <div class="card3">
          <h3><img src="{{asset('/images/insurance.PNG')}}"></br>INSURANCE</h3>
          <p>Compare the best insurance deal's</br> from a wide range of options. Get</br>home,health,business....</p>
          <p><button class="button">Learn More</button></p>
        </div>
      </div>
    </div>
    

  </div>
</br>
  <div class="a">
      
      <div class="b"><img src="{{asset('/images/laptop.PNG')}}" class="responsive"></div>
      <div class="c">
        <div class="container-form">
          <h2> CONTACT US </h2>
          <form action="/action_page.php">
            <label for="fname"><strong>Full Name</strong></label>
            <input type="text" id="fname" name="fname" placeholder="">

            <label for="mobile"><strong>Mobile</strong></label>
            <input type="text" id="mobile" name="mobile" placeholder="">

            <label for="email"><strong>Email</strong></label>
            <input type="text" id="email" name="email" placeholder="">

            <button class="button-lg" style="color:black";><strong>SUBMIT</strong></button>
          </form>
        </div>
    </div>
    </div>
</div>

</body>
</html>
