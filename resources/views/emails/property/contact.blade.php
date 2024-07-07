<x-mail::message>
# Demande de contact

Demande concernant le bien : <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property])}}">{{ $property->title }}</a>.

- Prénom : {{ $data['firstname'] }}
- Nom : {{ $data['lastname'] }}
- Téléphone : {{ $data['phone'] }}
- E-mail : {{ $data['email'] }}

**Message :**<br/>
{{ $data['message']}}
</x-mail::message>
