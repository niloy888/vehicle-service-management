@extends('front.master')

@section('body')

<div class="error404-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto text-center">
                        <div class="search-error-wrapper">
                            <h1>404</h1>
                            <h2>PAGE NOT BE FOUND</h2>
                            <p class="short_desc">Sorry but the page you are looking for does not exist, have been
                                removed, name
                                changed or is temporarily unavailable.</p>
                            <!-- <form action="javascript:void(0)" class="error-form">
                                <div class="inner-error_form">
                                    <input type="text" placeholder="Search..." class="error-input-text">
                                    <button type="submit" class="error-search_btn"><i class="fa fa-search"></i></button>
                                </div>
                            </form> -->
                            <br>
                            <div class="uren-btn-ps_center"></div>
                            <a href="{{route('/')}}" class="uren-error_btn">Back To Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection