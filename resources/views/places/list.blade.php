@extends ('layout.console')

@section ('content')

<section class="w3-padding ca-container-large">

    @include ('layout.title', ['title' => 'Manage Places'])

    @include ('layout.breadcrumbs', ['title' => 'Manage Places'])

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-dark-grey">
            <th class="ca-col-icon"></th>
            <th class="ca-col-image"></th>
            <th>Title</th>
            <th class="ca-col-icon"></th>
            <th class="ca-col-icon"></th>
        </tr>
        <?php foreach($places as $place): ?>
            <tr>
                <td>
                    {{$place->id}}
                </td>
                <td>
                    @include ('layout.maps.static', ['grid' => $place->grid(), 'building' => $place->id])
                </td>
                <td>
                    {{$place->title}}
                    <br>
                    <small>
                        Building: {{$place->building->title}}
                        <br>
                        Dimensions: {{$place->width}} x {{$place->height}}
                    </small>
                </td>
                <td>
                    <a href="/buildings/edit/{{$building->id}}">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="/buildings/delete/{{$building->id}}">
                        <i class="fas fa-trash-alt mute"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    @include ('layout.forms.button', ['label' => 'Add Place', 'href' => '/places/add'])

</section>

@endsection
