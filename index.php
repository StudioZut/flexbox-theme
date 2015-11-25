<!DOCTYPE html>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" >
  <title>Flexbox Test for Libsite Design</title>

  <style>
    body { 
      margin: 0;
      font-family: helvetica, arial, sans-serif;
    }

    p { font-weight: 300; margin-top: 0.5em; }

    .container {
      display: flex;
      width: 100%;
      flex-flow: row wrap;
    }
    .container > * {
      padding: 10px;
      flex: 1 100%;
      /* height: 90px; */
    }
    .item-1 {background: tomato; height:30px;}
    .item-2 {background: skyblue; height:90px; } 
    .item-3 {display: none; background: orange; }

    @media all and (min-width: 600px) {
      /*.item { flex: 1 auto; }*/
      .item-1 { flex: 1; height: 90px; }
      .item-2 { flex: 3 auto; height: 90px; }
      .item-3 { flex: 1; }
    }

    @media all and (min-width: 800px) {
      .item-3 { display: block; }
    }

    .page-bound-container {
      margin: 0 auto;
      max-width: 1024px;
    }

    .navigation {
      list-style: none;
      margin: 0; 
      
      background: deepskyblue;
      
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      
      /* -webkit-flex-flow: row wrap; */
      justify-content: flex-end;

      padding-left: 0;
    }

    .navigation a {
      text-decoration: none;
      display: block;
      padding: 1em;
      color: white;
    }

    .navigation a:hover {
      background: skyblue; /* scss darken(deepskyblue, 2%); */
    }

    @media all and (max-width: 800px) {
      .navigation {
        justify-content: space-around;
      }
    }

    @media all and (max-width: 600px) {
      .navigation {
        -webkit-flex-flow: column wrap;
        flex-flow: column wrap;
        padding: 0;
      }

      .navigation a { 
        text-align: center; 
        padding: 10px;
        border-top: 1px solid rgba(255,255,255,0.3); 
        border-bottom: 1px solid rgba(0,0,0,0.1); 
      }

      .navigation li:last-of-type a {
        border-bottom: none;
      }
    }

    .wrapper {
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;  
      
      -webkit-flex-flow: row wrap;
      flex-flow: row wrap;
      
      font-weight: bold;
      text-align: center;
    }

    .wrapper > * {
      padding: 10px;
      flex: 1 100%;
    }

    .header {
      background: tomato;
    }

    .univhead-wrapper {
      width: 100%;
      background: #005581;
    }

    .univhead { padding: 10px; }

    .univfoot-wrapper {
      width: 100%;
      background: #005581;
    }

    .univfoot { padding: 10px; }


    .footer { background: lightgreen; }
    .footer2 { background: skyblue; }

    .main {
      text-align: left;
      background: skyblue;
      min-height: 300px;
    }

    .aside { text-align: left; min-height: 220px; }
    .aside2 { min-height: 130px; }

    .aside-1 {
      background: gold;
    }
    .aside-2 {
      background: hotpink;
    }
    .aside-3 {
      background: orange;
    }
    .aside-4 {
      background: tomato;
    }
    .aside-5 {
      background: red;
    }
    .aside-6 {
      background: green;
    }

    @media all and (min-width: 600px) {
      /*.aside { flex: 1 auto; }*/
      .aside { flex: 1 0px; }
      .aside2 { flex: 1 40%; }
    }

    @media all and (min-width: 800px) {
      .main    { flex: 3 0px; }
      .aside-1 { order: 1; } 
      .main    { order: 2; }
      .aside2  { flex: 1 0px; }
      .aside-2 { order: 3; }
      .aside-3 { order: 4; }
      .aside-4 { order: 5; }
      .aside-5 { order: 6; }
      .aside-6 { order: 7; }
      .hours-nav { display: none; }
    }

    @media all and (min-width: 1040px) {
      .univhead-wrapper { margin-bottom: 2em; }
      .univfoot-wrapper { margin-top: 2em; }
    }

  </style>

</head>

<body>

<header class="univhead-wrapper">
  <div class="univhead">
    <p>university logo and links</p>
  </div>
</header>

<div class="page-bound-container">
  <div class="container">
    <div class="item item-1">
    libraries logo
    </div>
    <div class="item item-2">
    big search box
    </div>
    <div class="item item-3">
    hours box
    </div>
  </div>

  <ul class="navigation">
    <li><a href="#">Research</a></li>
    <li><a href="#">Libraries & Collections</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">About</a></li>
    <li class="hours-nav"><a href="#">Hours</a></li>
  </ul>

  <div class="wrapper">
    <!--<header class="header">Header</header>-->
    <article class="main">
      <p>(main page content) (front page: rotating news banner) Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
    </article>
    <aside class="aside aside-1">
      <p>Aside 1 (optional section menu) (front page: quick links)</p>
    </aside>
    <aside class="aside aside-2">
      <p>Aside 2 (optional right sidebar) (front page: upcoming events)</p>
    </aside>
  </div>

  <div class="wrapper">
    <aside class="aside2 aside-3">
      <p>featurebox 1</p>
    </aside>
    <aside class="aside2 aside-4">
      <p>featurebox 2</p>
    </aside>
    <aside class="aside2 aside-5">
      <p>featurebox 3</p>
    </aside>
    <aside class="aside2 aside-6">
      <p>featurebox 4</p>
    </aside>
  </div>

  <div class="wrapper">
    <footer class="footer">
      <p>MIT style expanded nav and "visitor based" links (and social media)</p>
    </footer>
    <footer class="footer2">
      <p>footer with address and university links<p>
    </footer>
  </div>

</div>

<div class="univfoot-wrapper"> 
  <div class="univfoot">
    <p>university footer</p>
  </div>
</div>

</body>
</html>

