<div class="row" style="margin-top:20px;">
              <div class="col-md-12">
                <div class="content-with-shadow">
                      <h1>HI! <?php echo strtoupper($userSession[0]["email"]); ?></h1>
                  </div>
              </div>
            </div>   
       
       
       <div class="row" style="margin-top:20px;">
         <div class="col-md-12">
          <div class="content-with-shadow">
               <input type="text" class="form-control" id="search-input" placeholder="Search..."> 
                <hr />
                <div id="gridMasterList" class="ag-theme-alpine" style="width: 100%; height: 500px;"></div>
           </div>
          </div>
        </div>