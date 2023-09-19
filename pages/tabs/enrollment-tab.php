               <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Tab1')">ENROLLEES</button>
                <button class="tablinks" onclick="openTab(event, 'Tab2')">SECTION LEGEND</button>
                </div>

                <div id="Tab1" class="tabcontent">
                <input type="text" class="form-control" id="search-input" placeholder="Search..."> 
                    <hr />
                <div id="gridEnrollment" class="ag-theme-alpine" style="width: 100%; height: 500px;"></div>
             
                </div>

                <div id="Tab2" class="tabcontent">
                <div id="gridSectionChecker" class="ag-theme-alpine" style="width: 100%; height: 500px;"></div>
                </div>