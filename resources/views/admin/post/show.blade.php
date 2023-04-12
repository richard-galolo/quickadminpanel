@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.post.title_singular') }}:
                    {{ trans('cruds.post.fields.id') }}
                    {{ $post->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.id') }}
                            </th>
                            <td>
                                {{ $post->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.post_title') }}
                            </th>
                            <td>
                                {{ $post->post_title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.post.fields.post_description') }}
                            </th>
                            <td>
                                {{ $post->post_description }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('post_edit')
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection