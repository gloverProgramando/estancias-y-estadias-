<!DOCTYPE html>
<html lang="es">
    @include('plantilla/admin/head')
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
<body>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		@include('plantilla/admin/navBar')

		<!-- Content page -->
		<div class="container p-3">
			<div class="page-header">
			  <h2 class="text-titles">Documentos Registrados<small>({{$proceso[1]}})</small></h2>
			</div>
		</div>
         <!---notificacion --->
         @include('notificaciones/notificaciones')
            <div class="container">
                <div class="row">
                    <div class=" col-12 col-sm-12 col-md-6">
                        <form action="{{ route('Buscar_estancia1.index',[$proceso[0],$proceso[1]]) }}" method="GET">
                            @csrf
                            <!-- buscar-->
                            <div class="row">
                                <div class=" col-8 col-sm-8 col-md-10">
                                    <input type="text" class="form-control" id="texto" name="texto" placeholder="Buscar" value="">
                                </div>
                                <div class="col-4 col-sm-4 col-md-2">
                                    <button type="submit" class="btn btn-primary buscar"><i class="zmdi zmdi-search"></i></button>
                                </div>
                                <div class=" col-8 col-sm-8 col-md-6">
                                    <select class="form-control" id="estatus" name="estatus" placeholder="estatus">
                                      <option value=""> </option>
                                      <option value="enero-abril">enero-abril</option>
                                      <option value="mayo-agosto">mayo-agosto</option>
                                      <option value="septiembre-octubre">septiembre-diciembre</option>
                                    </select>
                                </div>
                                <div class=" col-8 col-sm-8 col-md-4">
                                    <input type="number" class="form-control" id="año" name="año" placeholder="ejem 2022" value="" min="1999" max="2050">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=" col-12 col-sm-12 col-md-6">
                        <form  action="{{ route('Buscar_estancia1_c.index',[$proceso[0],$proceso[1]]) }}" method="GET">
                            @csrf
                            <!--Buscar datos cedula-->
                            <div class="row">
                                <div class=" col-8 col-sm-8 col-md-10">
                                    <input type="text" class="form-control" id="texto" name="texto" placeholder="Buscar datos cedula" value="">

                                </div>
                                <div class="col-4 col-sm-4 col-md-2">
                                    <button type="submit" class="btn btn-primary buscar"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="estiloAviso">            
            <embed src="/css/calendario.pdf#toolbar=0" height="400" width="1000" style="">
        </div>

	</section>
	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
    <script>
        $(document).ready(function(){
	        $("input[name=texto]").keyup(function(){
  	        $("input[name=texto1]").val(this.value);
          });
        });
    </script>
</body>
</html>
</html>
<style>
    .doc{
        box-shadow: 0 1px 7px rgb(0 0 0 / 20%);
    }
</style>
