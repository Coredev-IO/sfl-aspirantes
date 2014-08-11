
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Sales Force Leasing Group | Especialistas en Fuerzas de Ventas</title>

  <link type="text/css" href="css/bootstrap.css" rel="stylesheet"/>
  <link type="text/css" href="resources/styles/fa/css/font-awesome.css" rel="stylesheet"/>
  <link type="text/css" href="css/estilos-coredev.css" rel="stylesheet"/>
  <link type="text/css" href="css/animate.css" rel="stylesheet" />



  <link type="text/css" href="css/sfl_style.css" rel="stylesheet" />
  <link type="text/css" href="css/menu.css" rel="stylesheet" />

<script type="text/javascript" src="resources/js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="resources/js/bootstrap.js"></script>




</head>

<body>


<div  id="formularios" class="container">
  


                    <br><br>
                    <div class="container">
                      <div class="row">
                               <div class="col-md-8 "><img src="images/talent.jpg" ,="" height="80px"></div>
                               <div class="col-md-4 "><img src="images/leasing.jpg" ,="" height="80px"></div>
                      </div>
                    </div>

<div class="container">
  <hr>
  <div class="row">
    <div class="col-md-3">
    <div class="box-menu">
      <a id="1" type="button" class="btn btn-primary btn-100"><i class="fa fa-user"></i> Datos Personales</a>
      <a id="2" type="button" class="btn btn-default btn-100" ><i class="fa fa-map-marker"></i> Direcci&oacute;n</a>
      <a id="3" type="button" class="btn btn-default btn-100" ><i class="fa fa-phone"></i> Datos de Indentificaci&oacute;n</a>
      <a id="4" type="button" class="btn btn-default btn-100" ><i class="fa fa-home"></i> Referencias Personales</a>
      <a id="5" type="button" class="btn btn-default btn-100" ><i class="fa fa-thumbs-up"></i> Perfilamiento y Experiencia</a>
      <a id="6" type="button" class="btn btn-default btn-100" ><i class="fa fa-cog"></i> Industria</a>
      <a id="7" type="button" class="btn btn-default btn-100" ><i class="fa fa-child"></i> Posici&oacute;n</a>
      <a id="8" type="button" class="btn btn-default btn-100" ><i class="fa fa-cubes"></i> L&iacute;neas y Especialidades</a>
      <a id="9" type="button" class="btn btn-default btn-100" ><i class="fa fa-cab"></i> &Aacute;reas de Expericia I</a>
      <a id="10" type="button" class="btn btn-default btn-100" ><i class="fa fa-car"></i> &Aacute;reas de Expericia II</a>
      <a id="11" type="button" class="btn btn-default btn-100" ><i class="fa fa-graduation-cap"></i> Historial Acad&eacute;mico</a>
      <a id="12" type="button" class="btn btn-default btn-100" ><i class="fa fa-institution"></i> Otros Estudios/Certificaciones</a>
      <a id="13" type="button" class="btn btn-default btn-100" ><i class="fa fa-file-word-o"></i> Habilidades tecnol&oacute;gicas</a>
      <a id="14" type="button" class="btn btn-default btn-100" ><i class="fa fa-briefcase"></i> Historial Laboral</a>
      <a id="15" type="button" class="btn btn-default btn-100" ><i class="fa fa-facebook-square"></i> Intereses</a>
      <a id="logout" type="button" class="btn btn-default btn-100"><i class=""></i> Cerrar Sesi&oacute;n</a>
    </div>
   
     </div>

    <div class="col-md-9" id="a">
      <div class="box-title">Datos Personales</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" role="form" name="new_cv" action="sfl_cv_02_.php" method="post" enctype="multipart/form-data">
          

          
          <div class="form-group">
            <label for="paterno" class="col-sm-4 control-label">Apellido Paterno: *</label>
            <div class="col-sm-8">
              <input id="paterno" type="text" name="paterno" size="30" maxlength="50" class="form-control" placeholder="Apellido Paterno" autofocus="">
            </div>
          </div>
          
          <div class="form-group">
            <label for="materno" class="col-sm-4 control-label">Apellido Materno:</label>
            <div class="col-sm-8">
              <input id="materno" type="text" name="materno" size="30" maxlength="50" class="form-control" placeholder="Apellido Materno">
            </div>
          </div>

          <div class="form-group">
            <label for="nombre" class="col-sm-4 control-label">Nombre(s) *:</label>
            <div class="col-sm-8">
                <input id="nombre" type="text" name="nombre" size="30" maxlength="50" class="form-control" placeholder="Nombre(s)">
            </div>
          </div>

          <div class="form-group">
            <label for="fec_nac" class="col-sm-4 control-label">Fecha de Nacimiento: *</label>
            <div class="col-sm-8">
                                 <input id="fec_nac" type="text" size="10" maxlength="10" class="form-control" placeholder="[ dd/mm/aaaa ]"> 
                              
            </div>
          </div>

          <hr>

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
              
              <button id='up1' type="submit" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
              <input type="hidden" name="id_cuenta" value="247">
              <input type="hidden" name="accion" value="">
            </div>
          </div>
        </div>
      </div>

                  

    </div>






    <div class="col-md-9" id="b">
      <div class="box-title">Direcci&oacute;n</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal"  name="new_cv">
          <!-- Termina Errores -->


           <div class="form-group">
            <label for="calle" class="col-sm-4 control-label">Calle: </label>
              <div class="col-sm-8">
                

              <input id="calle" type="text" name="calle" size="30" maxlength="50" class="form-control" placeholder="Calle " autofocus="">
             


            </div>
          </div>



           <div class="form-group">
            <label for="NumExt" class="col-sm-4 control-label">Numero ext: </label>
              <div class="col-sm-8">
                

              <input id="num_ext" type="text" name="calle" size="30" maxlength="50" class="form-control" placeholder="Numero Ext.">
             


            </div>
          </div>



           <div class="form-group">
            <label for="NumInt" class="col-sm-4 control-label">Numero Int: </label>
              <div class="col-sm-8">
                

              <input id="num_int" type="text" name="calle" size="30" maxlength="50" class="form-control" placeholder="Numero Int.">
             


            </div>
          </div>


           <div class="form-group">
            <label for="Colonia" class="col-sm-4 control-label">Colonia: </label>
              <div class="col-sm-8">
                

              <input id="colonia" type="text" name="calle" size="30" maxlength="50" class="form-control" placeholder="Colonia">
             


            </div>
          </div>


           <div class="form-group">
            <label for="CP" class="col-sm-4 control-label">C.P : </label>
              <div class="col-sm-8">
                

              <input id="cp" type="text" name="calle" size="30" maxlength="50" class="form-control" placeholder="C.P">
            


            </div>
          </div>



          <div class="form-group">
            <label for="Estado" class="col-sm-4 control-label">Estado</label>
            <div class="col-sm-8">
                <select id="id_estado"  class="form03">   
                     <option value="">Seleccione un estado</option>                    
                </select>
            </div>
          </div>



          
          <div class="form-group">
            <label for="Municipio" class="col-sm-4 control-label">Municipio/Delegaci&oacute;n: *</label>
              <div class="col-sm-8">
                  <select id="id_del_mun" class="form03">
                    <option value="">Seleccione delegación o municipio</option>
                  </select>

            </div>
          </div>


  
          <div class="form-group">
            <label for="Ciudad" class="col-sm-4 control-label">Zona de la ciudad: </label>
              <div class="col-sm-8">
                <select id="id_cat_zonas" class="form03">  
                    <option value="0">Seleccione una zona</option>
                </select>

            </div>
          </div>





          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
              
              
              <button id='up2' type="submit" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
              <input type="hidden" name="id_cuenta" value="247">
              <input type="hidden" name="accion" value="">
            </div>
          </div>

      

   </div></div>
    
  </div>














  <div class="col-md-9" id="c">
      <div class="box-title"> Datos de Indentificaci&oacute;n </div>

      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" >
          <!-- Termina Errores -->

          <div class="form-group">
            <label for="calle" class="col-sm-4 control-label">RFC : </label>
              <div class="col-sm-8">
                

              <input  type="text" id="rfc" class="form-control" placeholder="RFC " autofocus="">

            </div>
          </div>


          <div class="form-group">
            <label for="CURP" class="col-sm-4 control-label">CURP : </label>
              <div class="col-sm-8">
                

              <input  id="curp" size="30" maxlength="50" class="form-control" placeholder="CURP ">

            </div>
          </div>


          <div class="form-group">
            <label for="No.DeAfilicacion" class="col-sm-4 control-label">No. de afiliaci&oacute;n al IMSS : </label>
              <div class="col-sm-8">
                

              <input  type="text" id="no_imss" size="30" maxlength="50" class="form-control" placeholder="No. de afiliaci&oacute;n al IMSS ">

            </div>
          </div>



          <div class="form-group">
            <label for="No.deClinica" class="col-sm-4 control-label">No. de Cl&iacute;nica : </label>
              <div class="col-sm-8">
                

              <input type="text" id="no_clinica" size="30" maxlength="50" class="form-control" placeholder="No. de Cl&iacute;nica ">

            </div>
          </div>



          <div class="form-group">
            <label for="TelefonoParticular" class="col-sm-4 control-label">Tel&eacute;fono Particular : </label>
              <div class="col-sm-8">
                

              <input type="text" id="tel_particular" size="30" maxlength="50" class="form-control" placeholder="el&eacute;fono Particular ">

            </div>
          </div>



          <div class="form-group">
            <label for="TelefonoMovil" class="col-sm-4 control-label">Tel&eacute;fono M&oacute;vil : </label>
              <div class="col-sm-8">
                

              <input type="text" id="tel_movil" size="30" maxlength="50" class="form-control" placeholder="Tel&eacute;fono M&oacute;vil ">

            </div>
          </div>



          <div class="form-group">
            <label for="TelefonoOficina" class="col-sm-4 control-label">Tel&eacute;fono Oficina : </label>
              <div class="col-sm-8">
                

              <input type="text" id="tel_oficina" size="30" maxlength="50" class="form-control" placeholder="Tel&eacute;fono Oficina ">

            </div>
          </div>




          <div class="form-group">
            <label for="TelefonoRecados" class="col-sm-4 control-label">Tel&eacute;fono Recados : </label>
              <div class="col-sm-8">
                

              <input  type="text" id="tel_rec" size="30" maxlength="50" class="form-control" placeholder="Tel&eacute;fono Recados ">

            </div>
          </div>


          <div class="form-group">
            <label for="UsuarioTwitter" class="col-sm-4 control-label">Usuario Twitter : </label>
              <div class="col-sm-8">
                

              <input  id="twitter" size="30" maxlength="50" class="form-control" placeholder="Usuario Twitter ">

            </div>
          </div>



          <div class="form-group">
            <label for="UsuarioFacebook" class="col-sm-4 control-label">Usuario Facebook : </label>
              <div class="col-sm-8">
                

              <input type="text" id="facebook" size="30" maxlength="50" class="form-control" placeholder="Usuario Facebook ">

            </div>
          </div>




          <div class="form-group">
            <label for="UsuarioLinkdin" class="col-sm-4 control-label">Usuario Linkedin : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13" type="text" id="linkedin" size="30" maxlength="50" class="form-control" placeholder="Usuario Linkedin ">

            </div>
          </div>



          

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
              
              
              <button id='up3' type="submit" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
              <input type="hidden" name="id_cuenta" value="247">
              <input type="hidden" name="accion" value="">
            </div>
          </div>


   </div></div>
    
  </div>

















  <div class="col-md-9" id="d">
      <div class="box-title">Referencias Personales</div>



