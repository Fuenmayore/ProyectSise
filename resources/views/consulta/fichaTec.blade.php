@extends('layouts.layout')
@section('5')
active bg-gradient-warning
@endsection

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">





    <main class="container mt-8 min-vh-100 py-4">
        <div class="row">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-warning shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3"> Fichas desertadas por Tecnico
                                        </h6>


                                    </div>


                                    <!-- Button trigger modal -->
                                    <div class="col-xl-12">
                                        <div class="ms-md-auto pe-md-1 d-flex align-items-center">
                                            <div class="input-group input-group-outline">
                                                <a class="nav-link text-dark btn" href="{{ route('consulta') }}">
                                                    <button type="button" href="{{ route('consulta') }}" class="btn btn-block btn-warning">
                                                        Atrás
                                                    </button>
                                                </a>
                                                <br>
                                                <!-- Button trigger modal -->
                                                <a class="nav-link text-dark btn">
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                        Total Desertados
                                                    </button>
                                                </a>
                                                <br>
                                                <a class="nav-link text-dark btn" href="{{ route('file-export-ReportTec') }}">
                                                    <button type="button" href="{{ route('file-export-ReportTec') }}" class="btn btn-block btn-warning">
                                                        Exportar documento
                                                    </button>
                                                </a>
                                                
                                              
                                        </div>
                                    </div>



                                    <form class="form-inline my-2 my-lg-0 float-right">
                                        <div class="col-xl-12">
                                            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                                <div class="input-group input-group-outline">
                                                    <label class="form-label"></label>
                                                    <input name="buscarporTec" type="search" class="form-control mr-sm-8">
                                                    <button class="btn btn-warning my-2 my-sm-0" type="submit">search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>



                                    <div class="card-body px-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                            Identificador Ficha</th>


                                                        <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                            Nombre Coordinación</th>
                                                        <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                            Desertados por ficha</th>
                                                            <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                            Retención</th>
                                                        <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                            Deserción</th>
                                                            <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                            Total Inscritos  </th>
                                                            <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                             Total Activos  </th>
                                                             <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                                Fecha inicio </th>
                                                                <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                                                 Fecha fin  </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($tec as $tes)
                                                    <tr>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->id }}
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->Coordinacion->nom_coor }}
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->desertados }}
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->totalRetencion  }}%
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->totalDersercion }}%
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->total_apre }}
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->total_act }}
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->fecha_in }}
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            {{ $tes->fecha_fin }}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Desertados por Coordinación <br> Tecnicos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                    Coordinación</th>


                                <th class="text-center text-uppercase text-primary text-xxs font-weight-bolder opacity-7">
                                    Total Desertados</th>



                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datosTec as $dato)
                            <tr>
                                <td class="align-middle text-center">
                                    {{ $dato->Coordinacion->nom_coor }}
                                </td>
                                <td class="align-middle text-center">
                                    {{$dato->registro_coordinacion}}
                                </td>



                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        @endsection