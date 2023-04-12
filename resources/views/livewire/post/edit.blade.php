<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('post.post_title') ? 'invalid' : '' }}">
        <label class="form-label" for="post_title">{{ trans('cruds.post.fields.post_title') }}</label>
        <input class="form-control" type="text" name="post_title" id="post_title" wire:model.defer="post.post_title">
        <div class="validation-message">
            {{ $errors->first('post.post_title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.post_title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('post.post_description') ? 'invalid' : '' }}">
        <label class="form-label" for="post_description">{{ trans('cruds.post.fields.post_description') }}</label>
        <input class="form-control" type="text" name="post_description" id="post_description" wire:model.defer="post.post_description">
        <div class="validation-message">
            {{ $errors->first('post.post_description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.post.fields.post_description_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>