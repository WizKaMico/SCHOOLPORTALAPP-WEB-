


<!-- The Modal -->
<div id="UpdateLostContent" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
  <h2>UPDATE LOST ITEM</h2>
    <form id="statusForm" method="POST" enctype="multipart/form-data" action="home.php?view=lost&action=updatelostInformation">
    <input type="hidden" id="fidInput" name="fid" readonly>
    <label for="statusSelect">Item:</label>
    <input type="text" id="itemInput" name="item" />
     
    <label for="statusSelect">Found By:</label>
    <input type="text" id="foundInput" name="foundby" />

    <label for="statusSelect">Found In:</label>
    <input type="text" id="foundInInput" name="foundin" />
     

   
      <button type="submit" name="update">CREATE LOSTITEM</button>
    
    </form>
  </div>
</div>


<style>
/* Styles for the form and dropdown */
select {
  width: 100%;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}



#statusForm {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],input[type="date"],input[type="file"] {
  width: 100%;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button[type="submit"] {
    width: 100%;
  margin-top: 10px;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}


/* Styles for the modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

/* Styles for the modal content */
.modal-content {
  background-color: #fff;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-55%, -55%);
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  width: 80%;
  max-width: 400px;
}

/* Close button for the modal */
.close {
  color: #aaa;
  float: right;
  font-size: 20px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>

















