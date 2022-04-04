<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('departmentslist') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Here you can see all the avaliable departments:
                    <a href="/breez-test/public/departmentslist" class="btn btn-info" role="button">Deprtments List</a>
                     <hr>
                     <br>
                     @php($count=1)
                     <table class="table table-hover table-primary ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Department Name</th>
                            <th scope="col">Department ID</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($department as $dpt)
                          <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $dpt['dptname'] }}</td>
                            <td>{{ $dpt['dptid'] }}</td>                       
                          </tr>
                          @php($count++)
                          @endforeach 
                        </tbody>
                      </table>
                      <br><hr><br>
                      



                        {{-- Simplified explanation on how to import and loop 
                             @foreach ($department as $dpt)
                        <tr>
                            <td>{{ $dpt['dptname'] }}</td>
                            <td>{{ $dpt['dptid'] }}</td>
                        </tr>       
                        @endforeach
                     --}}
                    
                 
                   


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
