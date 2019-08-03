

<h3>
The View
</h3>


{{ Form::open(array('route' => 'crtest')) }}
    //

   <?=   Form::text('username'); ?> 

   <?=  Form::submit('Click Me!'); ?>
{{ Form::close() }}


