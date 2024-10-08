@extends('backend.layouts.layout')
@section('title',__('categories.edit_category'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Edit Data Of Testimonial : {{ $testimonial->title }}</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard.index') }}" class="text-muted">{{__('home.title')}}</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('testimonials.index') }}" class="text-muted">Testimonials</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">{{__('categories.edit_category') }} : {{ $testimonial->title }}</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->

            </div>
        </div>
        <!--end::Subheader-->
        {!! Form::model($testimonial, ['method' => 'PATCH', 'route' => ['testimonials.update', $testimonial->id], 'files' => true, 'id' => 'kt_form', 'class' => 'form']) !!}
        @include('backend.modules.testimonials._form',['type'=>'edit'])
        {!! Form::close() !!}
    </div>

@endsection
