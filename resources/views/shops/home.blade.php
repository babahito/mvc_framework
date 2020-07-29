ログイン後表示（shop側）
<form method="POST" action="{{route('shop.logout')}}">
@csrf
    <button type="submit">logout</button>
</form>