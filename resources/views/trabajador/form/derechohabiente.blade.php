<div class="containertab">
   <div class="row">
      <div class="process">
           <div class="process-row nav nav-tabs">

              <div class="process-step tabmenu1">
               <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-file-text fa-2x"></i></button>
               <p><small>Datos <br />Personales</small></p>
               <div class='errortab'>
                 <i class="fa fa-exclamation" aria-hidden="true"></i> 
               </div>
               <div class='bientab'>
                 <i class="fa fa-check" aria-hidden="true"></i> 
               </div>
              </div>

              <div class="process-step tabmenu2">
               <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-users fa-2x"></i></button>
               <p><small>Datos<br />Familiares</small></p>
               <div class='errortab'>
                 <i class="fa fa-exclamation" aria-hidden="true"></i> 
               </div>
               <div class='bientab'>
                 <i class="fa fa-check" aria-hidden="true"></i> 
               </div>
              </div>

              <div class="process-step tabmenu3">
               <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-home fa-2x"></i></button>
               <p><small>Datos<br />Domicilio</small></p>
               <div class='errortab'>
                 <i class="fa fa-exclamation" aria-hidden="true"></i> 
               </div>
               <div class='bientab'>
                 <i class="fa fa-check" aria-hidden="true"></i> 
               </div>
              </div>


              <div class="process-step tabmenu4">
               <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu4"><i class="fa fa-check fa-2x"></i></button>
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
                          
                           <label class="col-sm-12 control-label labelleft" >Tipo Documento <span class="required">*</span></label>
                            <div class="col-sm-8 abajocaja">
                              {!! Form::select( 'tipodocumento_id', $combotipodocumento, array(),
                                                [
                                                  'class'       => 'form-control control input-sm' ,
                                                  'id'          => 'tipodocumentos_id',
                                                  'required'    => '',
                                                  'data-aw'     => '1'
                                                ]) !!}
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-12 control-label labelleft">DNI <span class="required">*</span></label>
                            <div class="col-sm-8 abajocaja">

                              <input  type="text"
                                      id="dnihabiente" name='dnihabiente' value="@if(isset($derechohabiente)){{old('dnihabiente' ,$derechohabiente->dnihabiente)}}@else{{old('dnihabiente')}}@endif" placeholder="DNI Habiente"
                                      required = "" data-parsley-minlength="8" data-parsley-maxlength="8" data-parsley-type="number"
                                      autocomplete="off" class="form-control input-sm" data-aw="2"/>

                                @include('error.erroresvalidate', [ 'id' => $errors->has('dnihabiente')  , 
                                                                    'error' => $errors->first('dnihabiente', ':message') , 
                                                                    'data' => '2'])

                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-12 control-label labelleft">
                              Fecha Nacimiento <span class="required">*</span>
                            </label>
                            <div class="col-sm-8 abajocaja">
                              <div data-min-view="2" data-date-format="dd-mm-yyyy"  class="input-group date datetimepicker">
                                        <input size="16" type="text" value="@if(isset($derechohabiente)){{old('fechanacimiento',$derechohabiente->fechanacimiento)}}@else{{old('fechanacimiento')}}@endif" placeholder="Fecha Nacimiento"
                                        id='fechanacimiento' name='fechanacimiento' 
                                        required = ""
                                        class="form-control input-sm">
                                        <span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">Apellido Paterno <span class="required">*</span></label>
                              <div class="col-sm-8 abajocaja">

                                <input  type="text"
                                        id="apellidopaterno" name='apellidopaterno' value="@if(isset($derechohabiente)){{old('apellidopaterno',$derechohabiente->apellidopaterno)}}@else{{old('apellidopaterno')}}@endif" placeholder="Apellido Paterno"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="3"/>

                              </div>
                          </div>
                      </div>
              
                    </div>

                    <div class="col-sm-6">

                        <div class="panel-body">

                          <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">Apellido Materno <span class="required">*</span></label>
                              <div class="col-sm-8 abajocaja">

                                <input  type="text"
                                        id="apellidomaterno" name='apellidomaterno' value="@if(isset($derechohabiente)){{old('apellidomaterno',$derechohabiente->apellidomaterno)}}@else{{old('apellidomaterno')}}@endif" placeholder="Apellido Materno"
                                        required = ""
                                        autocomplete="off" class="form-control input-sm" data-aw="4"/>

                              </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-12 control-label labelleft">Nombres <span class="required">*</span></label>
                            <div class="col-sm-8 abajocaja">

                              <input  type="text"
                                      id="nombre" name='nombre' value="@if(isset($derechohabiente)){{old('nombre',$derechohabiente->nombres)}}@else{{old('nombre')}}@endif" placeholder="Nombres"
                                      required = ""
                                      autocomplete="off" class="form-control input-sm" data-aw="5"/>

                            </div>
                          </div> 

                          <div class="form-group">
                            <label class="col-sm-12 control-label labelleft">Sexo <span class="required">*</span></label>
                            <div class="col-sm-8 abajocaja">
                              <div class="be-radio has-success inline">
                                <input type="radio" value='1' @if(isset($derechohabiente)) @if($derechohabiente->sexo == 1) checked  @endif @else checked @endif name="sexo" id="rad1">
                                <label for="rad1">Masculino</label>
                              </div>
                              <div class="be-radio has-danger inline">
                                <input type="radio" value='0' @if(isset($derechohabiente)) @if($derechohabiente->sexo == 0) checked  @endif @endif name="sexo" id="rad2">
                                <label for="rad2">Femenino</label>
                              </div>
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

                              <label class="col-sm-12 control-label labelleft">Vínculo Familiar <span class="required">*</span></label>
                              <div class="col-sm-8 abajocaja">
                                {!! Form::select( 'vinculofamiliar_id', $combovinculofamiliar, array(),
                                                  [
                                                    'class'       => 'form-control control input-sm' ,
                                                    'id'          => 'vinculofamiliar_id',
                                                    'required'    => '',
                                                    'data-aw'     => '8'
                                                  ]) !!}
                              </div>
                            </div>

                            <div class="form-group ajaxtipodocumentoacredita">

                              <label class="col-sm-12 control-label labelleft" >Tipo Doc Acred <span class="required">*</span></label>
                              <div class="col-sm-8  abajocaja">
                                {!! Form::select( 'tipodocumentoacredita_id', $combotipodocumentoacredita, array(),
                                                  [
                                                    'class'       => 'form-control control input-sm' ,
                                                    'id'          => 'tipodocumentoacredita_id',
                                                    'required'    => '',
                                                    'data-aw'     => '1'
                                                  ]) !!}
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12 control-label labelleft">Nro Doc Acredita <span class="required">*</span></label>
                                <div class="col-sm-8 abajocaja">

                                  <input  type="text"
                                          id="dniacredita" name='dniacredita' value="@if(isset($derechohabiente)){{old('dniacredita' ,$derechohabiente->dniacredita)}}@else{{old('dniacredita')}}@endif" placeholder="Doc Acredita"
                                          required = "" data-parsley-type="number"
                                          autocomplete="off" class="form-control input-sm" data-aw="2"/>

                                    @include('error.erroresvalidate', [ 'id' => $errors->has('dniacredita')  , 
                                                                        'error' => $errors->first('dniacredita', ':message') , 
                                                                        'data' => '2'])

                                </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-12 control-label labelleft">
                                Fecha Alta
                              </label>
                              <div class="col-sm-8 abajocaja">
                                <div data-min-view="2" data-date-format="dd-mm-yyyy"  class="input-group date datetimepicker">
                                          <input size="16" type="text" value="@if(isset($derechohabiente)){{old('fechainicio',$derechohabiente->fechainicio)}}@else{{old('fechainicio')}}@endif" placeholder="Fecha Alta"
                                          id='fechainicio' name='fechainicio' 
                                          required = ""
                                          class="form-control input-sm">
                                          <span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar "></i></span>
                                </div>
                              </div>
                            </div>
                        
                  
                    </div>
              
                  </div>

                  <div class="col-sm-6">

                        <div class="panel-body">

                           <div class="form-group">
                                <label class="col-sm-12 control-label labelleft">
                                  Fecha Fin
                                </label>
                                <div class="col-sm-8  abajocaja">
                                  <div data-min-view="2" data-date-format="dd-mm-yyyy"  class="input-group date datetimepicker">
                                            <input size="16" type="text" value="@if(isset($derechohabiente)){{old('fechafin',$derechohabiente->fechafin)}}@else{{old('fechafin')}}@endif" placeholder="Fecha Fin"
                                            id='fechafin' name='fechafin' 
                                            required = ""
                                            class="form-control input-sm">
                                            <span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                                  </div>
                                </div>
                           </div>

                           <div class="form-group">

                                <label class="col-sm-12 control-label labelleft">Tipo Baja </label>
                                <div class="col-sm-8 abajocaja">
                                  {!! Form::select( 'tipobaja_id', $combotipobaja, array(),
                                                    [
                                                      'class'       => 'form-control control input-sm' ,
                                                      'id'          => 'tipobaja_id',
                                                      'required'    => '',
                                                      'data-aw'     => '8'
                                                    ]) !!}
                                </div>
                           </div>

                           <div class="form-group">
                                <label class="col-sm-12 control-label labelleft">Nro Resolución </label>
                                <div class="col-sm-8 abajocaja">

                                    <input  type="text"
                                          id="numeroresolucion" name='numeroresolucion' value="@if(isset($derechohabiente)){{old('numeroresolucion',$derechohabiente->numeroresolucion)}}@else{{old('numeroresolucion')}}@endif"placeholder="Número Resolución"
                                          required = "" data-parsley-type="number"
                                          autocomplete="off" class="form-control input-sm" data-aw="6"/>

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

                                      <label class="col-sm-12 control-label labelleft" >Tipo Vía <span class="required">*</span></label>
                                          <div class="col-sm-8 abajocaja">
                                            {!! Form::select( 'tipovia_id', $combotipovia, array(),
                                                              [
                                                                'class'       => 'form-control control input-sm' ,
                                                                'id'          => 'tipovias_id',
                                                                'required'    => '',
                                                                'data-aw'     => '11'
                                                              ]) !!}
                                          </div>
                                </div>

                                <div class="form-group">
                                      <label class="col-sm-12 control-label labelleft" >Nombre Vía <span class="required">*</span></label>
                                      <div class="col-sm-8 abajocaja">

                                        <input  type="text"
                                                id="nombrevia" name='nombrevia' value="@if(isset($derechohabiente)){{old('nombrevia',$derechohabiente->nombrevia)}}@else{{old('nombrevia')}}@endif" placeholder="Nombre Vía"
                                                required = ""
                                                autocomplete="off" class="form-control input-sm" data-aw="12"/>

                                      </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-12 control-label labelleft">Número Vía <span class="required">*</span></label>
                                  <div class="col-sm-8 abajocaja">

                                    <input  type="text"
                                            id="numerovia" name='numerovia' value="@if(isset($derechohabiente)){{old('numerovia',$derechohabiente->numerovia)}}@else{{old('numerovia')}}@endif" placeholder="Número Vía"
                                            required = ""
                                            autocomplete="off" class="form-control input-sm" data-aw="13"/>

                                  </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 control-label labelleft">Interior <span class="required">*</span></label>
                                    <div class="col-sm-12 abajocaja">

                                        <input  type="text"
                                                id="interior" name='interior' value="@if(isset($derechohabiente)){{old('interior',$derechohabiente->interior)}}@else{{old('interior')}}@endif" placeholder="Interior"
                                                required = ""
                                                autocomplete="off" class="form-control input-sm" data-aw="14"/>

                                    </div>
                                </div>

                                <div class="form-group">

                                        <label class="col-sm-12 control-label labelleft">Tipo Zona <span class="required">*</span></label>
                                        <div class="col-sm-8 abajocaja">
                                          {!! Form::select( 'tipozona_id', $combotipozona, array(),
                                                            [
                                                              'class'       => 'form-control control input-sm' ,
                                                              'id'          => 'tipozonas_id',
                                                              'required'    => '',
                                                              'data-aw'     => '15'
                                                            ]) !!}
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-sm-12 control-label labelleft">Nombre Zona <span class="required">*</span></label>
                                        <div class="col-sm-8 abajocaja">

                                          <input  type="text"
                                                  id="nombrezona" name='nombrezona' value="@if(isset($derechohabiente)){{old('nombrezona',$derechohabiente->nombrezona)}}@else{{old('nombrezona')}}@endif" placeholder="Nombre Zona"
                                                  required = ""
                                                  autocomplete="off" class="form-control input-sm" data-aw="16"/>

                                        </div>
                                </div>
                              
                            </div>
                          </div>


                          <div class="col-sm-6">
                            <div class="panel-body">
                             
                               <div class="form-group">
                                    <label class="col-sm-12 control-label labelleft">Referencia </label>
                                    <div class="col-sm-8 abajocaja">

                                          <input  type="text"
                                                  id="referencia" name='referencia' value="@if(isset($derechohabiente)){{old('referencia',$derechohabiente->referencia)}}@else{{old('referencia')}}@endif" placeholder="Referencia"
                                                  required = ""
                                                  autocomplete="off" class="form-control input-sm" data-aw="17"/>

                                    </div>
                               </div>

                               <div class="form-group">

                                      <label class="col-sm-12 control-label labelleft">Departamento <span class="required">*</span></label>
                                      <div class="col-sm-8 abajocaja">
                                        {!! Form::select( 'departamento_id', $combodepartamento, array(),
                                                          [
                                                            'class'       => 'form-control control input-sm' ,
                                                            'id'          => 'departamentos_id',
                                                            'required'    => '',
                                                            'data-aw'     => '10'
                                                          ]) !!}
                                      </div>
                               </div>

                               <div class="form-group ajaxprovincia">

                                    <label class="col-sm-12 control-label labelleft">Provincia <span class="required">*</span></label>
                                    <div class="col-sm-8 abajocaja">
                                      {!! Form::select( 'provincia_id', $comboprovincia, array(),
                                                        [
                                                          'class'       => 'form-control control input-sm' ,
                                                          'id'          => 'provincia_id',
                                                          'required'    => '',
                                                          'data-aw'     => '11'
                                                        ]) !!}
                                    </div>
                               </div>

                               <div class="form-group ajaxdistrito">

                                    <label class="col-sm-12 control-label labelleft">Distrito <span class="required">*</span></label>
                                    <div class="col-sm-8 abajocaja">
                                      {!! Form::select( 'distrito_id', $combodistrito, array(),
                                                        [
                                                          'class'       => 'form-control control input-sm' ,
                                                          'id'          => 'distrito_id',
                                                          'required'    => '',
                                                          'data-aw'     => '12'
                                                        ]) !!}
                                    </div>
                               </div>

                               <div class="form-group">
                                      <label class="col-sm-12 control-label labelleft">Situación <span class="required">*</span></label>
                                      <div class="col-sm-8 abajocaja">
                                          <div class="be-radio has-success inline">
                                            <input type="radio" value='1' @if(isset($trabajador)) @if($trabajador->activo == 1) checked  @endif @else checked @endif name="activo" id="rad5">
                                            <label for="rad5">Activo</label>
                                          </div>
                                        <div class="be-radio has-danger inline">
                                            <input type="radio" value='0' @if(isset($trabajador)) @if($trabajador->activo == 0) checked  @endif @endif name="activo" id="rad6">
                                            <label for="rad6">Baja</label>
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
                <center><p>¿Seguro que desea guardar esta ficha?</p></center>

                <ul class="list-unstyled list-inline pull-right">
                    <p class="text-center">
                            <li><button type="button" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Atrás</button></li>
                            <li><button type="submit" id='guardarderechohabiente' class="btn btn-space btn-primary btn btn-success "><i class="fa fa-check"></i>Guardar</button></li>
                                      
                    </p>                
                </ul>
             </div>

        </div>
   </div>
</div>
