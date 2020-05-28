@extends('admin.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            انواع الاصناف
            <small>تعديل نوع</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li><a href="#">انواع الاصناف</a></li>
            <li class="active">تعديل نوع</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">تعديل نوع </h3>
                        <a href="{{route('getAdminCategoryTypes')}}" class="btn btn-success">عرض الانواع</a>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {{Form::open(['route' => ['postAdminUpdateCategoryType' , $type->id] , 'method' => 'post' , 'role' => 'form' , 'class' => 'form-horizontal'])}}
                    <div class="box-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="col-sm-2 control-label">اسم النوع</label>
                            <div class="col-sm-10">
                                <input type="text" required name="name" value="{{$type->name}}" class="form-control"
                                       placeholder="اسم النوع ...">
                                @if($errors->has('name'))
                                    <div class="label label-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">تعديل الصنف</button>
                    </div>
                    {{Form::close()}}
                </div><!-- /.box -->
            </div>
        </div>   <!-- /.row -->
    </section><!-- /.content -->
@endsection
