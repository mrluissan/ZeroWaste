@extends('private.layouts.main')
@section('content')
<div class="container mt-3">
    {{ Breadcrumbs::render('recipe.create') }}
    <h2>Edit @lang('pages.recipe')</h2>
    <div class="container-fluid mt-3 p-0">
        <form action="{{ route('recipes.update', $recipe) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="name">Name of your recipe</label>
                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter name" value="{{ old('name') ?? $recipe->name }}">
                <small id="nameHelp" class="form-text text-muted">
                    This is the name of your recipe.
                </small>

                @if($errors->has('name'))
                <div class="invalid-feedback" role="alert">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="type_ids">What kind of meal is?</label>
                        <select multiple class="form-control{{ $errors->has('type_ids') ? ' is-invalid' : '' }}" name="type_ids[]" id="type_ids" aria-describedby="foodTypeHelp">
                            @php
                            $ids = $foodTypes->pluck('id');
                            @endphp
                            @foreach ($foodTypes as $foodType)
                            <option value="{{ $foodType->id }}" @if(old('type_ids') && array_search($foodType->id, old('type_ids')))
                                {{ 'selected' }}
                                @endif

                                @if(!old('type_ids') && $ids->search($foodType->id))
                                {{ 'selected' }}
                                @endif
                                >
                                {{ $foodType->value }}
                            </option>
                            @endforeach
                        </select>
                        <small id="foodTypeHelp" class="form-text text-muted">
                            Is it dinner? Or is it a delicious dessert? Select multiple types from the list.
                        </small>

                        @if($errors->has('type_ids'))
                        <div class="invalid-feedback">
                            {{ $errors->first('type_ids') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cooking_time">Cooking time? (in minutes)</label>
                        <input class="form-control{{ $errors->has('cooking_time') ? ' is-invalid' : '' }}" type="number" name="cooking_time" id="cooking_time" aria-describedby="cookingTimeHelp" placeholder="50" value="{{ old('cooking_time') ?? $recipe->cooking_time }}">
                        <small id="cookingTimeHelp" class="form-text text-muted">
                            How long do you think this recipe takes to prepare?
                        </small>

                        @if($errors->has('cooking_time'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cooking_time') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="country_code">Origin of your recipe</label>
                        <select class="form-control{{ $errors->has('country_code') ? ' is-invalid' : ''}}" name="country_code" id="country_code" aria-describedby="countryCodeHelp">
                            @foreach ($countries as $country)
                            <option value="{{ $country->code }}" {{ $country->code === old('country_code') ? 'selected' : $recipe->country_code === $country->code ? 'selected' : '' }}>{{ __("countries.{$country->code}") }}</option>
                            @endforeach
                        </select>
                        <small id="countryCodeHelp" class="form-text text-muted">
                            Select the origin of your recipe.
                        </small>

                        @if($errors->has('country_code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('country_code') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-8">
                    @if($recipe->hasImages())
                        <script>
                            var imagesData = @json($recipe->getImages());
                        </script>
                    @else
                        <script>
                            var imagesData = null;
                        </script>
                    @endif
                    <input class="dropzone" type="file" name="images[]" multiple />
                </div>
            </div>
            <div class="form-group">
                <label for="content">Recipe's content</label>
                <textarea class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" id="content">{{ old('content') ?? $recipe->content }}</textarea>
                <small id="contentHelp" class="form-text text-muted">Elaborate on how would you prepare this meal.</small>

                @if($errors->has('content'))
                <div class="invalid-feedback">
                    {{ $errors->first('content') }}
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Edit your recipe</button>
            <a href="{{ route('recipes.index') }}" class="btn btn-link">Cancel</a>
        </form>
    </div>
</div>
@endsection
