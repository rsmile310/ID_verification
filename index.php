<html>
  <head>
    <title>ID verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body class="px-3 py-5">
    <section class="main-container px-4 py-3">
      <form id="imgForm">
        <!-- identity section -->
        <div class="mb-4">
          <div class="title-box mb-4">
            <img src="assets/images/id_icon.png" alt="">
            <h3>Identity Certificate</h3>
          </div>
          <div class="drop-container flex-column flex-md-row">
            <div class="mr-0 mr-md-4 mb-3">
              <div class="drop-zone drop-box0">
                <span class="drop-zone__prompt active">Drop photo here or click to upload</span>
                <input
                  type="file"
                  name="image1"
                  id="image1"
                  accept="image/*"
                  class="drop-zone__input drop-zone__input0"
                  />
              </div>
              <button type="button" class="close-btn">×</button>
              <h5 class="text-center">Front</h5>
            </div>

            <div class="ml-0 ml-md-4 mb-3" >
              <div class="drop-zone drop-box1">
                <span class="drop-zone__prompt active"
                  >Drop photo here or click to upload</span
                >
                <input
                  type="file"
                  name="image2"
                  id="image2"
                  accept="image/*"
                  class="drop-zone__input drop-zone__input1"
                />
              </div>
              <button type="button" class="close-btn">×</button>
              <h5 class="text-center">Back</h5>
            </div>
          </div>
        </div>
        
        <!-- card section -->
        <div class="mb-4">
          <div class="title-box mb-4">
            <img src="assets/images/card_icon.png" alt="">
            <h3 class="my-auto">Credit Card Certificate</h3>
          </div>
          <div class="drop-container flex-column flex-md-row">
            <div class="mr-0 mr-md-4 mb-3">
              <div class="drop-zone drop-box2">
                <span class="drop-zone__prompt active">Drop photo here or click to upload</span>
                <input
                  type="file"
                  name="image3"
                  id="image3"
                  accept="image/*"
                  class="drop-zone__input drop-zone__input0"
                  />
              </div>
              <button type="button" class="close-btn">×</button>
              <h5 class="text-center">Front</h5>
            </div>

            <div class="ml-0 ml-md-4 mb-3" >
              <div class="drop-zone drop-box3">
                <span class="drop-zone__prompt active"
                  >Drop photo here or click to upload</span
                >
                <input
                  type="file"
                  name="image4"
                  id="image4"
                  accept="image/*"
                  class="drop-zone__input drop-zone__input1"
                />
              </div>
              <button type="button" class="close-btn">×</button>
              <h5 class="text-center">Back</h5>
            </div>
          </div>
        </div>
        
        <!-- billing statement box -->
        <div class="d-flex">
          <div class="title-box mb-4">
            <img src="assets/images/bill_icon.png" alt="">
            <h3 class="my-auto">Billing Statement</h3>
          </div>
          <div class="ml-4">
            <span id="filename">Select your file</span>
            <label for="file-upload">
              Browse<input type="file" name="file-upload" id="file-upload">
            </label>
          </div>
          
        </div>
        <div class="">
          <p class="warn-text active">Please add all data!</p>
        </div>
        <!-- button box -->
        <div class="d-flex btn-box mt-4 justify-content-center flex-wrap">

          <div class="form-group mx-2">
            <input
              type="button"
              name="resetBtn"
              id="resetBtn"
              value="Reset"
            />
          </div>
          <div class="form-group mx-2">
            <input
              type="submit"
              name="submitBtn"
              id="submitBtn"
              value="Submit"
            />
          </div>
        </div>
        
      </form>
    </section>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>



