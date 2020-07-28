<!-- @extends('layouts.app')
@section('title','ユーザー情報')
@section('content')

<div class="card" style="width: 18rem;">
    @if(!empty($authUser->thumbnail))
    <img src="/storage/user/{{ $authUser->thumbnail }}" class="thumbnail"><br>
    @else
    画像なし
    @endif
    <hr color="black">
    <div class="card-body">
        <h5 class="card-title">{{ $authUser->name }}</h5>
        <a href="{{ route('user.userEdit') }}" class="btn btn-primary btn-sm">編集</a>
    </div>
</div>


@endsection -->