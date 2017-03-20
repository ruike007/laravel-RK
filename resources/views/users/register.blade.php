@extends('app')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-6 col-md-offset-3" role="main">
                 @if($errors->any())
                         <ul class="list-group">
                             @foreach($errors->all() as $error)
                                 <li class="list-group-item list-group-item-danger"> {{ $error }} </li>
                             @endforeach
                         </ul>
                 @endif
                 {!! Form::open(['url'=>'/user/register']) !!}
                     <!--- Name Field --->
                     <div class="form-group">
                         {!! Form::label('name','用户名:') !!}
                         {!! Form::text('name',null,['class'=>'form-control']) !!}
                     </div>
                    <!--- email Field --->
                    <div class="form-group">
                        {!! Form::label('email','邮箱:') !!}
                        {!! Form::email('email',null,['class'=>'form-control']) !!}
                    </div>
                    <!--- ppassword Field --->
                    <div class="form-group">
                        {!! Form::label('password','密码:') !!}
                        {!! Form::password('password',['class'=>'form-control']) !!}
                    </div>
                    <!--- password_confirmation Field --->
                    <div class="form-group">
                        {!! Form::label('password_confirmation','密码确认:') !!}
                        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
                    </div>
                    <!--- submit Field --->
                    {!! Form::submit('马上注册',['class'=>'btn btn-primary form-control']) !!}

                 {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop