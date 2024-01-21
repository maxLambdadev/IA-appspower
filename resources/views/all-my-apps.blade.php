@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') @lang('translation.My_apps') @endslot
@slot('title') @lang('translation.All_my_apps') @endslot
@endcomponent

    <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-3">
            <div class="product-info bg-white border cursor-pointer">
                <div class="row mx-0 pt-3 border-bottom">
                    <div class="col-3 pe-0">
                        <img src="https://appspower.s3.amazonaws.com/icons/AI+icon.png"
                            alt="product" class="w-100" />
                    </div>
                    <div class="col-9 px-3 py-2">
                        <h5 class="product-name text-primary fs-5 fw-bold pb-4" >
                            AI trained chatbot
                        </h5> 
                        <h5 class="product-description fs-5 pb-1 text-dark" >
                            Chatbot con IA y entrenamiento personalizado
                        </h5> 
                        <h5 class="product-version fs-5 text-dark" >
                            Versión Business
                        </h5> 
                    </div>
                    <p class="product-code mb-1 px-3 text-end text-muted">
                        CHTIA0324
                    </p>
                </div>
                <div class="row mx-0 py-2">
                    <div class="col-4 text-center px-0">
                        <p class="mb-2">Estado</p>
                        <span class="product-status bg-success rounded-4 px-2 py-1">Excelente</span>
                    </div>
                    <div class="col-5 text-center px-0">
                        <p class="mb-2">Vencimiento</p>
                        <h6 class="product-valid-period">23-Aug-2024</h6>
                    </div>
                    <div class="col-3 d-flex justify-content-around align-items-center px-1">
                        <img src="https://appspower.s3.amazonaws.com/icons/ChatGPT+icon.png"
                            alt="ChatGPT" class="col-5" />
                        <img src="https://appspower.s3.amazonaws.com/icons/B24+icon.png"
                            alt="ChatGPT" class="col-5" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-3">
            <div class="new-app bg-white border cursor-pointer h-100 d-flex flex-column">
                <div class="row mx-0 pt-3 border-bottom flex-grow-1">
                    <div class="col-3 pe-0">
                        <img src="https://appspower.s3.amazonaws.com/icons/New+app+icon.png"
                            alt="New app" class="w-100" />
                    </div>
                    <div class="col-9 px-3 pt-2">
                        <h5 class="new-card-title fs-5 fw-bold pb-4" >
                            Sumar una nueva app
                        </h5> 
                        <h5 class="product-description fs-5 text-dark" >
                            Haz clic aquí para sumar una nueva app en tu cuenta
                        </h5> 
                    </div>
                </div>
                <div class="p-3 m-1">
                    <button class="btn-new-app px-3 py-1 text-white bg-info rounded-2 border-0">
                        Nueva
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
<!-- dashboard init -->
<script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
@endsection