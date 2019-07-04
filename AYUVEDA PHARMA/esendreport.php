<?php
	include("edashboard.php");
	include("conn.php");
?>
	<div class="form-group col-md-12">
      <label for="inputState">Report ID</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Regional Center</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email Id</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Enter valid email">
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Send</button>
      <button type="reset" class="btn btn-danger">Reset</button>
  </div>
<?php
	include("edashfoot.php");
?>