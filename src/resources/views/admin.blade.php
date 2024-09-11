<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body>
    <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
      <div class="logout__button">
       <button class="logout__button-submit" type="submit" href="/">logout</button>
      </div>

    </div>
  </header>

<div class="admin__content">
      <div class="admin__heading">
        <h2>Admin</h2>
      </div>

    <form class="form"  action="/contacts" method="post">
        @csrf

        <div class="admin-table">
            <table class="admin-table__inner">

<!--名前・メールアドレス入力フォーム-->
           <div class="form__group">
            <div class="form__group-content">
             <div class="form__input--text">
              <input class="name-email" type="text" name="'name', 'email'" placeholder="名前やメールアドレスを入力してください" value="{{ old('name','email') }}" />
             </div>
            </div>
           </div>

<!--性別選択-->
           <div class="form__group">
            <div class="form__group-content">
             <select class="gender-select" name="gender" id="" placeholder="性別">
              <option value="">性別</option>
              <option value="male">男性</option>
              <option value="female">女性</option>
             </select>
             </div>
            </div>
           </div>

<!--お問い合わせの種類-->
           <div class="form__group">
            <div class="form__group-content">
             <select class="detail-select" name="gender" id="">
              <option value="">お問い合わせの種類</option>
              <option value="detail">商品の交換について</option>
             </select>
             </div>
            </div>
           </div>

<!--お問い合わせの種類-->
           <div class="form__group">
            <div class="form__group-content">
             <select class="year-select" name="gender" id="">
              <option value="">年/月/日</option>
             </select>
             </div>
            </div>
           </div>

<!--検索画面-->
      <div class="form__group-content">
        <div class="form__button">
          <button class="form__button-submit-1" type="submit">検索</button>
        </div>
      </div>

<!--検索画面-->
       <div class="form__group-content">
        <div class="form__button">
          <button class="form__button-submit-2" type="submit">リセット</button>
        </div>

            </table>
        </div>
       </div>
    </form>

   
    <div class="admin__export">
      <button class="export__button-submit-1" type="submit" href="/">エクスポート</button>

<!--データテーブル-->
<div class="data-table">
  <div class="table__inner">
    <div class="data-table"> 
<table>
  <tr>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>お問い合わせの種類</th>
  </tr>
  @foreach ($contacts as $contact)
  <tr>
    <td>{{$contact->name}}</td>
    <td>{{$contact->gender}}</td>
    <td>{{$contact->email}}</td>
    <td>{{$contact->detail}}</td>
  </tr>
  @endforeach
</table>
</div> 
  </div>
</div>

   </div>


</body>