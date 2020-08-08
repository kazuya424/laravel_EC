@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Index</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{--成功時のメッセージ--}}
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    {{-- エラーメッセージ --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    // この辺から追加
                    <div class="table-resopnsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('name')}}</th>
                                    <th>{{__('deatail')}}</th>
                                    <th>{{__('fee')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($admins)) // $adminデータ存在チェック
                                @foreach ($admins as $admin) // テーブル作成
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->deatail }}</td>
                                    <td>{{ $admin->fee}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        // この辺まで追加
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection