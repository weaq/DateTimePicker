<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQuery Datetimepicker</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/jquery-ui-timepicker-addon.min.css" />

</head>
<body>
    <p>Date: <input type="text" id="datepicker" value="2011-10-10 00:00"></p>
    <p>วันเกิด: <input type="text" id="birthday" value="1980-08-26"></p>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery-ui-timepicker-addon.min.js"></script>
    <script>
    jQuery(function($) {
      $("#datepicker").datetimepicker({ // change datepicker to only date
          dateFormat: 'yy-mm-dd',
          timeFormat: 'HH:mm',
          changeMonth:false,
          changeYear:false,
          dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
          dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
          monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
          monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']
      });

      $("#birthday").datepicker({ // change datepicker to only date
          dateFormat: 'yy-mm-dd',
          changeMonth:true,
          changeYear:true,
          yearRange: "-100:+0", // last hundred years
          dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
          dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
          monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
          monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']
      });

    });
  </script>
</body>
</html>
