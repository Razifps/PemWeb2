<form method="post" action="<?= site_url('provinsi/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" />
      </td>
    </tr>
    <td>Wilayah : </td>
      <td>
        <select  name="wilayah" >
          <option type = "radio" value="WIB"<?php if($data['wilayah']  == 'WIB'):?> checked="checked" <?php endif; ?> >WIB </option> 
          <option type = "radio" value="WIT"<?php if($data['wilayah']  == 'WIT'):?> checked="checked" <?php endif; ?> >WIT </option> 
          <option type = "radio" value="WITA"<?php if($data['wilayah']  == 'WITA'):?> checked="checked" <?php endif; ?> >WITA </option> 
          <option type = "radio" value="WIU"<?php if($data['wilayah']  == 'WIU'):?> checked="checked" <?php endif; ?> >WIU </option> 
        </select>
      </td>
	<tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('provinsi/delete/'.$data['id']) ?>" onclick="return confirm('Yakin nih?')" >Delete</a>
      </td>
    </tr>
  </table>
</form>