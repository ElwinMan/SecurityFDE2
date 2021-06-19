<h1 class="stopBeingSoDifficult">create new</h1>

<div>
    <p>Alles met een * invullen!</p>
    <form method="POST" action="/articles">
        @csrf

        <label for="Title">* Title:</label><br>
        <input type="text" id="Title" name="title" placeholder="Title" style="height: 42px; width: 50%">

        @error('title')
        <p class="error">{{$errors->first('title')}}</p>
        @enderror
        <br><br>
        <label for="excerpt">* Excerpt:</label><br>
        <textarea cols="2" rows="5" type="text" id="excerpt" name="excerpt" placeholder="short version" style="height: 125px; width: 50%"></textarea>
        @error('excerpt')
        <p class="error">{{$errors->first('excerpt')}}</p>
        @enderror<br><br>
        <label for="body">* Body:</label><br>
        <textarea cols="5" rows="5" type="text" id="body" name="body" placeholder="full version" style="height: 375px; width: 50%"></textarea>
        @error('body')
        <p class="error">{{$errors->first('body')}}</p>
        @enderror<br><br>
        <button type="submit" value="Submit">Submit</button>
    </form>

</div>
