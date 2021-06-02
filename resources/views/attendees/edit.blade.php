<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('attendees.update', $attendee->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                          <label for="name" class="form-label">Naam</label>
                          <input type="name" name="name" class="form-control" id="name" aria-describedby="name" value="{{$attendee->name}}">
                          <div id="name" class="form-text">Jou naam blijf altijd prive verborgen.</div>
                        </div>
                        <div class="mb-3">
                          <label for="phone_number" class="form-label">Telefoon Nummer</label>
                          <input type="phone_number" name="phone_number" class="form-control" id="phone_number" value="{{$attendee->phone_number}}">
                        </div>
                        <div class="mb-3">
                            <label for="school" class="form-label">School selecteren</label>
                            <select id="school" name="school" class="form-select">
                                @foreach ($schools as $school)
                                    <option value="{{$school->id}}" {{$attendee->school_id == $school->id ? 'selected' : ''}}>{{$school->name}}</option>                                    
                                @endforeach
                            </select>
                          </div>
                        <button type="submit" class="btn btn-success">Aanpassen</button>
                        <a href="{{route('attendees.index')}}" class="btn btn-warning">Annuleer</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
