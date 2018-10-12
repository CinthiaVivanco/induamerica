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
                              <label class="col-sm-12 control-label labelleft">Religión <span class="required">*</span></label>
                              <div class="col-sm-8 abajocaja">

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
                              <label class="col-sm-12 control-label labelleft">Grupo Sanguíneo <span class="required">*</span></label>
                              <div class="col-sm-8 abajocaja">

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
                              <label class="col-sm-12 control-label labelleft">Talla Pantalón <span class="required">*</span></label>
                              <div class="col-sm-8 abajocaja">

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
                              <label class="col-sm-12 control-label labelleft">Talla Polo <span class="required">*</span></label>
                              <div class="col-sm-8 abajocaja">

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
                            <label class="col-sm-12 control-label labelleft">Talla Zapato <span class="required">*</span></label>
                            <div class="col-sm-8 abajocaja">

                              <input  type="text"
                                      id="tallazapato" name='tallazapato' value="@if(isset($fichasocioeconomica)){{old('tallazapato',$fichasocioeconomica->tallazapato)}}@else{{old('tallazapato')}}@endif" placeholder="Talla Zapato"
                                      required = "" data-parsley-type="number"
                                      autocomplete="off" class="form-control input-sm" data-aw="5"/>
                                      @include('error.erroresvalidate', [ 'id' => $errors->has('tallazapato')  , 
                                                                    'error' => $errors->first('tallazapato', ':message') , 
                                                                    'data' => '2'])

                            </div>
                          </div> 

                          <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">Talla Camisa <span class="required">*</span></label>
                              <div class="col-sm-8 abajocaja">

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
                                    <div class="be-radio dos has-success inline">
                                      <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->otroingreso == 1) checked  @endif @else checked @endif name="otroingreso" id="rad1">
                                      <label for="rad1">Sí</label>
                                    </div>
                                    <div class="be-radio dos segundo has-danger inline">
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
                                    <div class="be-radio dos has-success inline">
                                      <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->negociopropio == 1) checked  @endif @else checked @endif name="negociopropio" id="rad3">
                                      <label for="rad3">Sí</label>
                                    </div>
                                    <div class="be-radio dos segundo has-danger inline">
                                      <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->negociopropio == 0) checked  @endif @endif name="negociopropio" id="rad4">
                                      <label for="rad4">No</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-12 control-label labelleft">Tiene Deudas en entidades financieras  <span class="required">*</span></label>
                                  <div class="col-sm-6 abajocaja">
                                    <div class="be-radio dos has-success inline">
                                      <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->deudas == 1) checked  @endif @else checked @endif name="deudas" id="rad5">
                                      <label for="rad5">Sí</label>
                                    </div>
                                    <div class="be-radio dos segundo has-danger inline">
                                      <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->deudas == 0) checked  @endif @endif name="deudas" id="rad6">
                                      <label for="rad6">No</label>
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

                                  <label class="col-sm-12 control-label labelleft">Tipo Vivienda  <span class="required">*</span></label>
                                  <div class="col-sm-12 abajocaja">

                                    @foreach($tipovivienda as $item)
                                      <div class="be-radio has-success inline">
                                        <input type="radio" value="{{$item->id}}" name="tipovivienda_id" id="rad{{$item->id}}"
                                        

                                          @if(isset($fichasocioeconomica)) 
                                            @if($fichasocioeconomica->tipovivienda_id == $item->id) 
                                              checked
                                            @endif 
                                          @endif


                                           />
                                        <label for="rad{{$item->id}}">{{$item->descripcion}}</label>



                                      </div>                       
                                      <br>

                                    @endforeach

