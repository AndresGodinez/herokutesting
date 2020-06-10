@component('mail::message')
    # Introduction

    Escribio: {{ $comment->name }}
    Comment: {{ $comment->comment }}
    Teléfono: {{ $comment->telephone }}
    El: {{ $comment->created_at->format('h:m d-m-Y') }}

    @component('mail::button', ['url' => route('home')])
        Volver
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
