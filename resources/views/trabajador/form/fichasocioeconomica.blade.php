<div class="containertab">
   <div class="row">
      <div class="process">
           <div class="process-row nav nav-tabs">

              <div class="process-step tabmenu1">
               <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-file-text fa-2x"></i></button>
               <p><small>Datos <br />Generales</small></p>
               <div class='errortab'>
                 <i class="fa fa-exclamation" aria-hidden="true"></i> 
               </div>
               <div class='bientab'>
                 <i class="fa fa-check" aria-hidden="true"></i> 
               </div>
              </div>

              <div class="process-step tabmenu2">
               <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-briefcase fa-2x"></i></button>
               <p><small>Identificación<br />Domiciliaria</small></p>
               <div class='errortab'>
                 <i class="fa fa-exclamation" aria-hidden="true"></i> 
               </div>
               <div class='bientab'>
                 <i class="fa fa-check" aria-hidden="true"></i> 
               </div>
              </div>

              <div class="process-step tabmenu3">
               <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-money fa-2x"></i></button>
               <p><small>Situación <br />Económica</small></p>
               <div class='errortab'>
                 <i class="fa fa-exclamation" aria-hidden="true"></i> 
               </div>
               <div class='bientab'>
                 <i class="fa fa-check" aria-hidden="true"></i> 
               </div>
              </div>

              <div class="process-step tabmenu4">
               <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-home fa-2x"></i></button>
               <p><small>Datos <br />Vivienda</small></p>
               <div class='errortab'>
                 <i class="fa fa-exclamation" aria-hidden="true"></i> 
               </div>
               <div class='bientab'>
                 <i class="fa fa-check" aria-hidden="true"></i> 
               </div>
              </div>

              <div class="process-step tabmenu5">
               <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><i class="fa fa-user-md fa-2x"></i></button>
               <p><small>Datos <br />Salud</small></p>
               <div class='errortab'>
                 <i class="fa fa-exclamation" aria-hidden="true"></i> 
               </div>
               <div class='bientab'>
                 <i class="fa fa-check" aria-hidden="true"></i> 
               </div>
              </div>


              <div class="process-step">
               <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu6"><i class="fa fa-check fa-2x"></i></button>
               <p><small>Guardar<br />Ficha</small></p>

              </div>

           </div>
        </div>
        <div class="tab-content">
             <div id="menu1" class="tab-pane fade active in">
                <h3></h3>
                <div class="row">
                    <div class="col-sm-6">
                    <div class="panel-body">
                         <div class="form-group">
                              <label class="col-sm-3 control-label">Religión <span class="required">*</span></label>
                              <div class="col-sm-8">

                                <input  type="text"
                                        id="religion" name='religion' value="@if(isset($fichasocioeconomica)){{old('religion',$fichasocioeconomica->religion)}}@else{{old('religion')}}@endif" placeholder="Religion"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="3"/>

                                        @include('error.erroresvalidate', [ 'id' => $errors->has('religion')  , 
                                                                    'error' => $errors->first('religion', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Grupo Sanguineo <span class="required">*</span></label>
                              <div class="col-sm-8">

                                <input  type="text"
                                        id="gruposanguineo" name='gruposanguineo' value="@if(isset($fichasocioeconomica)){{old('gruposanguineo',$fichasocioeconomica->gruposanguineo)}}@else{{old('gruposanguineo')}}@endif" placeholder="Grupo Sanguineo"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="3"/>

                                        @include('error.erroresvalidate', [ 'id' => $errors->has('gruposanguineo')  , 
                                                                    'error' => $errors->first('gruposanguineo', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Talla Pantalón <span class="required">*</span></label>
                              <div class="col-sm-8">

                                <input  type="text"
                                        id="tallapantalon" name='tallapantalon' value="@if(isset($fichasocioeconomica)){{old('tallapantalon',$fichasocioeconomica->tallapantalon)}}@else{{old('tallapantalon')}}@endif" placeholder="Talla Pantalón"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="3"/>
                                        @include('error.erroresvalidate', [ 'id' => $errors->has('tallapantalon')  , 
                                                                    'error' => $errors->first('tallapantalon', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>

                          
                      </div>
              
                    </div>

                    <div class="col-sm-6">

                        <div class="panel-body">

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Talla Polo <span class="required">*</span></label>
                              <div class="col-sm-8">

                                <input  type="text"
                                        id="tallapolo" name='tallapolo' value="@if(isset($fichasocioeconomica)){{old('tallapolo',$fichasocioeconomica->tallapolo)}}@else{{old('tallapolo')}}@endif" placeholder="Talla Polo"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="4"/>
                                        @include('error.erroresvalidate', [ 'id' => $errors->has('tallapolo')  , 
                                                                    'error' => $errors->first('tallapolo', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-3 control-label">Talla Zapato <span class="required">*</span></label>
                            <div class="col-sm-8">

                              <input  type="text"
                                      id="tallazapato" name='tallazapato' value="@if(isset($fichasocioeconomica)){{old('tallazapato',$fichasocioeconomica->tallazapato)}}@else{{old('tallazapato')}}@endif" placeholder="Talla Zapato"
                                      required = ""
                                      autocomplete="off" class="form-control input-sm" data-aw="5"/>
                                      @include('error.erroresvalidate', [ 'id' => $errors->has('tallazapato')  , 
                                                                    'error' => $errors->first('tallazapato', ':message') , 
                                                                    'data' => '2'])

                            </div>
                          </div> 

                          <div class="form-group">
                              <label class="col-sm-3 control-label">Talla Camisa <span class="required">*</span></label>
                              <div class="col-sm-8">

                                <input  type="text"
                                        id="tallacamisa" name='tallacamisa' value="@if(isset($fichasocioeconomica)){{old('tallacamisa',$fichasocioeconomica->tallacamisa)}}@else{{old('tallacamisa')}}@endif" placeholder="Talla Camisa"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="3"/>
                                        @include('error.erroresvalidate', [ 'id' => $errors->has('tallacamisa')  , 
                                                                    'error' => $errors->first('tallacamisa', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>

                        </div>

                    </div>
                </div>

                <ul class="list-unstyled list-inline pull-right">
                 <li><button type="button" class="btn btn-info next-step">Siguiente <i class="fa fa-chevron-right"></i></button></li>
                </ul>
             </div>

             <div id="menu2" class="tab-pane fade">
                <h3></h3>

                <div class="row">

                  <div class="col-sm-6">
                    <div class="panel-body">

                           <div class="form-group">
                              <label class="col-sm-12 control-label labelleft ">Calles Referencia <span class="required">*</span></label>
                              <div class="col-sm-12 abajocaja">

                                <input  type="text"
                                        id="callesreferencia" name='callesreferencia' value="@if(isset($fichasocioeconomica)){{old('callesreferencia',$fichasocioeconomica->callesreferencia)}}@else{{old('callesreferencia')}}@endif" placeholder="Calles Referencia"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="3"/>
                                        @include('error.erroresvalidate', [ 'id' => $errors->has('callesreferencia')  , 
                                                                    'error' => $errors->first('callesreferencia', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>

                            <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">Teléfono Fijo <span class="required">*</span></label>
                              <div class="col-sm-12 abajocaja">

                                <input  type="text"
                                        id="telefonofijo" name='telefonofijo' value="@if(isset($fichasocioeconomica)){{old('telefonofijo',$fichasocioeconomica->telefonofijo)}}@else{{old('telefonofijo')}}@endif" placeholder="Telefono Fijo"
                                        required = ""  data-parsley-type="number"
                                      autocomplete="off" class="form-control input-sm" data-aw="2"/>


                                        @include('error.erroresvalidate', [ 'id' => $errors->has('telefonofijo')  , 
                                                                    'error' => $errors->first('telefonofijo', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>

                           
                    </div>
              
                  </div>

                  <div class="col-sm-6">

                        <div class="panel-body">

                           <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">Teléfono Emergencia <span class="required">*</span></label>
                              <div class="col-sm-12 abajocaja">

                                <input  type="text"
                                        id="telefonoemergencia" name='telefonoemergencia' value="@if(isset($fichasocioeconomica)){{old('telefonoemergencia',$fichasocioeconomica->telefonoemergencia)}}@else{{old('telefonoemergencia')}}@endif" placeholder="Telefono Emergencia"
                                        required = "" data-parsley-type="number"
                                        autocomplete="off" class="form-control input-sm" data-aw="3"/>
                                        @include('error.erroresvalidate', [ 'id' => $errors->has('telefonoemergencia')  , 
                                                                    'error' => $errors->first('telefonoemergencia', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>   

                          <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">Referencia Familiar Cercano <span class="required">*</span></label>
                              <div class="col-sm-12 abajocaja">

                                <input  type="text"
                                        id="referenciafamiliar" name='referenciafamiliar' value="@if(isset($fichasocioeconomica)){{old('referenciafamiliar',$fichasocioeconomica->referenciafamiliar)}}@else{{old('referenciafamiliar')}}@endif" placeholder="Referencia Familiar"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="3"/>
                                        @include('error.erroresvalidate', [ 'id' => $errors->has('referenciafamiliar')  , 
                                                                    'error' => $errors->first('referenciafamiliar', ':message') , 
                                                                    'data' => '2'])

                              </div>
                          </div>                    

                        </div>

                  </div>
                </div>

                            
                 <ul class="list-unstyled list-inline pull-right">
                  <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Atrás</button></li>
                  <li><button type="button" class="btn btn-info next-step">Siguiente <i class="fa fa-chevron-right"></i></button></li>
                 </ul>
             </div>

             <div id="menu3" class="tab-pane fade">
                    <h3></h3>

                    <div class="row">

                          <div class="col-sm-6">
                            <div class="panel-body">

                                

                                <div class="form-group">
                                      <label class="col-sm-12 control-label labelleft" >Monto de Ingreso Mensual: <span class="required">*</span></label>
                                      <div class="col-sm-12 abajocaja">

                                        <input  type="text"
                                                id="ingresomensual" name='ingresomensual' value="@if(isset($fichasocioeconomica)){{old('ingresomensual',$fichasocioeconomica->ingresomensual)}}@else{{old('ingresomensual')}}@endif" placeholder="Ingreso Mensual"
                                                required = "" data-parsley-type="number"
                                                autocomplete="off" class="form-control input-sm" data-aw="12"/>
                                                @include('error.erroresvalidate', [ 'id' => $errors->has('ingresomensual')  , 
                                                                    'error' => $errors->first('ingresomensual', ':message') , 
                                                                    'data' => '2'])

                                      </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-12 control-label labelleft">Cuenta con otro Ingreso Económico aparte de su Trabajo <span class="required">*</span></label>
                                  <div class="col-sm-12 abajocaja">
                                    <div class="be-radio has-success inline">
                                      <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->otroingreso == 1) checked  @endif @else checked @endif name="otroingreso" id="rad1">
                                      <label for="rad1">Sí</label>
                                    </div>
                                    <div class="be-radio has-danger inline">
                                      <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->otroingreso == 0) checked  @endif @endif name="otroingreso" id="rad2">
                                      <label for="rad2">No</label>
                                    </div>
                                  </div>
                                </div>




                              
                            </div>
                          </div>


                          <div class="col-sm-6">
                            <div class="panel-body">
                             
                                <div class="form-group">
                                  <label class="col-sm-12 control-label labelleft">Negocio Propio <span class="required">*</span></label>
                                  <div class="col-sm-6 abajocaja">
                                    <div class="be-radio has-success inline">
                                      <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->negociopropio == 1) checked  @endif @else checked @endif name="negociopropio" id="rad1">
                                      <label for="rad1">Sí</label>
                                    </div>
                                    <div class="be-radio has-danger inline">
                                      <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->negociopropio == 0) checked  @endif @endif name="negociopropio" id="rad2">
                                      <label for="rad2">No</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-12 control-label labelleft">Tiene Deudas en entidades financieras  <span class="required">*</span></label>
                                  <div class="col-sm-6 abajocaja">
                                    <div class="be-radio has-success inline">
                                      <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->deudas == 1) checked  @endif @else checked @endif name="deudas" id="rad1">
                                      <label for="rad1">Sí</label>
                                    </div>
                                    <div class="be-radio has-danger inline">
                                      <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->deudas == 0) checked  @endif @endif name="deudas" id="rad2">
                                      <label for="rad2">No</label>
                                    </div>
                                  </div>
                                </div>
                              
                            </div>
                          </div>

                    </div>
                            
                    <ul class="list-unstyled list-inline pull-right">
                      <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Atrás</button></li>
                      <li><button type="button" class="btn btn-info next-step">Siguiente <i class="fa fa-chevron-right"></i></button></li>
                    </ul>
             </div>


             <div id="menu4" class="tab-pane fade">
                    <h3></h3>

                    <div class="row">

                      <div class="col-sm-6">
                        <div class="panel-body">

                           <div class="form-group">
                             <label class="col-sm-12 control-label labelleft " > Tipo de vivienda <span class="required">*</span></label>
                              <div class="col-sm-12 abajocaja">
                                {!! Form::select( 'tipovivienda_id', $combotipovivienda, array(),
                                                  [
                                                    'class'       => 'form-control control input-sm' ,
                                                    'id'          => 'tipovivienda_id',
                                                    'required'    => '',
                                                    'data-aw'     => '1'
                                                  ]) !!}
                              </div>
                            </div>

                           <div class="form-group">
                             <label class="col-sm-12 control-label labelleft" >Cuenta con <span class="required">*</span></label>
                              <div class="col-sm-12 abajocaja">
                                {!! Form::select( 'casaparte_id', $combocasaparte, array(),
                                                  [
                                                    'class'       => 'form-control control input-sm' ,
                                                    'id'          => 'casaparte_id',
                                                    'required'    => '',
                                                    'data-aw'     => '1'
                                                  ]) !!}
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">Estado de Construcción <span class="required">*</span></label>
                              <div class="col-sm-12 abajocaja">
                                <div class="be-radio has-success inline">
                                  <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->estadoconstruccion == 1) checked  @endif @else checked @endif name="estadoconstruccion" id="rad1">
                                  <label for="rad1">Construida</label>
                                </div>
                                <div class="be-radio has-danger inline">
                                  <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->estadoconstruccion == 0) checked  @endif @endif name="estadoconstruccion" id="rad2">
                                  <label for="rad2">En Construcción</label>
                                </div>
                              </div>
                            </div>

                              
                        </div>
                      </div>


                      <div class="col-sm-6">
                            <div class="panel-body">
                             
                                 <div class="form-group">
                                   <label class="col-sm-12 control-label labelleft" >Materiales de Construcción <span class="required">*</span></label>
                                    <div class="col-sm-12 abajocaja ">
                                      {!! Form::select( 'construccionmaterial_id', $comboconstruccionmaterial, array(),
                                                        [
                                                          'class'       => 'form-control control input-sm' ,
                                                          'id'          => 'construccionmaterial_id',
                                                          'required'    => '',
                                                          'data-aw'     => '1'
                                                        ]) !!}
                                    </div>
                                  </div>

                                 <div class="form-group">
                                   <label class="col-sm-12 control-label labelleft" > Servicios <span class="required">*</span></label>
                                    <div class="col-sm-12 abajocaja">
                                      {!! Form::select( 'servicio_id', $comboservicio, array(),
                                                        [
                                                          'class'       => 'form-control control input-sm' ,
                                                          'id'          => 'servicio_id',
                                                          'required'    => '',
                                                          'data-aw'     => '1'
                                                        ]) !!}
                                    </div>
                                  </div>
                              
                            </div>
                      </div>

                    </div>
                            
                    <ul class="list-unstyled list-inline pull-right">
                      <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Atrás</button></li>
                      <li><button type="button" class="btn btn-info next-step">Siguiente <i class="fa fa-chevron-right"></i></button></li>
                    </ul>
             </div>


             <div id="menu5" class="tab-pane fade">
                    <h3></h3>
                    <div class="row">
                          <div class="col-sm-6">
                            <div class="panel-body">

                                 <div class="form-group ">
                                   <label class="col-sm-12 control-label labelleft" >Lugar dónde se atiende <span class="required abajo">*</span></label>
                                   <div class="col-sm-12 abajocaja">
                                      {!! Form::select( 'centromedico_id', $combocentromedico, array(),
                                                        [
                                                          'class'       => 'form-control control input-sm' ,
                                                          'id'          => 'centromedico_id',
                                                          'required'    => '',
                                                          'data-aw'     => '1'
                                                        ]) !!}
                                    </div>
                                  </div>

                                 <div class="form-group">
                                   <label class="col-sm-12 control-label labelleft" >  Frecuencia con la que asiste al médico <span class="required">*</span></label>
                                    <div class="col-sm-12 abajocaja">
                                      {!! Form::select( 'frecuenciamedico_id', $combofrecuenciamedico, array(),
                                                        [
                                                          'class'       => 'form-control control input-sm' ,
                                                          'id'          => 'frecuenciamedico_id',
                                                          'required'    => '',
                                                          'data-aw'     => '1'
                                                        ]) !!}
                                    </div>
                                  </div>

                                 <div class="form-group">
                                   <label class="col-sm-12 control-label labelleft" >Con que frecuencia realiza exámenes de laboratorio clínico <span class="required">*</span></label>
                                    <div class="col-sm-12 abajocaja">
                                      {!! Form::select( 'frecuenciaexamen_id', $combofrecuenciaexamen, array(),
                                                        [
                                                          'class'       => 'form-control control input-sm' ,
                                                          'id'          => 'frecuenciaexamen_id',
                                                          'required'    => '',
                                                          'data-aw'     => '1'
                                                        ]) !!}
                                    </div>
                                  </div>

             
                            </div>
                          </div>


                          <div class="col-sm-6">
                            <div class="panel-body">
                             
                                <div class="form-group">
                                  <label class="col-sm-12 control-label labelleft">Donde realiza los exámenes de laboratorio clínico<span class="required">*</span></label>
                                  <div class="col-sm-12 abajocaja">
                                    <div class="be-radio has-success inline">
                                      <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->laboratorioclinico == 1) checked  @endif @else checked @endif name="laboratorioclinico" id="rad1">
                                      <label for="rad1">EsSalud</label>
                                    </div>
                                    <div class="be-radio has-danger inline">
                                      <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->laboratorioclinico == 0) checked  @endif @endif name="laboratorioclinico" id="rad2">
                                      <label for="rad2">Particular</label>
                                    </div>
                                  </div>
                                </div>

                                 <div class="form-group">
                                   <label class="col-sm-12 control-label labelleft" > Padece de alguna enfermedad <span class="required">*</span></label>
                                    <div class="col-sm-12 abajocaja">
                                      {!! Form::select( 'enfermedad_id', $comboenfermedad, array(),
                                                        [
                                                          'class'       => 'form-control control input-sm' ,
                                                          'id'          => 'enfermedad_id',
                                                          'required'    => '',
                                                          'data-aw'     => '1'
                                                        ]) !!}
                                    </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-12 control-label labelleft">Observación <span class="required">*</span></label>
                                      <div class="col-sm-12 abajocaja">

                                        <input  type="text"
                                                id="observacion" name='observacion' value="@if(isset($fichasocioeconomica)){{old('observacion',$fichasocioeconomica->observacion)}}@else{{old('observacion')}}@endif" placeholder="Observación"
                                                required = ""
                                                autocomplete="off" class="form-control input-sm" data-aw="3"/>
                                                @include('error.erroresvalidate', [ 'id' => $errors->has('observacion')  , 
                                                                    'error' => $errors->first('observacion', ':message') , 
                                                                    'data' => '2'])

                                      </div>
                                  </div>
                              
                            </div>
                          </div>

                    </div>
                            
                    <ul class="list-unstyled list-inline pull-right">
                      <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Atrás</button></li>
                      <li><button type="button" class="btn btn-info next-step">Siguiente <i class="fa fa-chevron-right"></i></button></li>
                    </ul>
             </div>             


             <div id="menu6" class="tab-pane fade">
                <h3></h3>
                <center><p>¿Seguro que desea guardar esta Ficha Socioeconómica?</p></center>

                <ul class="list-unstyled list-inline pull-right">
                    <p class="text-center">
                            <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Atrás</button></li>
                            <li><button type="submit" id='guardarfichasocioeconomica' class="btn btn-space btn-primary btn btn-success "><i class="fa fa-check"></i>Guardar</button></li>
                                      
                    </p>                
                </ul>
             </div>

        </div>
   </div>
</div>