<br>
<br>
  <!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> Nueva Referencia Personal</button>

<!-- Modal -->
 <div class="col-md-4">  
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
              <h4 class="modal-title" id="myModalLabel">Nueva Referencia</h4>
            </div>
            <div class="modal-body">
                
                  
    <div class="box-formulario">
     <div name="refe" role="form" class="form-horizontal" method="post" action="sfl_cv_04_.php" enctype="multipart/form-data">



          <div class="form-group">
                <label for="ref_nom" class="col-sm-4 control-label">Nombre :* </label>
                  <div class="col-sm-8">
                    

                  <input id="ref_nom" type="text" name="ref_nom" size="50" maxlength="100" class="form-control" placeholder="Nombre " autofocus="">

                </div>
              </div>

          
         <!--  <div class="form-group">
                <label for="ref_dom" class="col-sm-4 control-label">Domicilio : </label>
                  <div class="col-sm-8">
                    

                  <input onkeypress="return event.keyCode!=13"  type="text" name="ref_dom" size="50" maxlength="100"   class="form-control" placeholder='Domicilio '>

                </div>
              </div> -->

          <div class="form-group">
                <label for="ref_tel" class="col-sm-4 control-label">Telefono :* </label>
                  <div class="col-sm-8">
                    

                  <input id="ref_tel" type="text" name="ref_tel" size="18" maxlength="15" class="form-control" placeholder="Telefono ">

                </div>
              </div>
              

        <div class="form-group">
                <label for="ref_ocu" class="col-sm-4 control-label">Relaci&oacute;n Laboral : </label>
                  <div class="col-sm-8">
                    

                  <input id="ref_ocu" type="text" name="ref_ocu" size="25" maxlength="30" class="form-control" placeholder="Relaci&oacute;n Laboral ">

                </div>
              </div>

          <div class="form-group">
                <label for="time_con" class="col-sm-4 control-label">Tiempo de conocerlos :* </label>
                  <div class="col-sm-8">
                    

                  <input id="time_con" type="number" name="time_con" size="3" maxlength="2" class="form-control" placeholder="Años ">

                </div>
              </div>            

    <div class="form-group">
          <div class="col-sm-8">
            <button type="button" id="add_ref" class="btn btn-default">Agregar Referencia</button>
            <!-- <img class="right" src="images/ayuda.png" alt="ayuda", height="25px" data-toggle="tooltip" data-placement="left" title="Tooltip on left"> -->
          </div>
          
    </div> 



            </div></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Termina modal -->
<br>

<!--  -->


    
     <!--  -->







    
        &nbsp;
                
     
        
            
           <!-- query a BD referencia-->
              <table id="table_referencia" width="500" align="center" border="0" cellspacing="1" cellpadding="4" class=" CSSTableGenerator">
              </table>



          <br>
          <div class="form-group">
            <div class="col-sm-10">
              
              
              <button id='up4' type="submit" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
              <input type="hidden" name="id_cuenta" value="247">
              <input type="hidden" name="accion" value="">
            </div>
          </div>
            
      
     
     <table>
      <tbody><tr></tr> <tr></tr><tr><td colspan="5">&nbsp;</td></tr><tr></tr><tr><td colspan="5" align="center">       
          


            
                     
          <input type="hidden" name="id_cuenta" value="247">
          <input type="hidden" name="id_ref" value="">
             </td>
           </tr></tbody></table>

  
    
  
  
    &nbsp;
  



</div>













    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
              <h4 class="modal-title" id="myModalLabel">Actualizar Referencia</h4>
            </div>
            <div class="modal-body">
                
                  
    <div class="box-formulario">
     <div name="refe" role="form" class="form-horizontal" method="post" action="sfl_cv_04_.php" enctype="multipart/form-data">



          <div class="form-group">
                <label for="ref_nom" class="col-sm-4 control-label">Nombre :* </label>
                  <div class="col-sm-8">
                    

                  <input id="ref_nomu" type="text" name="ref_nom" size="50" maxlength="100" class="form-control" placeholder="Nombre " autofocus="">

                </div>
              </div>

          
         <!--  <div class="form-group">
                <label for="ref_dom" class="col-sm-4 control-label">Domicilio : </label>
                  <div class="col-sm-8">
                    

                  <input onkeypress="return event.keyCode!=13"  type="text" name="ref_dom" size="50" maxlength="100"   class="form-control" placeholder='Domicilio '>

                </div>
              </div> -->

          <div class="form-group">
                <label for="ref_tel" class="col-sm-4 control-label">Telefono :* </label>
                  <div class="col-sm-8">
                    

                  <input id="ref_telu" type="text" name="ref_tel" size="18" maxlength="15" class="form-control" placeholder="Telefono ">

                </div>
              </div>
              

        <div class="form-group">
                <label for="ref_ocu" class="col-sm-4 control-label">Relaci&oacute;n Laboral : </label>
                  <div class="col-sm-8">
                    

                  <input id="ref_ocuu" type="text" name="ref_ocu" size="25" maxlength="30" class="form-control" placeholder="Relaci&oacute;n Laboral ">

                </div>
              </div>

          <div class="form-group">
                <label for="time_con" class="col-sm-4 control-label">Tiempo de conocerlos :* </label>
                  <div class="col-sm-8">
                    

                  <input id="time_conu" type="text" name="time_con" class="form-control" placeholder="Años ">

                </div>
              </div>            

    <div class="form-group">
          <div class="col-sm-8">
            <input id="id_refu" type="hidden" class="form-control">
            <button type="button" id="up_refu" class="btn btn-default">Actualizar Referencia</button>
            <!-- <img class="right" src="images/ayuda.png" alt="ayuda", height="25px" data-toggle="tooltip" data-placement="left" title="Tooltip on left"> -->
          </div>
          
    </div> 



            </div></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

















