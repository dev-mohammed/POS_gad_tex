@extends('admin.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            انواع الاصناف
            <small> عرض الكل </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li><a href="#">انواع الاصناف</a></li>
            <li class="active">عرض الكل</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">انواع الاصناف</h3>
                        <a href="{{route('getAdminCreateCategoryType')}}" class="btn btn-success">اضافة نوع جديد</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>الرقم</th>
                                <th>النوع</th>
                                <th>خيارات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryTypes as $type)
                                <tr>
                                    <td>{{$type->id}}</td>
                                    <td>{{$type->name}}</td>
                                    <td><a href="{{route('getAdminEditCategoryType' , $type->id)}}"
                                           class="btn btn-success">تعديل</a>
                                        <a href="" class="btn btn-danger">حذف</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>الرقم</th>
                                <th>النوع</th>
                                <th>خيارات</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                    {{$categoryTypes->links()}}
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->


@endsection
