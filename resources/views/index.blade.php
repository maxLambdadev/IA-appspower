@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') @lang('translation.My_apps') @endslot
@slot('title') @lang('translation.All_my_apps') @endslot
@endcomponent



@endsection
@section('script')
<!-- dashboard init -->
<script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
@endsection