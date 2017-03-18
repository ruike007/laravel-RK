<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        {!! Form::open(['url'=>'/articles']) !!}
            {!! Form::label('名称',null,['id'=>'name']) !!}
            {!! Form::text('name') !!}
            {!! Form::submit('提交',['class'=>"btn btn-primary"]) !!}
        {!! Form::close() !!}
    </body>
</html>
