<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Hello, world!</title>
    <style>
      body {
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        font-family: "Mulish", sans-serif;
      }

      #formy {
        width: 50%;
      }

      @media screen and (max-width: 900px) {
        body {
          /* background-color: lightblue; */
        }
        #formy {
          width: 75%;
        }

        .box {
          width: 900px;
        }
      }
    </style>
  </head>
  <body>
    <section>
      <div class="container">
      
        <form action="" method="POST" id="formy" class="mx-auto my-5 box w-100">
          <!-- <div class="bg-danger w-100 p-3 text-white"></div> -->
          <h1 class="text-center font-weight-bold pt-2 text-primary">
            Check for a Palindrome ✌
          </h1>

          <hr class="w-50 mx-auto " />
          <h4 class="mb-3 text-success">

            <?php

              if(isset($_POST['submit'])){

                $message=$_POST['message'];

                $reverse=strrev($message);

                if($message===$reverse){
                  echo  "Yes, it's a Palindrome";
                }else{
                  echo "No $message is not a Palindrome";
                }

              }


            ?>



          </h4>

          <div class="form-group">
            <textarea
              name="message"
              id="message"
              cols="40"
              rows="7"
              class="p-2 w-100"
              required
            ></textarea>
          </div>
          <div class="form-group ml-2">
            <p></p>
          </div>
          <button
            type="submit"
            name="submit"
            class="btn btn-outline-success w-50"
          >
            Check
          </button>
        </form>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
