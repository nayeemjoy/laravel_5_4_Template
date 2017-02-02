<!DOCTYPE html>
<html lang="en">

@include('admin.includes.header')
{!! Html::style('plugins/iCheck/square/blue.css') !!}
{!! Html::style('tel/build/css/intlTelInput.css') !!}
{!! Html::style('countryselect/css/countrySelect.css') !!}
{!! Html::style('plugins/datepicker/datepicker3.css') !!}
<style>
.iti-flag {background-image: url("tel/build/img/flags.png");}
</style>

<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <b>Sign Up to {!! Config::get('customConfig.names.siteName')!!}</b>
      </div>
      <div class="register-box-body">
        <!-- <p class="login-box-msg">Register a new membership</p> -->
        @include('admin.includes.alert')
        {!! Form::open(array('route' => 'register.store', 'method' => 'post')) !!}
          <div class="form-group has-feedback">
            {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Full Name')) !!}
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

         

          <!-- hidden feild by deafault  -->
          <div class="form-group has-feedback">
            {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus')) !!}
            <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
          </div>

         
          <!-- hidden feild by deafault end -->

          <div class="form-group has-feedback">
            {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
            <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
          </div>
          <div class="form-group has-feedback">
            {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) !!}
            <!-- <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
          </div>

      

          <div class="form-group has-feedback">
            {!! Form::checkbox('agree', 'yes', array('class' => 'form-control form-group')) !!}
            I agree to terms and policy
            <!-- <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
          </div>


        <div class="form-group">
            {!! Form::submit('Sign Up', array('class' => 'btn btn-primary btn-block btn-flat', 'type'=>'submit')) !!}
        </div>

        {!! Form::close() !!}


        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->








<!-- js placed at the end of the document so the pages load faster -->

    {!! HTML::script('plugins/iCheck/icheck.min.js') !!}
        <!--common script for all pages-->
    {!! Html::script('plugins/jQuery/jQuery-2.1.4.min.js') !!}
    <!-- Bootstrap 3.3.5 -->
    {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
    <!-- FastClick -->
    {!! Html::script('plugins/fastclick/fastclick.min.js') !!}
    <!-- AdminLTE App -->
    {!! Html::script('dist/js/app.min.js') !!}
    <!-- Sparkline -->
    {!! Html::script('plugins/sparkline/jquery.sparkline.min.js') !!}
    <!-- jvectormap -->
    {!! Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
    {!! Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
    <!-- SlimScroll 1.3.0 -->
    {!! Html::script('plugins/slimScroll/jquery.slimscroll.min.js') !!}
    <!-- ChartJS 1.0.1 -->
    {!! Html::script('plugins/chartjs/Chart.min.js') !!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!! Html::script('dist/js/pages/dashboard2.js') !!}
    <!-- AdminLTE for demo purposes -->
    {!! Html::script('dist/js/demo.js') !!}

    {!! Html::script('tel/build/js/intlTelInput.js') !!}

    {!! Html::script('countryselect/js/countrySelect.min.js') !!}
    {!! Html::script('plugins/datepicker/bootstrap-datepicker.js') !!}

    <script>
    if($("#email1").is(':checked')) {
      $('#inpmail').toggle();
    } else if($("#phone1").is(':checked')){
      $('#inpphone').toggle();
    }
      $("#country").countrySelect();

      // $("#tel").intlTelInput({
      //     utilsScript: "tel/build/js/utils.js" // just for formatting/placeholders etc
      // });

      // get the country data from the plugin
    var countryData = $.fn.intlTelInput.getCountryData(),
      telInput = $("#tel"),

      addressDropdown = $("#country");

    // init plugin
    $.each(countryData, function(i, country) {
      country.name = country.name.replace(/.+\((.+)\)/,"$1");
    });
    telInput.intlTelInput({
      utilsScript: "tel/build/js/utils.js",
      autoHideDialCode: false,
      autoPlaceholder: false,// just for formatting/placeholders etc
    });

    // populate the country dropdown
    // $.each(countryData, function(i, country) {
    //   addressDropdown.append($("<option></option>").attr("value", country.iso2).text(country.name));
    // });
    // // set it's initial value
    // var initialCountry = telInput.intlTelInput("getSelectedCountryData").iso2;
    // addressDropdown.val(initialCountry);

    // // listen to the telephone input for changes
    // telInput.on("countrychange", function(e, countryData) {
    //   addressDropdown.val(countryData.iso2);
    // });

    // // listen to the address dropdown for changes
    // addressDropdown.change(function() {
    //   telInput.intlTelInput("setCountry", $(this).val());
    // });

      // select login type 
    $("#phone1").click(function(){
        // alert("The phone was clicked.");
        // $( this ).after( "<p>The phone was clicked.</p>" );
        // $(#inputmail).html("Hello <b>world!</b>");
        $('#inpphone').toggle();
        $('#inpmail').hide();

    });
    $("#email1").click(function(){
        // alert("The email was clicked.");
        $('#inpmail').toggle();
        $('#inpphone').hide();
        // $( this ).after( "<p>The email was clicked.</p>" );
    });

    
          $("#birthday").datepicker({
              format: 'yyyy-mm-dd',
              endDate: '+0d',
              autoclose: true 
          });
            // $( "#birthday" ).datepicker( "setDate", new Date() ); 


    </script>
</body>
</html>
