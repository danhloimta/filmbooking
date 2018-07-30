@extends('page.layout.main')
@section('content')
<div id="UserPage">
    <div class="container">
        <div class="user-box">
            <div class="row">
                <div class="col-12 col-md-2">
                    <div class="user-menu">
                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="account-tab" data-toggle="tab" href="#accountTab" role="tab" aria-controls="account" aria-selected="true">{{ __('userPage.accInfo') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="film-tab" data-toggle="tab" href="#filmTab" role="tab" aria-controls="film" aria-selected="false">{{ __('userPage.journey') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-10">
                    <div class="tab-content">
                        <div class="tab-pane active" id="accountTab" role="tabpanel" aria-labelledby="account-tab">
                            {!! Form::open(['url' => '#', 'files' => true]) !!}
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <div class="user-image">

                                        <div class="form-group">
                                            <img src="img/user/avatarDefault.png" alt="avatar">
                                        </div>
                                        <div class="custom-file">
                                            {!! Form::file('avatar', ['class' => 'custom-file-input', 'id' => 'customFile']) !!}
                                            {!! Form::label('customFile', 'Chọn ảnh', ['class' => 'custom-file-label']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-9">
                                    <div class="user-info">
                                        <p class="txt-hello">{{ __('userPage.hello') }},
                                            <span>Thanh Phan</span>
                                        </p>
                                        <p class="txt-description">{{ __('userPage.note') }}</p>

                                        <div class="form-group row">
                                            {!! Form::label('email', 'Email', ['class' => 'col-3 mt-2']) !!}
                                            {!! Form::text('email', 'thanhpv958@gmail.com', ['class' => 'form-control col-9', 'readonly' => '']) !!}
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('name', __('userPage.name') , ['class' => 'col-3 mt-2']) !!}
                                            {!! Form::text('name', 'Phan Văn Thanh', ['class' => 'form-control col-9', 'placeholder' => __('userPage.name')]) !!}
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('phone', __('userPage.phone'), ['class' => 'col-3 mt-2']) !!}
                                            {!! Form::text('phone', '0964766751', ['class' => 'form-control col-9', 'placeholder' => __('userPage.phone')]) !!}
                                        </div>
                                        <div class="form-check mt-4 mb-2">
                                            {!! Form::checkbox('pass', 'value', false, ['class' => 'form-check-input', 'id' => 'ChangePassCheck']); !!}
                                            {!! Form::label('ChangePassCheck', __('userPage.changePass'), ['class' => 'form-check-label']) !!}
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('pass', __('userPage.pass'), ['class' => 'col-3 mt-2']) !!}
                                            {!! Form::text('passs', '', ['class' => 'form-control col-9 passsword', 'placeholder' => __('userPage.pass'), 'disabled' => '']) !!}
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('repass', __('userPage.repass'), ['class' => 'col-3 mt-2']) !!}
                                            {!! Form::text('repass', '', ['class' => 'form-control col-9 passsword', 'placeholder' => __('userPage.repass'), 'disabled' => '']) !!}
                                        </div>
                                    </div>
                                    {!! Form::submit(__('userPage.updateInfo'), ['class' => 'btn btn-primary mt-2']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>

                        <div class="tab-pane" id="filmTab" role="tabpanel" aria-labelledby="film-tab">
                            <div class="user-filmtour table-responsive-md">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>{{ __('userPage.film') }}</th>
                                            <th>{{ __('userPage.theater') }}</th>
                                            <th>{{ __('userPage.calendar') }}</th>
                                            <th>{{ __('userPage.seat') }}</th>
                                            <th>{{ __('userPage.create_at') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        <tr>
                                            <td>1</td>
                                            <td>Siêu thú cuồng nộ</td>
                                            <td>Cyber Khương Đình - Hà Nội</td>
                                            <td>9:00 pm, 17/06/2018</td>
                                            <td>E1, E2, E3</td>
                                            <td>16/06/2018</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function() {
        $('#ChangePassCheck').change( function () {
            if ($(this).is(':checked'))
                $('.passsword').removeAttr('disabled');
            else {
                $('.passsword').attr('disabled', '');
            }
        });
    });

</script>
@endsection
