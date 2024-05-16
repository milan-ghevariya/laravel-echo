<script>
    window.laravel_echo_port='{{env("LARAVEL_ECHO_PORT")}}';
</script>
<script src="//{{ Request::getHost() }}:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    window.Echo.channel('user-channel')
        .listen('.UserEvent', (data) => {
            console.log('event received');
            console.log(data);
            //$("#notification").append('<div class="alert alert-success">'+i+'.'+data.title+'</div>');
        });
</script>