<div class="col-md-9" id="e">
      <div class="box-title">Perfilamiento y Experiencia</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" role="form" name="new_cv" action="sfl_cv_05_.php" method="post" enctype="multipart/form-data">
          

          
          <div class="form-group">
            <label for="lug_nac" class="col-sm-4 control-label">Lugar de Nacimiento : </label>
            <div class="col-sm-8">
              <input type="text" id="lug_nac" size="25" maxlength="30" class="form-control" placeholder="Lugar de Nacimiento" autofocus="">
            </div>
          </div>
          
          <div class="form-group">
            <label for="genero" class="col-sm-4 control-label">Genero :</label>
            <div class="col-sm-8">
                  <select id="genero" class="form03">
                 <option> &nbsp;</option>
                 <option value="Hombre">Hombre</option>
                 <option value="Mujer">Mujer</option>
                  </select>
            </div>
          </div>

          <div class="form-group">
            <label for="edo_civil" class="col-sm-4 control-label">Estado Civil:</label>
            <div class="col-sm-8">
                <select id="edo_civil" class="form03">
             <option value=" "> &nbsp;</option>
             <option value="Casado">Casado</option>
             <option value="Divorciado">Separado/Divorciado</option>
             <option value="Soltero">Soltero</option>
             <option value="Viudo">Viudo</option>
             </select>
            </div>
          </div>


          <div class="form-group">
            <label for="CuentaAuto" class="col-sm-4 control-label">¿Cuenta con automovil propio?:</label>
            <div class="col-sm-8">
                  
                 Si<input type="radio" name="auto_prop" value="SI" class="form03">
                  No<input type="radio" name="auto_prop" value="NO" class="form03">

            </div>
          </div>


          <div class="form-group">
            <label for="ManejaAuto" class="col-sm-4 control-label">¿Maneja automovil est&aacute;ndar?::</label>
            <div class="col-sm-8">
                                  Si<input type="radio" name="auto_esta" value="SI" class="form03">
                 No<input type="radio" name="auto_esta"  value="NO" class="form03">

            </div>
          </div>

          <div class="form-group">
            <label for="ManejoCarretera" class="col-sm-4 control-label">¿Cuenta con experiencia de manejo en carretera?:</label>
            <div class="col-sm-8">
                    
                   Si<input type="radio" name="mane_carre" value="SI" class="form03">
                   No<input type="radio" name="mane_carre" value="NO" class="form03">

            </div>
          </div>

          <div class="form-group">
            <label for="DisponibleViajar" class="col-sm-4 control-label">Disponibilidad para Viajar : </label>
            <div class="col-sm-8">
                                  Si<input type="radio" name="dispo_viaj" value="SI" class="form03">
                  No<input type="radio"  name="dispo_viaj" value="NO" class="form03">
            </div>
          </div>

          <div class="form-group">
            <label for="DisponibleCambiar" class="col-sm-4 control-label">Disponibilida para cambiar de residencia: </label>
            <div class="col-sm-8">
                                   Si<input type="radio" name="dispo_res" value="SI" class="form03">
                  No<input type="radio" name="dispo_res" value="NO" class="form03">
            </div>
          </div>

         

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                  
                  <button id='up5' name="submit" value="Continuar" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
                  <input type="hidden" name="id_cuenta" value="247">


              
            </div>
          </div>
        </div>
      </div>

                  

    </div>






















    <div class="col-md-9" id="f">
      <div class="box-title letra1">Industria</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" role="form" name="new_cv" action="sfl_cv_06_.php" method="post" enctype="multipart/form-data">
          <!-- Termina Errores -->

          






<table width="600" class=" txt03" border="0" cellspacing="1" cellpadding="0" align="center">


         <tbody><tr></tr>
     <tr><td colspan="2"><span class="menu02"><b><br><br>( * ) Selecione al menos una industria en la cual tenga experiencia </b></span></td>
   </tr><tr></tr><tr><td colspan="2">&nbsp;</td>
     </tr><tr></tr>
     <tr><td align="center">
     
              <select name="industria" class="form-control" size="6" style="width: 200px" onchange="MM_jumpMenu('parent',this,0)">
          
                                                             <option value="sfl_cv_06_.php?id_cat_industria=1&amp;id_cuenta=247">&nbsp;•&nbsp;&nbsp;Sin Experiencia</option>
                                         <option value="sfl_cv_06_.php?id_cat_industria=2&amp;id_cuenta=247">&nbsp;•&nbsp;&nbsp;Consumo</option>
                                         <option value="sfl_cv_06_.php?id_cat_industria=3&amp;id_cuenta=247">&nbsp;•&nbsp;&nbsp;Electr&oacute;nica</option>
                                         <option value="sfl_cv_06_.php?id_cat_industria=4&amp;id_cuenta=247">&nbsp;•&nbsp;&nbsp;Seguros y Fianzas</option>
                                         <option value="sfl_cv_06_.php?id_cat_industria=5&amp;id_cuenta=247">&nbsp;•&nbsp;&nbsp;Financiera</option>
                                         <option value="sfl_cv_06_.php?id_cat_industria=9&amp;id_cuenta=247">&nbsp;•&nbsp;&nbsp;Farmac&eacute;utica</option>
                             </select> </td>
   
        
        <!-- query a BD referencia -->
             <td> <table width="200" border="0" cellspacing="1" cellpadding="4" align="center" class=" txt03"> 
                <tbody><tr><td height="20" class="txt06a" align="center" valign="middle">&nbsp;</td>
                <td class="txt06a" valign="middle">Experiencia</td>
                <td class="txt06a" valign="middle" align="center"></td>
              
              </tr><tr></tr>
       </tbody></table>
     
            </td></tr><tr></tr><tr><td colspan="2">&nbsp;</td> </tr><tr></tr> <tr><td colspan="2 " align="center">
                 
          
            
              
          
          <input type="hidden" name="id_cuenta" value="247">
          <input type="hidden" name="id_ref" value="">
             </td>
         </tr></tbody></table>
  </div>


</div></div>























<div class="col-md-9" id="g">
      <div class="box-title letra1">Posici&oacute;n</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" role="form" name="new_cv" action="sfl_cv_06a_.php" method="post" enctype="multipart/form-data">
          <!-- Termina Errores -->







<table width="700" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">
  
  
    
      <tbody><tr><td colspan="3"><span class="menu02"><b><br><br>( * ) Agregue la Posici&oacute;n o Posiciones y el tiempo en la misma de acuerdo a su experiencia .</b></span></td>
    </tr><tr></tr><tr><td colspan="3">&nbsp;</td>
     </tr><tr></tr>
     <tr><td align="center">
     
              <select name="id_cat_posicion" size="10" style="width: 300px" class="form-control">
          
                                                             <option value="1">&nbsp;•&nbsp;&nbsp;Representante M&eacute;dico</option>
          
                                     <option value="2">&nbsp;•&nbsp;&nbsp;Gerente de Distrito(Visita M&eacute;dica)</option>
          
                                     <option value="3">&nbsp;•&nbsp;&nbsp;Gerente regional(Visita M&eacute;dica)</option>
          
                                     <option value="4">&nbsp;•&nbsp;&nbsp;Gerente de Nacional de Ventas(Visita M&eacute;dica)</option>
          
                                     <option value="5">&nbsp;•&nbsp;&nbsp;Director Comercial</option>
          
                                     <option value="6">&nbsp;•&nbsp;&nbsp;Demostradora de punto de venta</option>
          
                                     <option value="7">&nbsp;•&nbsp;&nbsp;Promovendedora (Punto de Venta)</option>
          
                                     <option value="8">&nbsp;•&nbsp;&nbsp;Representante de Ventas (Punto de Venta)</option>
          
                                     <option value="9">&nbsp;•&nbsp;&nbsp;Supervisor (Punto de Venta)</option>
          
                                     <option value="10">&nbsp;•&nbsp;&nbsp;Coordinador (Punto de Venta)</option>
          
                                     <option value="11">&nbsp;•&nbsp;&nbsp;Gerente de Distrito (Punto de Venta)</option>
          
                                     <option value="12">&nbsp;•&nbsp;&nbsp;Gerente Regional (Punto de Venta)</option>
          
                                     <option value="13">&nbsp;•&nbsp;&nbsp;Gerente Nacional de Ventas (Punto de Venta)</option>
          
                                     <option value="14">&nbsp;•&nbsp;&nbsp;Gerente de Cuentas Clave</option>
          
                                     <option value="15">&nbsp;•&nbsp;&nbsp;Gerente Regional de Cuentas Clave</option>
          
                                     <option value="16">&nbsp;•&nbsp;&nbsp;Gerente Nacional de Cuentas Clave</option>
          
                                     <option value="17">&nbsp;•&nbsp;&nbsp;Vendedor de Piso</option>
          
                                     <option value="18">&nbsp;•&nbsp;&nbsp;Supervisor de Piso</option>
          
                                     <option value="19">&nbsp;•&nbsp;&nbsp;Gerente de Piso</option>
          
                                     <option value="20">&nbsp;•&nbsp;&nbsp;Agente de Seguros y Fianzas</option>
          
                         </select> </td>
       <td>  <button type="submit" name="agregar" value="Agregar" class="btn btn-default fa fa-plus"> Agregar</button>        
