@extends('admin.master')


@section('body')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('admin.home')}}">Dashboard</a>
        <span class="breadcrumb-item active">Add Service</span>
    </nav>

    <div class="sl-pagebody">
        
        <div class="card pd-20 pd-sm-40">
            <h3 class="text-center text-success"> {{Session::get('message')}} </h3>

            <form action="{{route('new-region')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-layout">


                    <div class="mg-b-25">
                        <div class=" row col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Region Name: <span
                                    class="tx-danger">*</span></label>
                                    <input required class="form-control" type="text" name="name">
                                </div>
                            </div>

                                
                                </div><!-- col-4 -->

                            </div><!-- row -->

                            <div class="form-group form-layout-footer">
                                <input type="submit" class="btn btn-info mg-r-5" value="Submit Form">
                            </div><!-- form-layout-footer -->
                        </form>
                    </div><!-- form-layout -->
                </div><!-- card -->

                <!-- row -->

                <!-- card -->

                <!-- sl-pagebody -->
                @include('admin.include.footer')
            </div>
            @endsection
