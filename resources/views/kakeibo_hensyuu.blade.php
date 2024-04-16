@extends('layouts.input_screen')

@section('title','家計簿編集')

@section('h1','家計簿編集')

@section('家計簿データ登録')
<ul class="">
  <form method="post"  name="sousin"   action="{{url('edit_screen_post_kakeibo',[$id])}}">
  {{ csrf_field() }}
    <p>
      <input class="col-sm-2 col-form-label" type="text" name="product_name" placeholder="{{$naiyou}}" value=""  required>
    </p>
    
    
    <p id="input_form1">
         <input class="col-sm-2 col-form-label" type="tel" name="amount1" placeholder="{{$sisyutu}}" value="" >
    </p>

    <p id="input_form2">
         <input class="col-sm-2 col-form-label" type="tel" name="amount2" placeholder="{{$syunyuu}}" value="" >
    </p>

    <p>
    <label> <input class="/col-sm-2 col-form-label" type ="radio" name="syusi"  value=""  onclick="entryChange1();" checked="checked" >支出</label>
    <label> <input class="/col-sm-2 col-form-label" type ="radio" name="syusi"    value="" onclick="entryChange1();" >収入</label>
    </p>

    <p>
      <input class="col-sm-2 col-form-label" type ="datetime-local" step="1" name="Registration_date" placeholder="" value=""   required></textarea>
    </p>
    <p>
      <input class="btn btn-secondary" type="submit" value="登録">
  </p>
  </ul>
</form> 



@endsection
   