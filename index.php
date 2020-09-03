<!DOCTYPE html>
<html>
  <head>
     <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src *"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class = "container" style="margin-bottom: 20px;">
      <div ckass = "row">
        <div class = "col-xs-6">
          <form class = "form-horizontal"
          id="frmVoucher"
          method="post"
          action="voucherGen.php">
          <h1> Build a content-warning</h1>
          <div class = "form-group">
            <input
            type="text"
            name="siteLink"
            class="form-control"
            placeholder="https://your-link-here">
          </div>
          <div class = "form-group">
            <input
            type="text"
            name="userDescription"
            class="form-control"
            placeholder="write a link description here (optional)">
          </div>
          <div class = "form-group">
            <input
            type="text"
            name="inHeadline"
            class="form-control"
            value="WARNING, this page may contain NSFW content">
          </div>
          <div class = "form-group">
            <textarea
            name="inOpening"
            class="form-control"
            style="min-height: 130px;">You must be 18+ to view this page. Would you like to continue?</textarea>
          </div>
          <button
            type="submit"
            class= "btn btn-success">
               BUILD IT
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
