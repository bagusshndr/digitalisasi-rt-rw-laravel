@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.sdm_category.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.sdm_category.fields.category_name') }}
                    </th>
                    <td>
                        {{ $sdm_category->category_name }}
                    </td>
                </tr>
              
            </tbody>
        </table>
    </div>
</div>

@endsection