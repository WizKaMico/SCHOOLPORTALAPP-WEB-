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
                <img src="image/images.jfif" style="width:100%;">
           </div>
          </div>
        </div>

        <div class="row" style="margin-top:20px;">
         <div class="col-md-6">
          <div class="content-with-shadow">
          
            <div class="slideshow-container">
                
                <?php if(!empty($announcementInfor)){ ?>
                <?php foreach ($announcementInfor as $list) {  ?>
                    <div class="mySlides fade">
                    <img src="<?php echo $list['image_path'];  ?>" style="width:100%">
                    <div class="text"><?php echo $list['title'];  ?></div>
                    </div>
                    <?php } ?>
                <?php } ?>


                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                <br>

                <div style="text-align:center">

                <?php if(!empty($announcementInfor)){ ?>
                <?php foreach ($announcementInfor as $list) {  ?>
                    <span class="dot" onclick="currentSlide(<?php echo $list['aid'];  ?>)"></span> 
                    <?php } ?>
                <?php } ?>
             </div>
        

           </div>
          </div>

         <div class="col-md-6">
          <div class="content-with-shadow">
          <div id="calendar"></div>
          </div>
        </div>

        </div>


        <div class="row" style="margin-top:20px;">
         <div class="col-md-12">
          <div class="content-with-shadow">
          <button id="createAnnouncementBtn">CREATE NEW ANNOUNCEMENT</button>
               <!-- Table -->
               <input type="text" class="form-control" id="search-input" placeholder="Search..."> 
                <hr />
               <div id="gridAnnouncement" class="ag-theme-alpine" style="width: 100%; height: 500px;"></div>

           </div>
          </div>
        </div>

        


        <style>/* Slideshow container */
            
            /* Slideshow container */
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            }

            /* Next & previous buttons */
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
            }

            #createAnnouncementBtn {
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            #createAnnouncementBtn:hover {
            background-color: #0056b3;
            }


          
            #calendar {
                width: 50%;
                margin: 0 auto;
            }
        </style>
