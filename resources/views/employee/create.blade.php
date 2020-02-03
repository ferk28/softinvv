@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')
{{-- send data --}}
<form method="post" action="{{route('employee.store')}}"> 
    @csrf
    {{-- input encrypted --}}
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
                <div class="mb-3">
                    <label for="name">Nombre del Empleado</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre empleado" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="status">Estatus</label>
                        <select class="custom-select d-block w-100" name="status" id="status" required>
                            <option value="">Seleccionar...</option>
                            <option>Alta</option>
                            <option>Baja</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid status.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="controlnum">Numero de control</label>
                        <input type="number" class="form-control" name="controlnum" id="controlnum" placeholder="5 caracteres" required>
                        <div class="invalid-feedback">
                            Control num is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="boss_id">Nombre del jefe en area</label>
                    <input type="text" class="form-control" name="boss_id" id="boss_id" placeholder="Nombre jefe" required>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>    
</form>
@endsection