</td>
   
        
        <!-- query a BD referencia -->
             <td> <table width="200" border="0" cellspacing="1" cellpadding="4" align="center" class=" txt03"> 
                <tbody><tr><td height="20" class="txt06a" align="center" valign="middle">&nbsp;</td>
                <td class="txt06a" valign="middle">Experiencia</td>
                <td class="txt06a" valign="middle" align="center"></td>
              
              </tr><tr></tr>
  
</tbody></table>
            </td></tr><tr></tr> <tr><td colspan="3">&nbsp;</td></tr><tr></tr><tr><td align="center" colspan="3">  
          
            <button id='up7' type="button" name="continuar" value="Continuar" class="btn btn-primary fa fa-floppy-o">&nbsp; Actualizar</button>          
              <input type="hidden" name="id_cuenta" value="247">
         
             </td>
  

</tr></tbody></table>



</div></div></div>

























<div class="col-md-9" id="h">
      <div class="box-title letra1">Lineas y Especialidades</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" role="form" name="new_cv" action="sfl_cv_06b_.php" method="post" enctype="multipart/form-data">
          <!-- Termina Errores -->












<table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
  
      


</table><table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">

      <tbody><tr><td colspan="3"><span class="menu02"><b><br><br>( * ) Agregue la linea y seleccione el tiempo de acuerdo a su experiencia .</b></span></td>
    </tr><tr></tr><tr><td colspan="3">&nbsp;</td>
     </tr><tr></tr>
     <tr><td align="center">
     
              <select name="id_cat_line" size="10" style="width: 300px" class="form-control">
                                                   <option value="29">&nbsp;•&nbsp;&nbsp;Alergologia</option>
          
                                     <option value="20">&nbsp;•&nbsp;&nbsp;Cardiolog&iacute;a</option>
          
                                     <option value="21">&nbsp;•&nbsp;&nbsp;Cirug&iacute;a</option>
          
                                     <option value="22">&nbsp;•&nbsp;&nbsp;Dermatolog&iacute;a</option>
          
                                     <option value="30">&nbsp;•&nbsp;&nbsp;Electr&oacute;nica</option>
          
                                     <option value="26">&nbsp;•&nbsp;&nbsp;Endocrinolog&iacute;a</option>
          
                                     <option value="10">&nbsp;•&nbsp;&nbsp;Farma</option>
          
                                     <option value="12">&nbsp;•&nbsp;&nbsp;Gastroenterologia</option>
          
                                     <option value="14">&nbsp;•&nbsp;&nbsp;Ginecolog&iacute;a / Obsterticia</option>
          
                                     <option value="31">&nbsp;•&nbsp;&nbsp;L&iacute;nea Blanca</option>
          
                                     <option value="11">&nbsp;•&nbsp;&nbsp;Medicina General</option>
          
                                     <option value="27">&nbsp;•&nbsp;&nbsp;Neumolog&iacute;a</option>
          
                                     <option value="23">&nbsp;•&nbsp;&nbsp;Neurolog&iacute;a</option>
          
                                     <option value="17">&nbsp;•&nbsp;&nbsp;Oftalomolog&iacute;a</option>
          
                                     <option value="8">&nbsp;•&nbsp;&nbsp;Oncologia</option>
          
                                     <option value="25">&nbsp;•&nbsp;&nbsp;Oncolog&iacute;a</option>
          
                                     <option value="16">&nbsp;•&nbsp;&nbsp;Ortopedia</option>
          
                                     <option value="15">&nbsp;•&nbsp;&nbsp;Otorrrinolaringolog&iacute;a</option>
          
                                     <option value="13">&nbsp;•&nbsp;&nbsp;Pediatr&iacute;a</option>
          
                                     <option value="18">&nbsp;•&nbsp;&nbsp;Psiquiatr&iacute;a</option>
          
                                     <option value="7">&nbsp;•&nbsp;&nbsp;Respiratorio</option>
          
                                     <option value="28">&nbsp;•&nbsp;&nbsp;Reumatolog&iacute;a</option>
          
                                     <option value="32">&nbsp;•&nbsp;&nbsp;Servicios Finanacieros</option>
          
                                     <option value="9">&nbsp;•&nbsp;&nbsp;Sistema Nervioso Central</option>
          
                                     <option value="19">&nbsp;•&nbsp;&nbsp;Traumatolog&iacute;a</option>
          
                                     <option value="24">&nbsp;•&nbsp;&nbsp;Urolog&iacute;a</option>
          
                         </select> </td>
       <td>  <button type="submit" name="agregar" value="Agregar" class="btn btn-default fa fa-plus"> Agregar</button>        
</td>
   
        
        <!-- query a BD referencia -->
             <td> <table width="200" border="0" cellspacing="1" cellpadding="4" align="center" class=" txt03"> 
                <tbody><tr><td height="20" class="txt06a" align="center" valign="middle">&nbsp;</td>
                <td class="txt06a" valign="middle">Experiencia</td>
                <td class="txt06a" valign="middle" align="center"></td>
              
              </tr><tr></tr>
     
     
          </tbody></table>
              </td></tr><tr></tr><tr><td colspan="3">&nbsp;</td></tr><tr></tr><tr><td colspan="3 " align="center"> 
                 
          
            <button id='up8' type="button" name="continuar" value="Continuar" class="btn btn-primary fa fa-floppy-o">&nbsp; Actualizar</button>         
              <input type="hidden" name="id_cuenta" value="247">
         
             </td>
         </tr></tbody></table>
  </div>

    
  
  
    &nbsp;
  


               


</div></div>






































<div class="col-md-9" id="i">
      <div class="box-title letra1">Areas de Experiencia I</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" role="form" name="new_cv" action="sfl_cv_06c_.php" method="post" enctype="multipart/form-data">
          <!-- Termina Errores -->









   

<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class=" txt03">

