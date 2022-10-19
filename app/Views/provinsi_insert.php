<form method="post" action="<?= site_url('provinsi/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama : </td>
      <td>
        <input type="text" name="nama" value="" />                            
      </td>
    </tr>
    <tr>
  <td>Wilayah : </td>
      <td>
        <select name="wilayah" >
          <option value="WIB">WIB </option> 
          <option value="WIT">WIT </option> 
          <option value="WITA">WITA </option> 
          <option value="WIU">WIU </option> 
        </select>
      </td>
  </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
      </td>
    </tr>
  </table>
</form>