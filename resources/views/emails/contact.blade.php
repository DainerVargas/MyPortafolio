<x-mail::message>
    # Has recibido un nuevo mensaje de contacto

    **Nombre:** {{ $name }}

    **Email:** {{ $email }}

    **Mensaje:**
    {{ $message }}

    Gracias,<br>
    {{ config('app.name') }}
</x-mail::message>
