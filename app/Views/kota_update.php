<form method="post" action="<?= site_url('kota/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Provinsi</td>
      <td>
          <?php foreach($data_provinsi as $provinsi):?>
          <?php if($provinsi['id'] == $data['provinsi_id']):?>
           <input type="radio" name="provinsi_id" value="<?= $provinsi['id'] ?>" checked /><?= $provinsi['nama'] ?> <br>  </input>
          <?php else:?>
           <input type="radio" name="provinsi_id" value="<?= $provinsi['id'] ?>" /><?= $provinsi['nama'] ?> <br> 
          <?php endif?>
          <?php endforeach?>
      </td>
    </tr>
    <tr>
      <td>Kota</td>
      <td>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('kota/delete/'.$data['id']) ?>"onclick="return confirm('Yakin nih mau diapus?')">Delete</a>
      </td>
    </tr>
  </table>
</form>