<!-- -->
                                    @if($item->descripcion == "Otros")

                                          <div class="col-sm-7 otro">
                                                <input  type="text" id="otro" name='otro' value=''  placeholder="Ingrese"
                                                        required = "" autocomplete="off" class="form-control input-xs" data-aw="1"/>
                                          </div>
                                    @else

                                          <div class="col-sm-7 otro">
                                                <input  type="hidden"
                                                        id="otro" name='otro' value=''  placeholder="Ingrese"
                                                        required = "" autocomplete="off" class="form-control input-xs" data-aw="1"/>
                                          </div>

                                    @endif 
                                  
                                                                      
                                  </div> 

                           </div>



                           <div class="form-group">

                            <label class="col-sm-12 control-label labelleft">Cuenta con<span class="required">*</span></label>
                            <div class="col-sm-6 abajocaja">
                              @foreach($casaparte as $item)  

                                <div class="be-checkbox inline ">

                                  <input id="{{$item->id}}" value="{{$item->id}}" name="casaparte[]" type="checkbox"
                                      @if(isset($fichasocioeconomica))
                                        @if($item->activo == '1') 
                                          checked  
                                        @endif 
                                      @endif
                                  >

                                  <label for="{{$item->id}}">
                                    <font style="vertical-align: inherit;">
                                      <font style="vertical-align: inherit;">{{$item->descripcion}}</font>
                                    </font>
                                  </label>

                                </div>

                              @endforeach

                            </div>
                          </div>


                            <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">Estado de Construcción <span class="required">*</span></label>
                              <div class="col-sm-12 abajocaja">
                                <div class="be-radio dos has-success inline">
                                  <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->estadoconstruccion == 1) checked  @endif @else checked @endif name="estadoconstruccion" id="rad7">
                                  <label for="rad7">Construida</label>
                                </div>
                                <div class="be-radio has-danger inline">
                                  <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->estadoconstruccion == 0) checked  @endif @endif name="estadoconstruccion" id="rad8">
                                  <label for="rad8">En Construcción</label5>
                                </div>
                              </div>
                            </div>

                              
                        </div>
                      </div>


                      <div class="col-sm-6">
                            <div class="panel-body">

                                   <div class="form-group">

                                      <label class="col-sm-12 control-label labelleft">Materiales de Construcción  <span class="required">*</span></label>
                                      <div class="col-sm-12 abajocaja">

                                        @foreach($construccionmaterial as $item)
                                          <div class="be-radio has-success inline">
                                            <input type="radio" value="{{$item->id}}"  name="construccionmaterial_id" id="radc{{$item->id}}"
                                              @if(isset($fichasocioeconomica)) 
                                                @if($fichasocioeconomica->construccionmaterial_id == $item->id) 
                                                  checked  
                                                @endif 
                                              @endif
                                               />
                                            <label for="radc{{$item->id}}">{{$item->descripcion}}</label>
                                          </div><br>
                                        @endforeach


                                      </div>
                                   </div>
                

                                    <div class="form-group">
                                      <label class="col-sm-12 control-label labelleft">Servicios<span class="required">*</span></label>
                                      <div class="col-sm-6 abajocaja">


                                        @foreach($servicio as $item)  

                                          <div class="be-checkbox inline ">

                                            <input id="s{{$item->id}}" value="{{$item->id}}" name="servicio[]" type="checkbox"
                                              @if(isset($fichasocioeconomica))
                                                @if($item->activo == '1') 
                                                  checked  
                                                @endif 
                                              @endif 
                                              >

                                            <label for="s{{$item->id}}">
                                              <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">

                                                  {{$item->descripcion}}

                                                </font>
                                              </font>
                                            </label>

                                          </div>

                                        @endforeach

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


                              <div class="form-group">

                                      <label class="col-sm-12 control-label labelleft">Lugar dónde se atiende<span class="required">*</span></label>
                                      <div class="col-sm-12 abajocaja">

                                        @foreach($centromedico as $item)
                                          <div class="be-radio has-success inline">
                                            <input type="radio" value="{{$item->id}}"  name="centromedico_id" id="radcm{{$item->id}}"
                                              @if(isset($fichasocioeconomica)) 
                                                @if($fichasocioeconomica->centromedico_id == $item->id) 
                                                  checked  
                                                @endif 
                                              @endif
                                               />
                                            <label for="radcm{{$item->id}}">{{$item->descripcion}}</label>
                                          </div><br>
                                        @endforeach


                                      </div>
                              </div>


                              <div class="form-group">

                                      <label class="col-sm-12 control-label labelleft">Frecuencia con la que asiste al médico <span class="required">*</span></label>
                                      <div class="col-sm-12 abajocaja">

                                        @foreach($frecuenciamedico as $item)
                                          <div class="be-radio has-success inline">
                                            <input type="radio" value="{{$item->id}}"  name="frecuenciamedico_id" id="radfm{{$item->id}}"
                                              @if(isset($fichasocioeconomica)) 
                                                @if($fichasocioeconomica->frecuenciamedico_id == $item->id) 
                                                  checked  
                                                @endif 
                                              @endif
                                               />
                                            <label for="radfm{{$item->id}}">{{$item->descripcion}}</label>
                                          </div><br>
                                        @endforeach


                                      </div>
                              </div>

                                <div class="form-group">

                                      <label class="col-sm-12 control-label labelleft">Con que frecuencia realiza exámenes de laboratorio clínico: <span class="required">*</span></label>
                                      <div class="col-sm-12 abajocaja">

                                        @foreach($frecuenciaexamen as $item)
                                          <div class="be-radio has-success inline">
                                            <input type="radio" value="{{$item->id}}"  name="frecuenciaexamen_id" id="radfe{{$item->id}}"
                                              @if(isset($fichasocioeconomica)) 
                                                @if($fichasocioeconomica->frecuenciaexamen_id == $item->id) 
                                                  checked  
                                                @endif 
                                              @endif
                                               />
                                            <label for="radfe{{$item->id}}">{{$item->descripcion}}</label>
                                          </div><br>
                                        @endforeach

                                      </div>
                              </div>
             
                            </div>
                          </div>


                          <div class="col-sm-6">
                            <div class="panel-body">
                             
                                <div class="form-group">
                                  <label class="col-sm-12 control-label labelleft">Donde realiza los exámenes de laboratorio clínico<span class="required">*</span></label>
                                  <div class="col-sm-12 abajocaja">
                                    <div class="be-radio dos has-success inline">
                                      <input type="radio" value='1' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->laboratorioclinico == 1) checked  @endif @else checked @endif name="laboratorioclinico" id="rad22">
                                      <label for="rad22">EsSalud</label>
                                    </div>
                                    <div class="be-radio has-danger inline">
                                      <input type="radio" value='0' @if(isset($fichasocioeconomica)) @if($fichasocioeconomica->laboratorioclinico == 0) checked  @endif @endif name="laboratorioclinico" id="rad23">
                                      <label for="rad23">Particular</label>
                                    </div>
                                  </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-12 control-label labelleft">Padece de alguna enfermedad<span class="required">*</span></label>
                                    <div class="col-sm-6 abajocaja">
                                      @foreach($enfermedad as $item)  

                                        <div class="be-checkbox inline ">

                                          <input id="e{{$item->id}}" value="{{$item->id}}" name="enfermedad[]" type="checkbox"
                                              @if(isset($fichasocioeconomica))
                                                @if($item->activo == '1') 
                                                  checked  
                                                @endif 
                                              @endif
                                          >

                                          <label for="e{{$item->id}}">
                                            <font style="vertical-align: inherit;">
                                              <font style="vertical-align: inherit;">{{$item->descripcion}}</font>
                                            </font>
                                          </label>

                                        </div>

                                      @endforeach

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
                <center><p>¿Seguro que desea guardas esta Ficha Socioeconómica?</p></center>

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
