@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar Graduado</div>

                <div class="card-body">
                    <form action="{{ route('graduados.update',$graduados)}}" method="POST">


                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                        <label class="form-label">matri_fec</label>
                                        <input type="date" name="matri_fec" class="form-control" value="{{ ($graduados->matric_fec) }}" autocomplete="off">

                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">fac_nom</label>
                                        <input type="text" name="fac_nom" class="form-control" value="{{ ($graduados->fac_nom) }}" autocomplete="off">

                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">carr_prog</label>
                                        <input type="text" name="carr_prog" class="form-control" value="{{ ($graduados->carr_prog) }}" autocomplete="off" required>

                                </div>

                                <div class="col-md-6">
                                        <label class="form-label">egres_fec</label>
                                        <input type="date" name="egres_fec" class="form-control" value="{{ ($graduados->egres_fec) }}" autocomplete="off">

                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">apepat</label>
                                        <input type="text" name="apepat" class="form-control" value="{{ ($graduados->apepat) }}" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">apemat</label>
                                        <input type="text" name="apemat" class="form-control" value="{{ ($graduados->apemat) }}" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">nombre</label>
                                        <input type="text" name="nombre" class="form-control" value="{{ ($graduados->nombre) }}" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                <label class="form-label"></label>
                                    <select class="form-select" name="sexo">
                                        <option value="{{ $graduados->sexo }}"></option>
                                        <option value="">--Seleccionar--</option>
                                        <option value="M">M</option>
                                        <option value="F">F</option>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">docu_num</label>
                                        <input type="text" name="docu_num" class="form-control" value="{{ ($graduados->docu_num) }}" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">den_grad</label>
                                        <input type="text" name="den_grad" class="form-control" value="{{ ($graduados->den_grad) }}" autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">prog_estu</label>
                                        <input type="text" name="prog_estu" class="form-control" value="{{ ($graduados->prog_estu) }}" autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">mod_est</label>
                                        <input type="text" name="mod_est" class="form-control" value="{{ ($graduados->mod_est) }}" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12" >
                                    <div class="float-end">
                                        <button type="submit" class="btn btn-success">Editar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
