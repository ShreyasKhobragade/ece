<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176052227-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-176052227-1');
    </script>


    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(function () {
      $('[data-toggle="popover"]').popover({html:true})
    })
    </script>

    <style>
    body{
      background-color: rgba(20, 20, 40, 0.2);
    }

    #headTitle{
      font-size: 150%;
        margin-bottom: 3%;
    }
    #upperNav{
      margin-bottom: 3%;
    }

    table{
      margin: 50px 0;
    }

    .urgent{
      color: indianred;
    }

    .notUrgent{
      font-size: 10px;
    }

    .margin50{
      margin: 50px 0;
    }

    .paddingZero{
      padding: 0;
    }

    .rotate{
      transform: rotate(-90deg);
      -webkit-transform: rotate(-90deg);
      -moz-transform: rotate(-90deg);
      -ms-transform: rotate(-90deg);
      -o-transform: rotate(-90deg);
      filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
    }

    #lambaCell{
      padding-top: 84px;
    }

    .lookLink{
      color: #007BFF;
    }

    .looklink :hover{
        color: #007BFF;
        text-decoration: underline;
    }

    .list-group-item{
      background-color: rgba(20, 20, 40, 0)
    }

    #listHead{
      font-size: 150%;
    }

    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Time Table</title>

  </head>

  <body>

    <div id="header"></div>

    <div class="container-fluid paddingZero">
      <div class="text-center">
        <span id="headTitle"><strong>Schedule</strong></span>
      </div>
      <div class="table-responsive">
        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8 paddingZero text-center">
          <table class="table table-borderless table-hover text-center table-sm">
            <thead class="thead-dark">
              <tr>
                <th class="table-dark" scope="col"></th>
                <th class="table-dark" scope="col">9-10</th>
                <th class="table-dark" scope="col">10-11</th>
                <th class="table-dark" scope="col">11-12</th>
                <th class="table-dark" scope="col">12-13</th>
                <th class="table-dark" scope="col">13-14</th>
                <th class="table-dark" scope="col">14-15</th>
                <th class="table-dark" scope="col">15-16</th>
              </tr>
            </thead>
            <tbody>

              <!-- Monday -->
              <tr>
                <th class="table-dark" scope="column">
                  Mon
                </th>

                <!-- 9-10 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">
                    A
                  </a>
                </td>

                <!-- 10-11 -->
                <td class="table-primary">
                  <a href="https://vnit.webex.com/meet/ankitbhurane" target="_blank">
                    ES
                  </a>
                </td>

                <!-- 11-12 -->
                <td class="table-success">
                  <a href="https://vnit.webex.com/vnit/j.php?MTID=m9df8cf3aa8403de21161a9ff8b66e10a" target="_blank">
                    CE
                  </a>
                </td>

                <!-- 12-13 -->
                <td class="table-danger">
                  <a class= "lookLink" data-container="body" data-toggle="popover" data-placement="bottom" data-content="
                    <div>
                      <a href='https://vnit.webex.com/meet/adhocstaff12' target='_blank'>
                        CAO
                      </a>
                    </div>
                    <div>
                      <a href='https://vnit.webex.com/vnit/j.php?MTID=m072a09b4b7b9c3e189c77714064e01c2' target='_blank'>
                        ESD
                      </a>
                    </div>">
                    DE
                  </a>
                </td>

                <!-- 13-14 -->
                <td class="table-secondary" rowspan="6" id="lambaCell">
                  <a href="https://manjulaskitchen.com/wp-content/uploads/everyday-lunch-menu.jpg" class="text-secondary rotate" target="_blank">
                    Lunch
                  </a>
                </td>

                <!-- 14-15 -->
                <td class="table-warning">
                  <a href="https://vnit.webex.com/vnit/j.php?MTID=m974e420abd2c1ea2cdea116cb32a1f91" target="_blank">
                    W&A
                  </a>
                </td>

                <!-- 15-16 -->
                <td class="table-secondary">
                  <a href="#" target="_blank">

                  </a>
                </td>
              </tr>

              <!-- Tuesday -->
              <tr>
                <th class="table-dark" scope="column">
                  Tue
                </th>

                <!-- 9-10 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">
                    B
                  </a>
                </td>

                <!-- 10-11 -->
                <td class="table-warning">
                  <a href="#" target="_blank">
                    W&A
                  </a>
                </td>

                <!-- 11-12 -->
                <td class="table-info">
                  <a href="#" target="_blank">
                    AC
                  </a>
                </td>

                <!-- 12-13 -->
                <td class="table-light">
                  <a href="https://vnit.webex.com/meet/ksurender" target="_blank">
                    M&I
                  </a>
                </td>

                <!-- 13-14 -->
                <!-- <td class="table-secondary">
                  <a href="#" target="_blank">
                    M&I
                  </a>
                </td> -->

                <!-- 14-15 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">
                    A
                  </a>
                </td>

                <!-- 15-16 -->
                <td class="table-success">
                  <a href="#" target="_blank">
                    CE
                  </a>
                </td>
              </tr>

              <!-- Wednesday -->
              <tr>
                <th class="table-dark" scope="column">
                  Wed
                </th>

                <!-- 9-10 -->
                <!-- <td class="table-danger" colspan="2">
                  <a class= "lookLink" data-container="body" data-toggle="popover" data-placement="top" data-content="
                    <div>
                      <a href='https://vnit.webex.com/meet/adhocstaff12' target='_blank'>
                        CAO (10-11)
                      </a>
                    </div>
                    <div>
                      <a href='#' target='_blank'>
                        ESD (9-10)
                      </a>
                    </div>">
                    DE
                  </a>
                </td> -->
                <td class="table-danger">
                  <a href="#" target="_blank">
                    ESD
                  </a>
                </td>

                <!-- 10-11 -->
                <td class="table-danger">
                  <a href="https://vnit.webex.com/meet/adhocstaff12" target="_blank">
                    CAO
                  </a>
                </td>

                <!-- 11-12 -->
                <td class="table-primary">
                  <a href="https://vnit.webex.com/meet/ankitbhurane" target="_blank">
                    ES
                  </a>
                </td>

                <!-- 12-13 -->
                <td class="table-success">
                  <a href="#" target="_blank">
                    CE
                  </a>
                </td>

                <!-- 13-14 -->
                <!-- <td class="table-secondary">
                  <a href="#" target="_blank">
                    CE
                  </a>
                </td> -->

                <!-- 14-15 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">
                    B
                  </a>
                </td>

                <!-- 15-16 -->
                <td class="table-info">
                  <a href="#" target="_blank">
                    AC
                  </a>
                </td>
              </tr>

              <!-- Thursday -->
              <tr>
                <th class="table-dark" scope="column">
                  Thu
                </th>

                <!-- 9-10 -->
                <td class="table-light">
                  <a href="https://vnit.webex.com/meet/ksurender" target="_blank">
                    M&I
                  </a>
                </td>

                <!-- 10-11 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">
                    B
                  </a>
                </td>

                <!-- 11-12 -->
                <td class="table-warning">
                  <a href="#" target="_blank">
                    W&A
                  </a>
                </td>

                <!-- 12-13 -->
                <td class="table-info">
                  <a href="#" target="_blank">
                    AC
                  </a>
                </td>

                <!-- 13-14 -->
                <!-- <td class="table-secondary">
                  <a href="#">

                  </a>
                </td> -->

                <!-- 14-15 -->
                <td class="table-danger">
                  <a class= "lookLink" data-container="body" data-toggle="popover" data-placement="top" data-content="
                    <div>
                      <a href='https://vnit.webex.com/meet/adhocstaff12' target='_blank'>
                        CAO
                      </a>
                    </div>
                    <div>
                      <a href='#' target='_blank'>
                        ESD
                      </a>
                    </div>">
                    DE
                  </a>
                </td>

                <!-- 15-16 -->
                <td class="table-primary">
                  <a href="https://vnit.webex.com/meet/ankitbhurane" target="_blank">
                    ES
                  </a>
                </td>
              </tr>

              <!-- Friday -->
              <tr>
                <th class="table-dark" scope="column">
                  Fri
                </th>

                <!-- 9-10 -->
                <td class="table-success">
                  <a href="#" target="_blank">
                    CE
                  </a>
                </td>

                <!-- 10-11 -->
                <td class="table-danger">
                  <a class= "lookLink" data-container="body" data-toggle="popover" data-placement="top" data-content="
                    <div>
                      <a href='https://vnit.webex.com/meet/adhocstaff12' target='_blank'>
                        CAO
                      </a>
                    </div>
                    <div>
                      <a href='#' target='_blank'>
                        ESD
                      </a>
                    </div>">
                    DE
                  </a>
                </td>

                <!-- 11-12 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">
                    A
                  </a>
                </td>

                <!-- 12-13 -->
                <td class="table-primary">
                  <a href="https://vnit.webex.com/meet/ankitbhurane" target="_blank">
                    ES
                  </a>
                </td>

                <!-- 13-14 -->
                <!-- <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">

                  </a>
                </td> -->

                <!-- 14-15 -->
                <td class="table-light">
                  <a href="https://vnit.webex.com/meet/ksurender" target="_blank">
                    M&I
                  </a>
                </td>

                <!-- 15-16 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">

                  </a>
                </td>
              </tr>

              <!-- Saturday -->
              <tr>
                <th class="table-dark" scope="column">
                  Sat
                </th>

                <!-- 9-10 -->
                <td class="table-info">
                  <a href="#" target="_blank">
                    AC
                  </a>
                </td>

                <!-- 10-11 -->
                <td class="table-light">
                  <a href="https://vnit.webex.com/meet/ksurender" target="_blank">
                    M&I
                  </a>
                </td>

                <!-- 11-12 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">
                    B
                  </a>
                </td>

                <!-- 12-13 -->
                <td class="table-warning">
                  <a href="#" target="_blank">
                    W&A
                  </a>
                </td>

                <!-- 13-14 -->
                <!-- <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">

                  </a>
                </td> -->

                <!-- 14-15 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">

                  </a>
                </td>

                <!-- 15-16 -->
                <td class="table-secondary">
                  <a href="#" class="text-secondary" target="_blank">

                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Notices -->
      <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8 paddingZero">
        <h6>Notices</h6>
        <ul>
          <!-- <li class="text-danger">CAO Cancelled.</li> -->
          <li><a href="https://forms.gle/A7AR9Fjyt5nyMb369">Course ADD/DROP procedure has begun. Contact FA. Due 24th August.</a></li>
          <li><a href="https://vnit.gnomio.com/mod/forum/discuss.php?d=1">Embedded Systems Simulator.</a></li>
        </ul>
      </div>
    </div>

    <div id="footer"></div>

    <!-- Counter -->
    <div id="sfca2h9pglsx28tau6n16qnw18u3phcuntl"></div>
    <script type="text/javascript" src="https://counter3.stat.ovh/private/counter.js?c=a2h9pglsx28tau6n16qnw18u3phcuntl&down=async" async></script>
    <noscript>
      <a href="https://www.freecounterstat.com" title="website counter">
        <img src="https://counter3.stat.ovh/private/freecounterstat.php?c=a2h9pglsx28tau6n16qnw18u3phcuntl" border="0" title="website counter" alt="website counter">
      </a>
    </noscript>

  </body>
</html>

<!-- Popper.js  -->
<script type="text/javascript">
  $('#header').load('header.html');
  $('#footer').load('footer.html', function(){
    console.log('it runs');
  });
</script>
