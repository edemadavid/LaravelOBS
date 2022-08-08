@component("mail::message")

# welcome!! {{ $name }}





@component('mail::button', ['url' => '#'])
button Text
@endcomponent

@component('mail::panel')
button Text
@endcomponent


## Table component:

@component('mail::table')
| Tables   |      Are      |  Cool |
|----------|:-------------:|------:|
| col 1 is |  left-aligned | $1600 |
| col 2 is |    centered   |   $12 |
| col 3 is | right-aligned |    $1 |
@endcomponent


@component('mail::subcopy')
This is a subcopy component
@endcomponent



@endcomponent

