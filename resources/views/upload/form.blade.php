<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
        <input type="file" name="arquivo">
        <button type="submit">Enviar arquivo</button>
</form>

