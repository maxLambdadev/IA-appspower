@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

<!-- Page Css -->
<link href="{{ URL::asset('build/css/all-my-apps.min.css') }}" rel="stylesheet" type="text/css" />

@section('content')

@component('components.breadcrumb')
@slot('li_1') @lang('translation.My_apps') @endslot
@slot('title') @lang('translation.All_my_apps') @endslot
@endcomponent

<div class="row">
    <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-3 py-2">
        <div class="product-info bg-white border cursor-pointer">
            <div class="row mx-0 pt-3 border-bottom">
                <div class="col-3 pe-0">
                    <img src="https://appspower.s3.amazonaws.com/icons/AI+icon.png" alt="product" class="w-100" />
                </div>
                <div class="col-9 px-3 py-2">
                    <h5 class="product-name text-primary fs-5 fw-bold pb-4">
                        AI trained chatbot
                    </h5>
                    <h5 class="product-description fs-5 pb-1 text-muted">
                        Chatbot con IA y entrenamiento personalizado
                    </h5>
                    <h5 class="product-version fs-5 text-muted">
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
                    <img src="https://appspower.s3.amazonaws.com/icons/ChatGPT+icon.png" alt="ChatGPT" class="col-5" />
                    <img src="https://appspower.s3.amazonaws.com/icons/B24+icon.png" alt="ChatGPT" class="col-5" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-3 py-2">
        <div class="new-app bg-white border cursor-pointer h-100 d-flex flex-column" data-bs-toggle="modal" data-bs-target="#new-app-card-modal">
            <div class="row mx-0 pt-3 border-bottom flex-grow-1">
                <div class="col-3 pe-0">
                    <img src="https://appspower.s3.amazonaws.com/icons/New+app+icon.png" alt="New app" class="w-100" />
                </div>
                <div class="col-9 px-3 pt-2">
                    <h5 class="new-card-title fs-5 fw-bold pb-4">
                        Sumar una nueva app
                    </h5>
                    <h5 class="product-description fs-5 text-muted">
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

<!-- new-app-card modal -->
<div id="new-app-card-modal" class="modal fade" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content h-100">
            <div class="modal-header border-2 mx-2 px-2 py-2">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Sumar una nueva app</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row py-2">
                    <div class="col-md-3">
                        Quiero la app:
                    </div>
                    <div class="col-md-7">
                        <select class="my-want-app form-select">
                            <option>Seleccionar…</option>
                            <option value="1">select1</option>
                        </select>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-3">
                        Para la plataforma:
                    </div>
                    <div class="col-md-7">
                        <select class="case-of-the-app form-select">
                            <option>Seleccionar…</option>
                            <option value="1">select1</option>
                        </select>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-3">
                        En la versión:
                    </div>
                    <div class="col-md-7">
                        <div class="form-check form-switch form-switch-md mb-3 text-end ps-0">
                            <label class="monthly form-check-label me-5" for="monthly-yearly">Monthly</label>
                            <div class="d-inline-block">
                                <input class="form-check-input d-inline-block" type="checkbox" id="monthly-yearly">
                                <label class="yearly form-check-label opacity-50" for="monthly-yearly">Yearly</label>
                            </div>
                            <span class="text-danger">(¡Obtiene 2 meses gratis!)</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9 py-2">

                        <!-- Content
		============================================= -->
                        <section id="content">
                            <div class="content-wrap">
                                <div class="container">
                                    <div class="row pricing col-mb-30 mb-4">
                                        <div class="col-md-6 col-xl-4 py-2">
                                            <div class="pricing-box border border-2 rounded-3 h-shadow shadow-ts px-4 py-3">
                                                <i class="bx bx-walk text-primary fs-3"></i>
                                                <div class="pricing-title border-bottom-0 pb-0">
                                                    <!-- <span class="text-muted text-smaller">Basic</span> -->
                                                    <p class="fs-5 fw-bold text-black text-uppercase">Personal</p>
                                                </div>
                                                <div class="pricing-price pricing-sm fw-bold">
                                                    <h3 class="price-unit fw-bolder text-black">$49</h3>
                                                </div>
                                                <p class="mt-3 mb-1 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                                <div class="pricing-action py-3">
                                                    <a href="#" class="btn btn-outline-dark waves-effect waves-light w-100 text-center fw-bold">Get Started </a>
                                                </div>
                                                <div class="pricing-features border-bottom-0">
                                                    <h6 class="ls-1 fw-medium mb-2 text-black fw-bold">What's Included:</h6>
                                                    <ul class="iconlist">
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>Niche Demo</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>100 User Accounts</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>1 Year License</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>24/7 Support</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4 py-2">
                                            <div class="pricing-box border border-2 rounded-3 h-shadow shadow-ts px-4 py-3">
                                                <i class="bx bx-walk text-primary fs-3"></i>
                                                <div class="pricing-title border-bottom-0 pb-0">
                                                    <!-- <span class="text-muted text-smaller">Basic</span> -->
                                                    <p class="fs-5 fw-bold text-black text-uppercase">Team</p>
                                                </div>
                                                <div class="pricing-price pricing-sm fw-bold">
                                                    <h3 class="price-unit fw-bolder text-black">$129</h3>
                                                </div>
                                                <p class="mt-3 mb-1 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                                <div class="pricing-action py-3">
                                                    <a href="#" class="btn btn-outline-dark waves-effect waves-light w-100 text-center fw-bold">Get Started </a>
                                                </div>
                                                <div class="pricing-features border-bottom-0">
                                                    <h6 class="ls-1 fw-medium mb-2 text-black fw-bold">What's Included:</h6>
                                                    <ul class="iconlist">
                                                        <li class="py-1"><i class="bx bxs-plus-circle text-black me-1"></i> <span>Everything in Personal Plan</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>Niche Demo</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>100 User Accounts</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>1 Year License</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>24/7 Support</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>24/7 Support</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4 py-2">
                                            <div class="pricing-box border border-2 rounded-3 h-shadow shadow-ts px-4 py-3">
                                                <i class="bx bx-walk text-primary fs-3"></i>
                                                <div class="pricing-title border-bottom-0 pb-0">
                                                    <!-- <span class="text-muted text-smaller">Basic</span> -->
                                                    <p class="fs-5 fw-bold text-black text-uppercase">Agency</p>
                                                </div>
                                                <div class="pricing-price pricing-sm fw-bold">
                                                    <h3 class="price-unit fw-bolder text-black">$299</h3>
                                                </div>
                                                <p class="mt-3 mb-1 text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                                <div class="pricing-action py-3">
                                                    <a href="#" class="btn btn-outline-dark waves-effect waves-light w-100 text-center fw-bold">Get Started </a>
                                                </div>
                                                <div class="pricing-features border-bottom-0">
                                                    <h6 class="ls-1 fw-medium mb-2 text-black fw-bold">What's Included:</h6>
                                                    <ul class="iconlist">
                                                        <li class="py-1"><i class="bx bxs-plus-circle text-black me-1"></i> <span>Everything in Team Plan</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>Niche Demo</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>100 User Accounts</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>1 Year License</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>24/7 Support</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>1350+ Template</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>Priority Support</span></li>
                                                        <li class="py-1"><i class="bx bxs-check-circle text-success me-1"></i> <span>Github Access</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- #content end -->
                        <p class="text-center mt-5 mb-0">
                            Todos los planes incluyen 3 días de prueba gratis. Puedes cancelar los planes en cualquier momento.
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection
@section('script')
<!-- dashboard init -->
<script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/all-my-apps.js') }}"></script>
@endsection