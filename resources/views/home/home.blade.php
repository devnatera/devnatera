@extends('home.layout')

@section('content')
    <div class="d-flex m-auto container-app border-message bg-principal-light bg-opacity-75">
        <div class="col-2 d-flex align-items-center">
            <div class="m-auto bg-principal-dark img-container-circle">
                <img src="{{ Vite::asset('resources/images/img/photo.png') }}" class="photo" alt="my photo">
            </div>
        </div>
        <div class="col-8 col-md-9 px-1">
            <p class="m-0 pt-1 fs-5 text-principal text-sm">
                Hola, mi nombre es Edinson Natera tengo 25 años <span class="d-none d-sm-inline"> y me gusta la programación de sistemas informáticos. </span>
            </p>
        </div>
        <div class="col-2 col-md-1 d-flex align-items-center">
            <div class="m-auto bg-principal-dark img-container-sm-circle border-solid border-accent" role="button">
                <img src="{{ Vite::asset('resources/images/svg/contact.svg') }}" class="img-svg filter-accent" alt="contact"/>
            </div>
        </div>
    </div>
    <div class="row mt-3 mx-auto container-app">
        <div class="col-12 col-md-6 px-1">
            <div class="w-100 text-center">
                <span class="text-complement fs-5">Mis habilidades</span>
            </div>
            <div class="rounded-2 border-solid border-complement-light">
                @foreach($habilidades as $habilidad)
                    <div class="d-flex align-items-center">
                        <div class="col-2">
                            <div
                                class="m-auto bg-principal-dark img-container-sm-circle border-solid border-complement-light">
                                <img src="{{ Vite::asset('resources/'.$habilidad->image) }}"
                                     class="img-svg filter-white" alt="project"/>
                            </div>
                        </div>
                        <div class="col-10 p-1">
                            <div class="d-flex justify-content-between rounded bg-principal-light bg-opacity-75">
                                <div>
                                    <div class="w-100 ms-3">
                                        <span class="text-complement">{{$habilidad->nombre}}</span>
                                    </div>
                                    <div>
                                        <p class="fs-6 lh-1 px-2 text-principal">{{$habilidad->descripcion}}</p>
                                    </div>
                                </div>
                                <div class="pe-2 d-flex align-items-center justify-content-end">
                                    <div class="px-1 border-dashed border-white" role="button">
                                        <i class="bi bi-eye text-white"
                                           style="font-stretch: ultra-expanded !important;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-md-6 px-1">
            <div class="w-100 text-center">
                <span class="text-complement fs-5">Mi experiencia</span>
            </div>
            <div class="rounded-2 border-solid border-complement-light">
                @foreach($experiencias as $experiencia)
                    <div class="p-1">
                        <div class="d-flex justify-content-between rounded bg-principal-light bg-opacity-75">
                            <div>
                                <div class="w-100 ms-3">
                                    <span class="text-complement">{{$experiencia->periodo}}</span>
                                </div>
                                <div>
                                    <table class="table-borderless fs-6 text-principal">
                                        <tr>
                                            <td class="px-2 align-top">Cargo:</td>
                                            <td class="lh-1">{{$experiencia->cargo}}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-2 align-top">Compañia:</td>
                                            <td class="lh-1">{{$experiencia->compania}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="pe-2 d-flex align-items-center justify-content-end">
                                <div class="px-1 border-dashed border-white" role="button">
                                    <i class="bi bi-eye text-white"
                                       style="font-stretch: ultra-expanded !important;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