<tbody><tr><td colspan="3"><span class="menu02"><b><br><br> Agregue la opcion de acuerdo a su experiencia </b></span></td></tr><tr></tr>  
                

    <!--************** Canales  ************************************-->
    
     <tr><td class="menu02" align="center" width="250"><br>Canales y Clientes<br><br>
   <select name="canales" class="form-control" size="5" style="width: 250px">
                 <option value="14">&nbsp;•&nbsp;&nbsp;Autoservicio</option>
                 <option value="15">&nbsp;•&nbsp;&nbsp;Cadenas</option>
                 <option value="18">&nbsp;•&nbsp;&nbsp;Cuenta Clave</option>
                 <option value="13">&nbsp;•&nbsp;&nbsp;Farmacias</option>
                 <option value="11">&nbsp;•&nbsp;&nbsp;Hospitales</option>
                 <option value="16">&nbsp;•&nbsp;&nbsp;Independientes</option>
                 <option value="10">&nbsp;•&nbsp;&nbsp;M&eacute;dicos en Consultorios</option>
                 <option value="12">&nbsp;•&nbsp;&nbsp;Punto de Ventas</option>
                 <option value="17">&nbsp;•&nbsp;&nbsp;Tiendas Departamentales</option>
    </select> </td> 
      <td width="100" align="center"><button type="submit" name="submit" value="agregar" class="btn btn-default fa fa-plus"> Agregar</button></td> 
      <td align="left" class="bg" width="250">        
               
     <br> &nbsp;•&nbsp;&nbsp; 
      <a href="sfl_cv_06c_.php?accion=borrar &amp; id_cuenta=247 &amp; id_cat_canales=" class="txt06c"></a>
     </td></tr><tr></tr>
       
         <!-- ****************************** Especialidad   *************************** -->
     
     <tr><td align="center" class="menu02"><br> Especialidades Medicas Visitadas <br><br>
     <select name="especialidad" class="form-control" size="5" style="width: 250px">
               <option value="1">&nbsp;•&nbsp;&nbsp; Medicina General</option>
                <option value="20">&nbsp;•&nbsp;&nbsp;Alergologia</option>
                <option value="11">&nbsp;•&nbsp;&nbsp;Cardiolog&iacute;a</option>
                <option value="12">&nbsp;•&nbsp;&nbsp;Cirug&iacute;a</option>
                <option value="13">&nbsp;•&nbsp;&nbsp;Dermatolog&iacute;a</option>
                <option value="17">&nbsp;•&nbsp;&nbsp;Endocrinolog&iacute;a</option>
                <option value="5">&nbsp;•&nbsp;&nbsp;Gastroenterolog&iacute;a</option>
                <option value="3">&nbsp;•&nbsp;&nbsp;Ginecolog&iacute;a / Obsterticia</option>
                <option value="4">&nbsp;•&nbsp;&nbsp;Medicina General</option>
                <option value="18">&nbsp;•&nbsp;&nbsp;Neumolog&iacute;a</option>
                <option value="14">&nbsp;•&nbsp;&nbsp;Neurolog&iacute;a</option>
                <option value="8">&nbsp;•&nbsp;&nbsp;Oftalomolog&iacute;a</option>
                <option value="16">&nbsp;•&nbsp;&nbsp;Oncolog&iacute;a</option>
                <option value="7">&nbsp;•&nbsp;&nbsp;Ortopedia</option>
                <option value="6">&nbsp;•&nbsp;&nbsp;Otorrrinolaringolog&iacute;a</option>
                <option value="2">&nbsp;•&nbsp;&nbsp;Pedatr&iacute;a</option>
                <option value="9">&nbsp;•&nbsp;&nbsp;Psiquiatr&iacute;a</option>
                <option value="19">&nbsp;•&nbsp;&nbsp;Reumatolog&iacute;a</option>
                <option value="10">&nbsp;•&nbsp;&nbsp;Traumatolog&iacute;a</option>
                <option value="15">&nbsp;•&nbsp;&nbsp;Urolog&iacute;a</option>
       </select> </td> 
         <td align="center"><button type="submit" name="submit" value="agregar" class="btn btn-default fa fa-plus">&nbsp; Agregar</button></td>  
             <td>
    <br>&nbsp;•&nbsp;&nbsp;
        <a href="sfl_cv_06c_.php?accion=borrar &amp; id_cuenta=247 &amp; id_cat_especialidad=" class="txt06c">  </a>                  
             
     <!--****************************** Producto ************************************************** --> 
     
       </td></tr><tr></tr><tr><td align="center" class="menu02"><br> Producto <br><br>
      <select name="producto" class="form-control" size="5" style="width: 250px">
        <option value="6">&nbsp;•&nbsp;&nbsp;Alimentos Funcionales</option>
        <option value="8">&nbsp;•&nbsp;&nbsp;Belleza y cuidado de la Salud</option>
        <option value="7">&nbsp;•&nbsp;&nbsp;Dermatolog&iacute;a</option>
        <option value="4">&nbsp;•&nbsp;&nbsp;Dispositivos M&eacute;dicos</option>
        <option value="10">&nbsp;•&nbsp;&nbsp;Electr&oacute;nicos</option>
        <option value="5">&nbsp;•&nbsp;&nbsp;Nutricionales</option>
        <option value="2">&nbsp;•&nbsp;&nbsp;OTC</option>
        <option value="3">&nbsp;•&nbsp;&nbsp;OTX</option>
        <option value="9">&nbsp;•&nbsp;&nbsp;Perfumer&iacute;a</option>
        <option value="1">&nbsp;•&nbsp;&nbsp;Rx</option>
        <option value="11">&nbsp;•&nbsp;&nbsp;Seguros y Fianzas</option>
      </select> </td> 
          <td align="center"><button type="submit" name="submit" value="agregar" class="btn btn-default fa fa-plus">&nbsp; Agregar</button></td>    
               <td>
   <br> &nbsp;•&nbsp;&nbsp;
             <a href="sfl_cv_06c_.php?accion=borrar &amp; id_cuenta=247 &amp; id_cat_producto=" class="txt06c">  </a>                                 
     </td>
        
     <!--****************************** estados trabajados ************************************************** --> 
  <!--     
  </tr><td align="center" class="menu02"><br>Estados trabajados<br><br>
      <select name="estado"  class="form-control" size="5" style="width: 200px">
      <option value="1">&nbsp;&bull;&nbsp;&nbsp;Aguascalientes</option>
      <option value="2">&nbsp;&bull;&nbsp;&nbsp;Baja California</option>
      <option value="3">&nbsp;&bull;&nbsp;&nbsp;Baja California Sur</option>
      <option value="4">&nbsp;&bull;&nbsp;&nbsp;Campeche</option>
      <option value="5">&nbsp;&bull;&nbsp;&nbsp;Chiapas</option>
      <option value="6">&nbsp;&bull;&nbsp;&nbsp;Chihuahua</option>
      <option value="7">&nbsp;&bull;&nbsp;&nbsp;Coahuila</option>
      <option value="8">&nbsp;&bull;&nbsp;&nbsp;Colima</option>
      <option value="9">&nbsp;&bull;&nbsp;&nbsp;Distrito Federal</option>
      <option value="10">&nbsp;&bull;&nbsp;&nbsp;Durango</option>
      <option value="11">&nbsp;&bull;&nbsp;&nbsp;Guanajuato</option>
      <option value="12">&nbsp;&bull;&nbsp;&nbsp;Guerrero</option>
      <option value="13">&nbsp;&bull;&nbsp;&nbsp;Hidalgo</option>
      <option value="14">&nbsp;&bull;&nbsp;&nbsp;Jalisco</option>
      <option value="15">&nbsp;&bull;&nbsp;&nbsp;Estado de M&eacute;xico</option>
      <option value="16">&nbsp;&bull;&nbsp;&nbsp;Michoac&aacute;n</option>
      <option value="17">&nbsp;&bull;&nbsp;&nbsp;Morelos</option>
      <option value="18">&nbsp;&bull;&nbsp;&nbsp;Nayarit</option>
      <option value="19">&nbsp;&bull;&nbsp;&nbsp;Nuevo Le&oacute;n</option>
      <option value="20">&nbsp;&bull;&nbsp;&nbsp;Oaxaca</option>
      <option value="21">&nbsp;&bull;&nbsp;&nbsp;Puebla</option>
      <option value="22">&nbsp;&bull;&nbsp;&nbsp;Quer&eacute;rato</option>
      <option value="23">&nbsp;&bull;&nbsp;&nbsp;Quintana Roo</option>
      <option value="24">&nbsp;&bull;&nbsp;&nbsp;San Luis Potos&iacute;</option>
      <option value="25">&nbsp;&bull;&nbsp;&nbsp;Sinaloa</option>
      <option value="26">&nbsp;&bull;&nbsp;&nbsp;Sonora</option>
      <option value="27">&nbsp;&bull;&nbsp;&nbsp;Tabasco</option>
      <option value="28">&nbsp;&bull;&nbsp;&nbsp;Tamaulipas</option>
      <option value="29">&nbsp;&bull;&nbsp;&nbsp;Tlaxcala</option>
      <option value="30">&nbsp;&bull;&nbsp;&nbsp;Veracruz</option>
      <option value="31">&nbsp;&bull;&nbsp;&nbsp;Yucat&aacute;n</option>
      <option value="32">&nbsp;&bull;&nbsp;&nbsp;Zacatecas</option>
      <option value="99">&nbsp;&bull;&nbsp;&nbsp;Otro</option>
      </select> </td><td  align="center"><button type="submit" name="submit" value="agregar" class="btn btn-default fa fa-plus" />&nbsp; Agregar </button></td>
 <td>
   <br> &nbsp;&bull;&nbsp;&nbsp;
             <a href="sfl_cv_06c_.php?accion=borrar & id_cuenta=247 & estado=" class="txt06c">  </a>                                 
     </td> -->
     
 <!--****************************** zona trabajadas ************************************************** -->       
         
  </tr><tr></tr><tr><td align="center" class="menu02"><br>Zonas Trabajadas<br><br>
       <select name="zona_job" class="form-control" size="5" style="width: 200px">
        <option value="1">&nbsp;•&nbsp;&nbsp;Sur</option>
          <option value="2">&nbsp;•&nbsp;&nbsp;Sur Poniente</option>
          <option value="3">&nbsp;•&nbsp;&nbsp;Sur Oriente</option>
          <option value="4">&nbsp;•&nbsp;&nbsp;Centro</option>
          <option value="5">&nbsp;•&nbsp;&nbsp;Norte</option>
          <option value="6">&nbsp;•&nbsp;&nbsp;Norponiente</option>
          <option value="7">&nbsp;•&nbsp;&nbsp;Nororiente</option>
          <option value="8">&nbsp;•&nbsp;&nbsp;Oriente</option>
          <option value="9">&nbsp;•&nbsp;&nbsp;Poniente</option>
          </select>  
    </td><td align="center"><button type="submit" name="submit" value="agregar" class="btn btn-default fa fa-plus">&nbsp; Agregar</button></td><td>
     <br> &nbsp;•&nbsp;&nbsp;
             <a href="sfl_cv_06c_.php?accion=borrar &amp; id_cuenta=247 &amp; id_cat_zona=" class="txt06c">  </a>                                 
     </td></tr><tr></tr>
  
      
    
 <!--******************************Ciudades tabajadas ************************************************** -->      
    
    <tr><td align="center" class="menu02"><br>ciudades trabajadas <br><br>
     <select name="ciudad_job" class="form-control" size="5" style="width: 200px">
        <option value="9">&nbsp;•&nbsp;&nbsp;Ciudad de M&eacute;xico</option>
         <option value="2">&nbsp;•&nbsp;&nbsp;Guadalajara</option>
         <option value="4">&nbsp;•&nbsp;&nbsp;Guanajuato</option>
         <option value="8">&nbsp;•&nbsp;&nbsp;M&eacute;rida</option>
         <option value="3">&nbsp;•&nbsp;&nbsp;Monterrey</option>
         <option value="6">&nbsp;•&nbsp;&nbsp;Morelia</option>
         <option value="5">&nbsp;•&nbsp;&nbsp;Puebla</option>
         <option value="7">&nbsp;•&nbsp;&nbsp;Queretaro</option>
         <option value="1">&nbsp;•&nbsp;&nbsp;xalapa</option>
         <option value="10">&nbsp;•&nbsp;&nbsp;Zacatecas</option>
         </select> </td> <td align="center"><button type="submit" name="submit" value="agregar" class="btn btn-default fa fa-plus">&nbsp; Agregar</button></td><td>
   <br> &nbsp;•&nbsp;&nbsp;
             <a href="sfl_cv_06c_.php?accion=borrar &amp; id_cuenta=247&amp; id_cat_ciudades=" class="txt06c">  </a>                                 
     </td></tr><tr></tr>

          
      
      
      
     
         <tr><td colspan="3">&nbsp;</td> </tr><tr></tr><tr><td colspan="3">&nbsp;</td></tr><tr></tr><tr><td colspan="3" align="center">
                         
         
     <button id='up9' type="button" name="continuar" value="Continuar" class="btn btn-primary fa fa-floppy-o">&nbsp;Actualizar</button>      
     <input type="hidden" name="id_cuenta" value="247"></td>
       
  

