<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>{{ $data['user'][1] }} - METAPHYSIIICS CONSULTANCY PLT</title>
  
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
      .bz-row {
          margin-top: 5px;
          margin-bottom: 5px;
      }
      
      .bz-card .card {
          border-radius: 0;
          margin: 2px;
          border-color: #98b819;
      }
      
      .bz-card .card .card-header {
          border-radius: 0;
          background-color: #98b819;
          color: white;
          font-weight: bold;
          padding-top: 0;
          padding-bottom: 0;
      }
      
      .bz-card .card .bz-title {
          color: #98b819;
      }
      
      .bz-card .card .bz-header {
          background-color: #98b819;
          color: white;
      }
      
      .bz-card .card th,
      .bz-card .card td {
          border: 1px solid rgba(0, 0, 0, 0.125);
          border-collapse: collapse;
          width: 20%;
      }
      
      .bz-card .card th:first-child,
      .bz-card .card td:first-child,
      .bz-card .card th:last-child,
      .bz-card .card td:last-child {
          border-left: none;
      }
      
      .bz-btn {
          border-radius: 0;
          background-color: #98b819;
      }
    </style>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>
  
  <body>
    <div class="bz-card">
      <div class="card">
        <img class="card-img-top px-5 pt-0" src="{{ public_path('images/logo.png') }}" alt="Card image cap">
        <div class="card-body">
        </div>
      </div>
    </div>
  </body>
</html>