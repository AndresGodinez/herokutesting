<div class="container">
    <div class="row">
        <div class="col col-8">
            <form action="{{ route('comment.store') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control"
                        >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telephone">Teléfono</label>
                        <input
                            type="number"
                            name="telephone"
                            id="telephone"
                            class="form-control"
                        >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="comment">Comentario</label>
                        <textarea name="comment" id="comment" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="for-row">
                    <div class="form-group col-md-6">
                        <input type="submit" value="Enviar" class="btn btn-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
