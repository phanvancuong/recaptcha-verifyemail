@if (count($errors) >0) 
<ul>
  @foreach ($errors->all() as $error)
  <li>{!! $error !!}</li>
  @endforeach
</ul>
@endif
<form enctype="multipart/form-data" action="{!! route('postdangky') !!}" method="POST" name="frmThem">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <table>
      <tr>
        <td>mon hoc</td>
        <td><input type="text" name="txtMonHoc">
            {!! $errors->first('txtMonHoc') !!}
        </td>
      </tr>
      <tr>
        <td>gia tien</td>
        <td><input type="text" name="txtgiatien">
            {!! $errors->first('txtgiatien') !!}
        </td>
      </tr>
      <tr>
        <td>hinhanh</td>
        <td><input type="file" name="fImages">
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="btngui" value="them"></td>
      </tr>
  </table>
  
</form>