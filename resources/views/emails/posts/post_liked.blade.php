@component('mail::message')
# Your post was liked

x liked one of your posts

The body of your message.

@component('mail::button', ['url' => ''])
    View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
