@extends('layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Setting</h3>
               
            </div>
            <div class="box-body">
                <form method="post" action="{{ route('set.store') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="form-group{{ $errors->has('SitName') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">SitName <span style="color:red">*</span> </label>
                            <div class="col-md-6">
                                <input type="text" name="SitName" value="{{ old('SitName') }}" class="form-control" placeholder="SitName" required>
                                @if ($errors->has('SitName'))
                                    <span class="help-block">
                                        <strong class="help-block">{{ $errors->first('SitName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        

                     

                        <div class="form-group{{ $errors->has('key') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label"> sit key <span style="color:red">*</span> </label>
                            <div class="col-md-6">
                                <input type="text" name="key" value="{{ old('key') }}" class="form-control" placeholder="key">
                                @if ($errors->has('key'))
                                    <span class="help-block">
                                        <strong class="help-block">{{ $errors->first('key') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">site description <span style="color:red">*</span> </label>
                            <div class="col-md-6">
                                <textarea name="value" class="form-control" placeholder="description" rows="8" cols="80">{{ old('value') }}</textarea>
                                @if ($errors->has('value'))
                                    <span class="help-block">
                                        <strong class="help-block">{{ $errors->first('value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('sit email Address') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">sit email Address <span style="color:red">*</span> </label>
                            <div class="col-md-6">
                                <textarea name="email" class="form-control" placeholder="sit email Address" rows="8" cols="80">{{ old('sit email Address') }}</textarea>
                                @if ($errors->has('sit email Address'))
                                    <span class="help-block">
                                        <strong class="help-block">{{ $errors->first('sit email Address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-primary">Add</button>
                              
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            language: 'en',
        });
    </script>
@endsection
