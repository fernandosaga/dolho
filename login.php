<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap-material-design/dist/bootstrap-material-design.css">
    <link rel="stylesheet" href="dist/css/menu_lateral.css">
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
</head>
<body>


<ul class="nav nav-tabs bg-primary">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Another link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
<!-- <div class="row"> -->
    <section class="col-md-12">
        <div class="col-md-3">           
           <div class="card areas">     
                <i class="material-icons">
                    <span class="aval">sentiment_very_satisfied</span>
                </i>              
                <span class="aval">60</span>
               
            </div>           
        </div>
        <div class="col-md-3">           
            <div class="card conforme">     
                <div class="classificacao pull-left">         
                    <i class="material-icons">
                        <span class="aval-satisfeito">sentiment_satisfied</span>
                    </i>              
                    <span class="aval">60</span>
                </div>            
            </div>            
        </div>
        <div class="col-md-3">
            <div class="card correcao">
                <div class="classificacao pull-left">
                    <i class="material-icons">
                        <span class="aval-correcao">sentiment_neutral</span>
                    </i>              
                </div>
                <span class="aval">60</span>
            </div>
        </div>    

        <div class="col-md-3">
            <div class="card nao-conforme">
                <div class="classificacao pull-left">
                    <i class="material-icons">
                        <span class="aval-insatisfeito">sentiment_dissatisfied</span>
                    </i> 
                </div>
                <div class="informacao">
                    <span >60</span> 
                </div> 
            </div>
        </div>
    </section>
   
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/tether/dist/js/tether.min.js"></script>
<script src="bower_components/bootstrap-material-design/dist/bootstrap-material-design.iife.min.js"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<script>
  $('body').bootstrapMaterialDesign();
</script>
</body>
</html>