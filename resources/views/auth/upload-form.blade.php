@extends('layouts.master')

@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <!-- Your existing code for profile statistics cards -->

                    <!-- Image Upload Form -->
                    <div class="col-12">
                        <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <h1><strong>Image Upload</strong></h1>

                            <div class="form-group">
                                <label for="title">Title <span>Enter Description</span></label>
                                <input type="text" name="title" id="title" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="caption">Caption <span>Enter Latitudes and Longitudes</span></label>
                                <input type="text" name="caption" id="caption" class="form-control" />
                            </div>

                            <div class="form-group file-area">
                                <label for="images">Images</label>
                                <input type="file" name="images[]" id="images" required="required" multiple="multiple" />
                                <div class="file-dummy"></div>
                            </div>

                            <div class="form-group">
                                <button type="submit">Upload Images</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
