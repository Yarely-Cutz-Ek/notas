<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis Notas') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
        <div class="bg-cover bg-center h-full w-full" style="background-image: url('https://th.bing.com/th/id/OIP.nnEgE0i9qS8veXiVY4fHBAAAAA?pid=ImgDet&rs=1')">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/notas/create') }}" class="btn btn-success btn-sm" title="Add New nota">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nueva
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Nota</th>
                                        <th>Palabras importantes</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->titulo }}</td>
                                            <td>{{ $item->nota }}</td>
                                            <td>{{ $item->p_clave }}</td>

                                            <td>
                                                <a href="{{ url('/notas/' . $item->id) }}" title="View nota"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Ver</button></a>
                                                <a href="{{ url('/notas/' . $item->id . '/edit') }}"
                                                    title="Edit nota"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Editar</button></a>

                                                <form method="POST" action="{{ url('/notas' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete nota"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
