<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCIFP - UTN</title>

    <!-- Stylesheet -->
    @include('stylesheet')

  </head>
  <body>
      <!-- Se incluye la barra principal a la pagina principal -->
      @include('navbar1')

      <div class="container-fluid">
          <div class="row">
            <!-- Se incluye la barra lateral según el rol del usuario que inicio sesión-->
            @include('sidebar')

            <!-- Agregamos las tarjetas que contienen imagen y nombre de cada carrera disponible -->
            <main class="main col">
                    <div class="row">
                    
                        <div class="col col-md-4">
                            
                                   
                        </div>
                        
                  </div>
            </main>
         </div>

      </div>


      <script type="text/javascript" src="{{ asset('js\popper.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js\bootstrap.min.js') }}"></script>

</body>
</html>
