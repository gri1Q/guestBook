
<form action="{{route('create.guestbook')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Введите ваше имя</label>
        <input name="name" type="text" class="form-control @error('name')is-invalid @enderror" value="{{old('name')}}">
        @error('name')
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Отзыв</label>
        <textarea name="feedback" class="form-control @error('feedback')is-invalid @enderror">{{old('feedback')}}</textarea>
        @error('feedback')
        <div class="invalid-feedback">
            {{ $errors->first('feedback') }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Оставить отзыв</button>
</form>
