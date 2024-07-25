<html>
  <body>
    <?php if($_SERVER['REQUEST_METHOD'] == "POST"){ ?>
      <h1>Upload File</h1>
      <table>
        <tr>
          <td>File Name</td>
          <td><?= $file_name ?></td>
        </tr>
        <tr>
          <td>File Type</td>
          <td><?= $file_type ?></td>
        </tr>
        <tr>
          <td>File Size</td>
          <td><?= $file_size ?></td>
        </tr>
        <tr>
          <td>File Tmp Name</td>
          <td><?= $file_tmp_name ?></td>
        </tr>
        <tr>
          <td>File Error</td>
          <td><?= $file_error ?></td>
        </tr>
      </table>
    <?php } ?>
    <h1>Form Upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <label>
        <input type="file" name="upload_file">
      </label>
      <input type="submit" value="Upload">
    </form>
  </body>
</html>
