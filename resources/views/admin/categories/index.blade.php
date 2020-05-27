@extends('admin.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            الاصناف
            <small> عرض الكل </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li><a href="#"> الاصناف</a></li>
            <li class="active">عرض الكل</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> الاصناف</h3>
                        <a href="{{route('getAdminCreateCategories')}}" class="btn btn-success">اضافة صنف جديد</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>رقم الصنف</th>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>النوع</th>
                                <th>الكمية</th>
                                <th>خيارات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>قطيفة</td>
                                <td>قطيفة</td>
                                <td>قطيفة</td>
                                <td>قطيفة</td>
                                <td>
                                    <a href="" class="btn btn-primary">التفاصيل</a>
                                    <a href="" class="btn btn-success">تعديل</a>
                                    <a href="" class="btn btn-danger">حذف</a>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>رقم الصنف</th>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>النوع</th>
                                <th>الكمية</th>
                                <th>خيارات</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->


@endsection
