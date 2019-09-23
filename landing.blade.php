<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta name="description" content="A layout example that shows off a responsive product landing page.">    <title>   POSEIDON VETERINARY CLINIC</title>    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
 
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="Clinic.css">
    
    <style>
       * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}


body {
    line-height: 1.7em;
    color: #7f8c8d;
    font-size: 13px;
}
h1,
h2,
h3,
h4,
h5,
h6,
label {
    color: #800000;
}

.header img {
  float: left;
  width: 100px;
  height: 100px;
  background: #555;
}

.pure-img-responsive {
    max-width: 100%;
    height: auto;
}


.l-box {
    padding: 1em;
}

.l-box-lrg {
    padding: 2em;
    border-bottom: 1px solid rgba(0,0,0,0.1);
}

.is-center {
    text-align: center;
}




.pure-form label {
    margin: 1em 0 0;
    font-weight: bold;
    font-size: 100%;
}

.pure-form input[type] {
    border: 2px solid #ddd;
    box-shadow: none;
    font-size: 100%;
    width: 100%;
    margin-bottom: 1em;
}


.pure-button {
    background-color: #BF0A30;
    color: white;
    padding: 0.5em 2em;
    border-radius: 5px;
}

a.pure-button-primary {
    background: white;
    color: #BF0A30;
    border-radius: 5px;
    font-size: 120%;
}
.home-menu {
    padding: 0.5em;
    text-align: center;
    box-shadow: 0 1px 1px rgba(0,0,0, 0.10);
}
.home-menu {
    background: #550E0C;
}
.pure-menu.pure-menu-fixed {

    border-bottom: none;   
    z-index: 4;
}

.home-menu .pure-menu-heading {
    color: white;
    font-weight: 400;
    font-size: 120%;
}

.home-menu .pure-menu-selected a {
    color: white;
}

.home-menu a {
    color: white;
}
.home-menu li a:hover,
.home-menu li a:focus {
    background: none;
    border: none;
    color: #BF0A30;
}
.splash-container {
  
    z-index: 1;
    overflow: hidden;
    width: 100%;
    height: 88%;
    top: 0;
    left: 0;
    position: fixed !important;
    background-image: url(https://dotspetcenter.com/wp-content/uploads/2019/05/title-1024x570.jpeg);
    background-size: cover;
}

.spl {
    width: 80%;
    height: 50%;
    margin: auto;
    position: absolute;
    top: 100px; left: 0; bottom: 0; right: 0;
    text-align: center;
    text-transform: uppercase;
}


.splash-head {
    font-size: 20px;
    font-weight: bold;
    color: white;
    border: 3px solid white;
    padding: 1em 1.6em;
    font-weight: 100;
    border-radius: 5px;
    line-height: 1em;
}

.splash-subhead {
    color: white;
    letter-spacing: 0.05em;
    opacity: 0.8;
}


.content-wrapper {
  
    position: absolute;
    top: 87%;
    width: 100%;
    min-height: 12%;
    z-index: 2;
    background: white;

}


.content {
    padding: 1em 1em 3em;
}

.content-head {
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin: 2em 0 1em;
}


.content-head-ribbon {
    color: white;
}

.content-subhead {
    color: black;
    font color: white;
}
    .content-subhead i {
        margin-right: 7px;
    }

.ribbon {
    background: #800000;
    color: #aaa;
}


.footer {
    background: #111;
    position: fixed;
    bottom: 0;
    width: 100%;
}

@media (min-width: 48em) {

    
    body {
        font-size: 16px;
    }

    .home-menu {
        text-align: left;
    }
        .home-menu ul {
            float: right;
        }


    .splash {
        width: 50%;
        height: 50%;
    }

    .splash-head {
        font-size: 250%;
    }


  
    .l-box-lrg {
        border: none;
    }

}


@media (min-width: 78em) {
    
    .splash-head {
        font-size: 300%;
    }
} 
    </style>
</head>
<body>
     <img src="Logo.JPEG">


<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <img src="img/logo.png" alt="logo" />
        <a class="pure-menu-heading" href="">POSEIDON VETERINARY CLINIC</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Vet Services</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Client</a></li>

        </ul>
    </div>
</div>

<div style="text-align: center;" class="splash-container">
    <div class="splash">
        
       
    </div>
</div>


<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Our Services</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Deworming and Vaccinaion
                </h3>
                <p>
                    Deworming Protocol – Nursing moms and puppies over 4 weeks of age will be dewormed using Pyrantel Pamoate 1ml per 10 pounds of weight every 2 weeks times 4 doses with a final deworming of the mother dog after separation from the puppies.  If Panacur is being used for treatments of Giardia and overlaps a 2 week deworming, the Pyrantel will not be given as the Panacur will count as that deworming.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Animal Ward
                </h3>
                <p>
                    Our kennel block provides comfortable accommodation for our in-patients. We have five walk in kennels suitable for the larger dogs which have fitted kennel mattresses and individual heating.

                </p>
            </div>

        
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Appointements
                </h3>
                <p>
                    Appointments made by the clients are able to be viewed by the doctor andx secretary as they get a notification via e-mail.

                </p>
            </div>

            
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Boarding
                </h3>
                <p>
                    Animals that are very sick, or need special attention over night or over some time.
                </p>
            </div>
        </div>



        </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            
        

    <div class="content">
       
<link rel="stylesheet" href="BelowFold.css">
<style >
    #popup{display: none;}
    
</style>
<style>
    #popup1{display: none;}
</style>

<body>

    
        <div id="Appointments">
    
    <button onclick="document.getElementById('popup').style.display='block'"><b><h3>Appointments</h3></b></button>
    <div id="popup">
  <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Africa%2FNairobi&amp;src=dGlzaG1jY2xhaW45QGdtYWlsLmNvbQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4ua2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%230B8043" style="border-width:0" width="500" height="500" frameborder="0" scrolling="no"></iframe>
</form>
</div>
<br>
    <button onclick="document.getElementById('popup').style.display='none'"><b>Hide</b></button><br>
</div>
</body>

<body>
    <div id="Boarding">
<button onclick="document.getElementById('popup1').style.display='block'"><b><h3>Boarding</h3></b></button>
    <div id="popup1">
    The pets in boarding are: 
</form>
</div><br>
    <button onclick="document.getElementById('popup1').style.display='none'"><b>Hide</b></button><br>

</body>
</div>
</div>
</body>
</html>
                
            </div>
        </div>

    

</div>

    </div>
    </div>
</body>
</html>