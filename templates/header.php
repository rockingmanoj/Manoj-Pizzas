<head>
<title>Manoj Pizzas</title>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">       
<style>
@import url('https://fonts.googleapis.com/css?family=Underdog&display=swap');
@import url('https://fonts.googleapis.com/css?family=Exo+2&display=swap');

.brand{
    /* background:#cbb09c !important; */
    background:#ff5252 !important;
    }
    .brand-text{
        color:#ff3d00 !important;
        font-weight:30px;; 
        /* color:#cbb09c !important; */
    }
    form{
        max-width:460px;
        margin:20px auto;
        padding:20px;
    }
    .phead{
        background:#ff5252 !important;
        padding:4px;
        border:5px solid #ff5252 ;
        border-radius:10%;
        color:white;
        text-transform:capitalize;
        font-family: 'Underdog', cursive;
        font-size:25px;
        trasition:all 1s;
    }
    .phead:hover{
        background:#ff1744 !important;
        cursor:pointer;
    }
    .brand-text:hover{
       color:#ff1744 !important;
        cursor:pointer;
      
    }
    .pizza{
      width: 150px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }
    h4{
        font-family: 'Exo 2', sans-serif;
        font-size:20px;
        padding:20px auto;
    }
    @media only screen and (max-width: 600px) {
      .addbtn{
        margin-right:2px !important;
      }

    }
</style>
</head>

<body class="grey lighten-4">
<nav class="white z-depth-0">
<div class="container">
<a href="index.php" class="brand-logo brand-text">Manoj Pizzas</a>
<ul id="nav-mobile" class="right hide-on-small-down">
<li><a href="add.php" class="btn brand z-depth-0 addbtn">Add a Pizza</a></li>

</div>
</nav>