</tr></tbody></table>




</div></div></div>



































<div class="col-md-9" id="j">
      <div class="box-title letra1">Areas de Experiencia II</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" role="form" name="new_cv" action="sfl_cv_07_.php" method="post" enctype="multipart/form-data">
          <!-- Termina Errores -->








<table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">


                  <tbody><tr><td>
              <br><samp class="menu02"> Canales trabajados / Clientes Visitados</samp><br><br>
      <input type="checkbox" name="canales[]" value="sin_exp"> Sin Experiencia<br>
          <input type="checkbox" name="canales[]" value="Consultorios y hospitales">Consultorios y hospitales (M&eacute;dicos)<br>
          <input type="checkbox" name="canales[]" value="punto de venta(Cadena, Autoservicios e independientes)"> punto de venta(Farmacias de Cadena, Autoservicios e independientes)<br>
          <input type="checkbox" name="canales[]" value="Cuentas Clave P&uacute;blicas"> Cuentas Clave P&uacute;blicas<br>
          <input type="checkbox" name="canales[]" value=" Cuentas Clave Privadas"> Cuentas Clave Privadas<br>
          <!-- <input type="checkbox" name="canales[]" value=" Realizaci&oacute;n y/o apoyo en inventario"> Realizaci&oacute;n y/o apoyo en inventarios<br>
          <input type="checkbox" name="canales[]" value="Manejo de material POP"> Manejo de material POP<br>
          <input type="checkbox" name="canales[]" value="Aborde en punto de venta"> Aborde en punto de venta<br>
          <input type="checkbox" name="canales[]" value="Impulso de CPM´s(Consumos promedios M&iacute;nimos)"> Impulso de CPM´s(Consumos promedios M&iacute;nimos)<br>
          <input type="checkbox" name="canales[]" value="promocion de productos y Servicios"> promocion de productos y Servicios<br>
           -->

           <br><samp class="menu02"> Habilidades </samp><br><br>
       <input type="checkbox" name="area_exp[]" value="sin_exp"> Sin experiencia<br>  
          <input type="checkbox" name="area_exp[]" value="Visita de Farmacia">Visita de Farmacia<br>
          <input type="checkbox" name="area_exp[]" value="Negociaciones con Farmacia"> Negociaciones con Farmacia<br>
          <input type="checkbox" name="area_exp[]" value="Promocion y punto de venta"> Promocion y punto de venta<br>
          <input type="checkbox" name="area_exp[]" value="Realizacion de trasnfers">Realizacion de trasnfers<br>
          <input type="checkbox" name="area_exp[]" value="Actividades de mercadeo (merchandising)">Actividades de mercadeo (merchandising)<br>
          <input type="checkbox" name="area_exp[]" value=" Negociacion de espacios en punto de venta"> Negociacion de espacios en punto de venta<br>
        
           <br><samp class="menu02">Interpretaci&oacute;n de auditorias</samp><br><br>
        <input type="checkbox" name="auditoria[]" value="sin_exp">Sin Experiencia<br>
          <input type="checkbox" name="auditoria[]" value="ATV">ATV<br>
            <input type="checkbox" name="auditoria[]" value="DDD"> DDD<br>
        <input type="checkbox" name="auditoria[]" value="INTE">INTE<br>
            <input type="checkbox" name="auditoria[]" value="Auditpharma"> Auditpharma (Close Up)<br>  
        
      
           </td>
             
            </tr><tr></tr> <tr><td>&nbsp;</td></tr><tr></tr><tr><td align="center">
                  
                  
          <button id='up10' type="submit" name="submit" value="Continuar" class="btn btn-primary fa fa-floppy-o">&nbsp; Actualizar</button>
          <input type="hidden" name="id_cuenta" value="247">

         </td>
          </tr></tbody></table>

     
      
     
  </div>

    
  
  
    &nbsp;
  





</div></div>































<div class="col-md-9" id="k">
      <div class="box-title ">HISTORIAL ACAD&Eacute;MICO</div>



      <!-- Errores-->
                          <div class="box-formulario">
        <div class="form-horizontal" role="form" name="new_cv" action="sfl_cv_08_.php" method="post" enctype="multipart/form-data">
          <!-- Termina Errores -->
















