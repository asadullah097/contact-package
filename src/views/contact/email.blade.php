@component('mail::message')

There is new Query from {{$name}}

Subject : {{$subject}}

Message:{{$message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
