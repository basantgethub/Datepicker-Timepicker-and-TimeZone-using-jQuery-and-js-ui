<html>
	<title>Datepicker ,Timepicker and TimeZone using jQuery and js ui</title>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="Stylesheet" href="//ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/themes/redmond/jquery-ui.css" />
        <script src="//ajax.aspnetcdn.com/ajax/jquery/jquery-1.8.0.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.8.22/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="time/wickedpicker.css" media="all"/>
         <script src="time/wickedpicker.js"></script>
        <script>
            $(document).ready(function(){
                $(".datepicker").each(function(){
                    $(this).datepicker({
                                showOtherMonths:true,
                                dateFormat: 'yy-mm-dd' 
                        });
                });
                
                function formatDate(d) {
                    var dd = d.getDate()
                    if ( dd < 10 ) dd = '0' + dd

                    var mm = d.getMonth()+1
                    if ( mm < 10 ) mm = '0' + mm

                    var yy = d.getFullYear() % 100
                    if ( yy < 1000 ) yy = '20' + yy

                    return yy+'-'+mm+'-'+dd
                }

                function formatTime(t) {
                    var hh = t.getHours()
                    if ( hh < 10 ) hh = '0' + hh

                    var mm = t.getMinutes()+1
                    if ( mm < 10 ) mm = '0' + mm

                    return hh+':'+mm
                }
                
                $('.timepicker-two').wickedpicker({twentyFour: true});
               
            });
        </script>  
    </head> 
    <body style="background-color: #fff;">
        <h3 style="margin-top: 40px;"><span style="font-size:16px; color:red;">Datepicker ,Timepicker and TimeZone using jQuery and js ui</span></h3>

	   <div class="row">

            <div class="col-md-6" style="padding-left:46px;">
                <form class="form" action = "" ENCTYPE="multipart/form-data" METHOD=POST>


                    <div class="form-group">
                        <label>Time Zone </label>
                        <div>
                            <span class="ui-select">
                                <select name="timeZone" id="timeZone">
                                    <option  value="-43200">(GMT -12:00) Eniwetok, Kwajalein</option>
                                    <option  value="-39600">(GMT -11:00) Midway Island, Samoa</option>
                                    <option  value="-36000">(GMT -10:00) Hawaii</option>
                                    <option  value="-32400">(GMT -9:00) Alaska</option>
                                    <option  value="-28800">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                    <option  value="-25200">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                    <option  value="-21600">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                    <option  value="-18000">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                    <option  value="-14400">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                    <option  value="-12600">(GMT -3:30) Newfoundland</option>
                                    <option  value="-10800">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                    <option value="-7200">(GMT -2:00) Mid-Atlantic</option>
                                    <option  value="-3600">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
                                    <option  value="0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                    <option  value="3600">(GMT +1:00 hour) Berlin, Copenhagen, Madrid, Paris</option>
                                    <option  value="7200">(GMT +2:00) Kaliningrad, South Africa</option>
                                    <option  value="10800">(GMT +3:00) Baghdad, Riyadh, St. Petersburg</option>
                                    <option  value="12600">(GMT +3:30) Tehran</option>
                                    <option  value="14400">(GMT +4:00) Moscow, Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                    <option  value="16200">(GMT +4:30) Kabul</option>
                                    <option  value="18000">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                    <option  value="19800">(GMT +5:30) Mumbai, Kolkata, Chennai, New Delhi</option>
                                    <option  value="20700">(GMT +5:45) Kathmandu</option>
                                    <option  value="21600">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                    <option  value="25200">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                    <option  value="28800">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                    <option  value="32400">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                    <option  value="34200">(GMT +9:30) Adelaide, Darwin</option>
                                    <option  value="36000">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                    <option  value="39600">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                    <option  value="43200">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Schedule Time </label>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Date <i class="fa fa-calendar"></i></span>
                                    <input class="form-control datepicker" required type="text" name="scheduleDate" value = ""/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class='input-group date' id='datetimepicker3'>
                                    <span class="input-group-addon">Time </span>
                                    <input class="form-control timepicker-two" required id="timepicker-two" name="scheduleTime" placeholder="" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>