<table width="700" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">
  <tbody><tr></tr>
          
           <tr>
        <th>Nivel</th>  <th>INSTITUCION</th> <th>STATUS</th><th>De:(Año)</th><th>A:(Año)</th>
       </tr>
      <tr><td colspan="5">&nbsp;</td></tr><tr></tr>
        <tr><td width="100"><label for="primaria" class="col-sm-4 control-label"> Primaria:</label><br><br><br>  </td>
          <td><input onkeypress="return event.keyCode!=13" type="text" name="primaria" size="30" maxlength="30" placeholder="Primaria" autofocus="" class="form-control"></td>
        <td><select name="status_pri" class="form-control">
           <option>   &nbsp;</option>
         <option value="Trunco">Trunco</option>
             <option value="Constancia">Constancia</option>
            </select></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_pri" size="5" maxlength="4" class="form-control"></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_pri" size="5" maxlength="4" class="form-control"></td>
        </tr><tr>


        <td><label for="Secundaria" class="col-sm-4 control-label"> Secundaria:</label> <br><br><br>  </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="secu" size="30" maxlength="30" class="form-control" placeholder="Secundaria"></td>
        <td><select name="status_secu" class="form-control">
            <option>   &nbsp;</option>
            <option value="Trunco">Trunco</option>
            <option value="Constancia">Constancia</option>
         </select></td>
       <td><input onkeypress="return event.keyCode!=13" type="text" name="de_secu" size="5" maxlength="4" class="form-control"></td>
      <td><input onkeypress="return event.keyCode!=13" type="text" name="a_secu" size="5" maxlength="4" class="form-control"></td>
      </tr>
      <tr></tr>
      <tr>
      </tr><tr>


      <td><label for="Preparatoria" class="col-sm-4 control-label"> Preparatoria:</label> <br><br><br>  </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="prepa" size="30" maxlength="30" class="form-control" placeholder="Preparatoria"></td>
        <td><select name="status_prepa" class="form-control">
            <option>   &nbsp;</option>
            <option value="Trunco">Trunco</option>
      <option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Constancia">Constancia</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_prepa" size="5" maxlength="4" class="form-control"></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_prepa" size="5" maxlength="4" class="form-control"> </td>

      </tr>
      <tr>
          </tr><tr>


        <td><label for="Secundaria" class="col-sm-4 control-label">Licenciatura/Ingenieria:</label><br><br> </td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="lic" size="30" maxlength="30" class="form-control" placeholder="Licenciatura / Ingenieria "></td>
        <td><select name="status_lic" class="form-control">
            <option>   &nbsp;</option>
            <option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Trunco">Trunco</option>
            <option value="Constanci">Constancia</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_lic" size="5" maxlength="4" class="form-control"></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_lic" size="5" maxlength="4" class="form-control"></td>

      </tr>
      <tr>
         </tr><tr>


        <td><label for="Maestria" class="col-sm-4 control-label"> Maestria:</label> <br><br><br> </td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="maestria" size="30" maxlength="30" class="form-control" placeholder="Maestria"></td>
        <td><select name="status_maestria" class="form-control">
             <option>   &nbsp;</option>
   
            <option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Trunco">Trunco</option>
            <option value="Constancia">Constancia</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_maestria" size="5" maxlength="4" class="form-control"></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_maestria" size="5" maxlength="4" class="form-control"></td>
      </tr>
      <tr>
         </tr><tr>


        <td><label for="Doctorado" class="col-sm-4 control-label"> Doctorado:</label>  <br><br><br> </td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="doc" size="30" maxlength="30" class="form-control" placeholder="Doctorado"></td>
        <td><select name="status_doc" class="form-control">
            <option>   &nbsp;</option>
            <option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Trunco">Trunco</option>
            <option value="Constancia">Constancia</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_doc" size="5" maxlength="4" class="form-control"></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_doc" size="5" maxlength="4" class="form-control"></td>
      </tr>
      <tr>
      </tr><tr>
      </tr><tr></tr>
 <tr><td colspan="5">&nbsp;</td>
  </tr><tr></tr>
         
        
  
      <tr></tr><tr><td colspan="5"></td></tr><tr></tr>
           <tr><td colspan="5" align="center">
                  
                  
            <button id='up11' value="Continuar" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
                  <input type="hidden" name="id_cuenta" value="247">
          <input type="hidden" name="id_estudios" value="">
      </td>
           </tr></tbody></table>
 </div>
    
  
  
    &nbsp;
  





</div></div>

































<div class="col-md-9" id="l">
      <div class="box-title ">Otros Estudios/Certificaciones </div>
       <div class="box-formulario">



                  <br>&lt;<table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">
                    <tbody><tr><th class="txt09" align="left"></th>
                      <div name="new_cv" action="sfl_cv_08a_.php" method="post" enctype="multipart/form-data"></div>
                                                 </tr><tr>
                          
                   <td colspan="5"><span class="menu02"><b>( * ) Ingrese uno o mas  estudios que haya cursado.</b></span></td></tr><tr></tr>
                    
                   <tr><th>Nombre</th> <th>Status</th><th>De:(Año)</th><th>A:(Año)</th></tr><tr></tr>

                   
                          <tr><td width="80"><br><input type="text" name="estudios" size="70" maxlength="60" class="form-control"></td>
                        
                        
                        <td><br><select name="status_est" class="form-control">
                              <option value=""> &nbsp;</option>
                              <option value="Pasante">Pasante</option>
                              <option value="Titulado">Titulado</option>
                              <option value="Trunco">Trunco</option>
                              <option value="Constancia">Constancia</option>
                              <option value="Diploma">Diplomado</option>
                              <option value="Estudiante">Estudiante</option>
                        </select></td>

                      
                      <td><br><input type="text" name="de_estudios" size="5" maxlength="4" class="form-control"></td>
                          <td><br><input type="text" name="a_estudios" size="5" maxlength="4" class="form-control"></td>

                      </tr><tr></tr>
                    
                                             <!-- query a BD estudios-->
                                  <tr>
                     <td><br><button type="submit" name="submit" value="&nbsp;&nbsp;+ Nuevo Estudio&nbsp;&nbsp;" class="btn btn-default fa fa-plus"> Nuevo Estudio</button></td>
                     </tr><tr>
                     <td class="txt06a" valign="middle">Institucion</td>
                     <td class="txt06a" valign="middle">Estatus</td>
                     <td class="txt06a" valign="middle">Per&iacute;odo</td>
                     <td class="txt06a" valign="middle">Modificar</td></tr>
                                
                                                  <tr></tr>
                                       <tr></tr>
                             <tr><td colspan="4">&nbsp;</td> </tr><tr></tr><tr><td colspan="4" align="center">
                                
                                <button id='up12' type="button" name="submit" value="Continuar" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
                                    <input type="hidden" name="id_cuenta" value="247">
                            <input type="hidden" name="id_estudios" value="">
                             </td>
                            </tr></tbody></table>
                          
                    
                      
                    
                              
                              &nbsp;
                              
                  
</div>
</div>




































<div class="col-md-9" id="m">
      <div class="box-title ">Habilidades tecnol&oacute;gicas </div>
       <div class="box-formulario">




<table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">
  <tbody><tr></tr>
    <div name="new_cv" action="sfl_cv_08b_.php" method="post" enctype="multipart/form-data"></div>
  <tr></tr>
          <!-- <th align="left" class="txt09">Habilidades tecnol&oacute;gicas</th><th>Nivel</th><tr> -->
    <tr><td width="50"><label for="word" class="col-sm-4 control-label"> Word:</label></td><td align="center">
            <br><select name="word" class="form-control">
               <option> &nbsp;</option>
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
          </select></td>

    </tr><tr></tr>
    <tr><td><label for="Powerpoint" class="col-sm-4 control-label"> Powerpoint:</label> </td>
           <td align="center"><br><select name="powerpoint" class="form-control">
            <option> &nbsp;</option>
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
          </select></td>
 
       </tr><tr></tr>
    <tr><td><label for="Access" class="col-sm-4 control-label"> Access:</label> </td>
           <td align="center"><br><select name="acces" class="form-control">
            <option> &nbsp;</option>
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
          </select></td>
    
      </tr><tr></tr>
    <tr><td><label for="Excel" class="col-sm-4 control-label"> Excel:</label> </td>
           <td align="center"><br><select name="excel" class="form-control">
            <option> &nbsp;</option>
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
          </select><br></td>
       </tr>
       <tr>
     <td><label for="otras" class="col-sm-4 control-label"> Otras tecnolog&iacute;as que Domine:</label></td>
      <td colspan="5"><textarea name="otras_tec" rows="5" cols="50" class="form-control"> </textarea></td>
      </tr><tr></tr>
          <tr><td colspan="2">&nbsp;</td></tr><tr></tr> <tr><td colspan="2" align="center">
                  
            <button id='up13' type="submit" name="submit" value="Continuar" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
                  <input type="hidden" name="id_cuenta" value="247">
          <input type="hidden" name="id_estudios" value="">
      </td>
       
        </tr>
      </tbody></table>

  

    
  
  
    &nbsp;
  





</div></div>































<div class="col-md-9" id="n">
      <div class="box-title ">HISTORIAL LABORAL </div>
       <div class="box-formulario">







