@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo Graduado</div>

                <div class="card-body">
                    <form action="{{route('graduados.store') }}" method="POST">



                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                        <label class="form-label">matri_fec</label>
                                        <input type="date" name="matri_fec" class="form-control" autocomplete="off">

                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">fac_nom</label>
                                        <input type="text" name="fac_nom" class="form-control" autocomplete="off">

                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">carr_prog</label>
                                        <input type="text" name="carr_prog" class="form-control" autocomplete="off" required>

                                </div>

                                <div class="col-md-6">
                                        <label class="form-label">egres_fec</label>
                                        <input type="date" name="egres_fec" class="form-control" autocomplete="off">

                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">apepat</label>
                                        <input type="text" name="apepat" class="form-control" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">apemat</label>
                                        <input type="text" name="apemat" class="form-control" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">nombre</label>
                                        <input type="text" name="nombre" class="form-control" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                <label class="form-label"></label>
                                    <select class="form-select" name="sexo">
                                        <option value="">--Seleccionar--</option>
                                        <option value="M">M</option>
                                        <option value="F">F</option>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">docu_num</label>
                                        <input type="text" name="docu_num" class="form-control" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">den_grad</label>
                                        <input type="text" name="den_grad" class="form-control" autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">prog_estu</label>
                                        <input type="text" name="prog_estu" class="form-control" autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                        <label class="form-label">mod_est</label>
                                        <input type="text" name="mod_est" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12" >
                                    <div class="float-end">
                                        <button type="submit" class="btn btn-success">Guardar</button>

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
