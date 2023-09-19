


<!-- The Modal -->
<div id="CreateEnrollment" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
  <h2>Add Enrollment</h2>
    <form id="statusForm" method="POST"  enctype="multipart/form-data" action="home.php?view=enrollment&action=addenrollment">
    
    <label for="statusSelect">Email:</label>
    <input type="text" id="statusSelect" name="email" />


    <label for="statusSelect">Firstname:</label>
    <input type="text" id="statusSelect" name="fname" />
     
    <label for="statusSelect">Middlename:</label>
    <input type="text" id="statusSelect" name="mname" />

    <label for="statusSelect">Lastname:</label>
    <input type="text" id="statusSelect" name="lname" />
     
    <label for="statusSelect">Date of Birth:</label>
    <input type="date" id="statusSelect" name="dob" />

    <label for="statusSelect">Address:</label>
    <input type="text" id="statusSelect" name="address" />

    <label for="statusSelect">Barangay:</label>
    <input type="text" id="statusSelect" name="barangay" />

    <label for="statusSelect">City:</label>
    <input type="text" id="statusSelect" name="city" />

    <label for="statusSelect">Zip:</label>
    <input type="text" id="statusSelect" name="zip" />
 
    <label for="statusSelect">Enrollment Type:</label>
    <select id="statusSelect" name="enrollment_type">
        <option value="NEW">NEW</option>
        <option value="TRANSFEREE">TRANSFEREE</option>
        <option value="EXISTING">EXISTING</option>
      </select>


      <label for="statusSelect">GWA:</label>
    <input type="text" id="statusSelect" name="gwa" />


    <label for="statusSelect">Grade Level:</label>
    <select id="statusSelect" name="level">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
     
   
      <button type="submit" name="add">REGISTER</button>
    
    </form>
  </div>
</div>


<style>
/* Styles for the form and dropdown */
#statusForm {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

select {
  width: 100%;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

