<table width="700" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">
    <tbody><tr></tr>
<!--  <th  colspan="2" align="left" class="txt09">HISTORIAL LABORAL</th><tr><tr> -->
    <div name="new_cv" action="sfl_cv_09_.php" method="post" enctype="multipart/form-data"></div>
                          <tr>
        
          <td><b>Empresa **</b></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="empresa" size="50" maxlength="50" class="form-control" placeholder="Empresa" autofocus=""></td>
        </tr><tr></tr>


        <tr><td><b>Tipo de Contrataci&oacute;n **</b></td>
        <td><br><select name="tipo" class="form-control">
            <option value="">&nbsp;</option>
            <option value="Directo">Directo</option>
            <option value="Tercerizado">Tercerizado</option>
            </select></td>
       </tr>
       <tr>


            <td> <b>Area</b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="area" size="35" maxlength="35" class="form-control" placeholder="Area"></td>
        </tr><tr>
        </tr>



          <tr><td> <b>Giro </b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="giro" size="35" maxlength="35" class="form-control" placeholder="Giro"></td>
        </tr><tr>
        </tr>


          <tr><td> <b>Puesto ** </b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="puesto" size="35" maxlength="35" class="form-control" placeholder="Puesto"></td>
        </tr><tr>
        </tr>


          <tr><td> <b>Sueldo   </b></td>
        <td><br>$<input onkeypress="return event.keyCode!=13" type="text" name="sueldo" size="10" maxlength="9" class="form-control" placeholder="Sueldo"></td>
        </tr><tr>
        </tr>


        <tr><td> <b>Funciones </b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="funciones" size="35" maxlength="35" class="form-control" placeholder="Funciones"></td>
        </tr><tr>
        </tr>



       <tr><td> <b>Principales Logros </b></td>
        <td><br><textarea onkeypress="return event.keyCode!=13" name="logros" rows="5" cols="70" class="form-control"> </textarea></td>
        </tr><tr>
        </tr>


          <tr><td> <b>Nombre de Jefe Directo </b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="jefe" size="35" maxlength="35" class="form-control" placeholder="Nombre de Jefe Directo"></td>
        </tr><tr>
        </tr>


         <tr><td><b> Puesto del Jefe Directo </b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="puesto_jefe" size="35" maxlength="35" class="form-control" placeholder="Puesto del Jefe Directo"></td>
        </tr><tr>
        </tr>



       <tr><td><b> E-mail </b></td> 
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="e_mail" size="35" maxlength="35" class="form-control" placeholder="E-mail"></td>
        </tr><tr>
        </tr>



         <tr><td><b> Tel&eacute;fono </b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="telefono" size="35" maxlength="35" class="form-control" placeholder="Telefono"></td>
        </tr><tr>
        </tr>


         <tr><td><b> Periodo de: </b></td>
              <td> <br> <input onkeypress="return event.keyCode!=13" name="fecha_i" type="text" size="10" maxlength="10" onkeyup="this.value=formateafecha(this.value);" class="form-control"> [ dd/mm/aaaa ]</td>
        


        </tr><tr></tr> <tr><td><b> Periodo a: </b></td>
          <td> <br> <input onkeypress="return event.keyCode!=13" name="fecha_f" type="text" size="10" maxlength="10" onkeyup="this.value=formateafecha(this.value);" class="form-control"> [ dd/mm/aaaa ]</td>
                 </tr><tr>
        </tr>



        <tr><td> <b>Actualmente Trabajando</b></td>
         <td><br>
     
               <input type="radio" name="actual_job" value="si"> si <br>
         <input type="radio" name="actual_job" checked="" value="no"> no<br>
         </td>
        </tr>


        <tr><td> <b> Autorizo pedir Referencias</b></td>
         <td>
              <input type="radio" name="autorizo_ref" value="si"> si <br>
         <input type="radio" name="autorizo_ref" checked="" value="no"> no <br>
         </td> </tr><tr>
          <td>Motivo de separaci&oacute;n </td>
          <td><br><input onkeypress="return event.keyCode!=13" type="text" name="separacion" size="35" maxlength="35" class="form-control" placeholder="Motivo de separacion"></td> </tr><tr></tr>
      <tr><td align="center"><br><button type="submit" name="submit" value="&nbsp;&nbsp;** Agregar ** &nbsp;&nbsp;" class="btn btn-default fa fa-plus"> Agregar</button></td>
         <td class="menu02">    



      **Registre  al menos un referencia para poder continuar
                         
        </td></tr><tr>
        
                  <!-- query a BD referencia-->
                </tr><tr></tr>
        </tbody></table><br><table align="center" width="700" border="0" cellspacing="1" cellpadding="4" class=" txt03">
                <tbody><tr><td height="20" class="txt06a" align="right" valign="middle">&nbsp;</td>
                <td class="txt06a" valign="middle">Empresa</td>
                <td class="txt06a" valign="middle">Puesto</td>
                <td class="txt06a" valign="middle">Jefe</td>
        <td class="txt06a" valign="middle">Telefono</td>
                <td class="txt06a" valign="middle" align="center"></td>  
              </tr><tr></tr>
                           
      </tbody></table><table width="700" border="0" cellspacing="1" cellpadding="4" class=" txt03" align="center">
           <tbody><tr><td align="center">
            <br>
            <br>
      
          
          <input type="hidden" name="id_laboral" value="">
           <input type="hidden" name="id_cuenta" value="247">
         </td>
     </tr></tbody></table>     






</div></div>




































<div class="col-md-9" id="o">
      <div class="box-title ">Intereses</div>
       <div class="box-formulario">





<table width="700" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">
  <tbody><tr></tr>

  <div name="new_cv" action="files/sfl_cv_10_.php" method="post" enctype="multipart/form-data"></div>
      
          <tr>
  
         </tr><tr>
            <th align="left" class="txt09"> </th>
            </tr><tr><td><b>Puesto de Inter&eacute;s *</b></td>
    
      <td><input onkeypress="return event.keyCode!=13" type="text" name="puesto" size="50" maxlength="45" class="form-control" placeholder="Puesto de interes" autofocus=""></td>
         </tr><tr>
            <td><b>Sueldo Deseado *</b></td>
        <td><br>$<input onkeypress="return event.keyCode!=13" type="text" name="sueldo" size="10" maxlength="9" class="form-control" placeholder="Sueldo Deseado"></td>
         </tr><tr>
            <td><b>Area de inter&eacute;s  *</b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="area_int" size="50" maxlength="45" class="form-control" placeholder="Area de interes"></td>
         </tr><tr>
            <td><b>Disponibilidad de tiempo  *</b></td>
         <td><br><select name="dis_time" class="form-control">
            <option value="">&nbsp;</option>
            <option value="Medio Tiempo">Medio Tiempo</option>
            <option value="Tiempo Completo">Tiempo Completo</option>
             </select></td>

         </tr><tr>
           <th align="left" class="txt09"></th> </tr><tr>
            <td><b>Idioma 1</b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="idioma_1" size="30" maxlength="30" class="form-control" placeholder="Idioma 1"><br></td></tr><tr></tr>
            <tr><td><b>Idioma 2</b></td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="idioma_2" size="30" maxlength="30" class="form-control" placeholder="Idioma 2"></td></tr><tr></tr>
            <tr><td><b>Idioma 3</b></td> 
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="idioma_3" size="30" maxlength="30" class="form-control" placeholder="Idioma3"></td></tr><tr></tr>
         <tr>
     
          </tr><tr></tr>
      <tr><th align="left" class="txt09"></th> </tr><tr>
        <td><br><br><b>Agregue su CV (formato PDF)</b></td>
        <td><br><br><input type="file" name="fichero" class="form01"></td>
        </tr>
         <tr></tr>
     <tr><td colspan="2">&nbsp;</td>
     </tr><tr></tr>
        <tr><td>&nbsp;</td>
        <td>
    
          <br>
          
          
           <button id='up15' type="submit" name="continuar" value="Finalizar" class="btn btn-primary fa fa-floppy-o"> Actualizar</button>
      <input type="hidden" name="id_cuenta" value="247id_laboral=">
          </td>
        </tr>
      </tbody></table>

  

    
  
  
    &nbsp;
  





</div></div>








    
  </div>
  
</div>






</div>


<!--  -->
<script type="text/javascript" src="resources/js/api.js"></script> 
<script type="text/javascript" src="resources/js/secc.js"></script> 


</body>
</html>

<!-- Localized -->