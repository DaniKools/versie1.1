<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Deelnemers
        </h2>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Deelnemers Overzicht</h3>
                    <a href="{{route('attendees.create')}}" class="btn btn-success">Voeg deelnemer toe</a>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Naam</th>
                            <th scope="col">Telefoon Nummer</th>
                            <th scope="col">School</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendees as $attendee)   
                                                
                                <tr>
                                    <th scope="row">{{$attendee->id}}</th>
                                    <td><a href="{{route('attendees.edit', $attendee)}}">{{$attendee->name}}</a></td>
                                    <td>{{$attendee->phone_number}}</td>
                                    <td>{{$attendee->school->name}}</td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                      </table>
                      {{$attendees->links()}}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>