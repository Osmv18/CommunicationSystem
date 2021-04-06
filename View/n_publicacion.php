<div class="publicacion_nueva">
    <h1 class="n">Nueva Publicación</h1>
    <br>
    <form id="f-n-p" action="#" method="post">
    <br>
        <div class="row g-3 a">
            <div class="col">
                <label id="l-titulo" for="">Titulo:</label>
                <input id="titulo" type="text" class="form-control" placeholder="Titulo" aria-label="First name" required>
            </div>
            <div class="col">
                <label id="l-fecha" for="">Fecha:</label>
                <input id="fecha" type="date" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>

        <div class="row g-3 a">
            <div class="col">
                <label id="l-titulo" for="">Subir Archivo:</label>
                <input id="titulo" type="file" class="form-control">
            </div>
            <div class="col">
                <label id="l-fecha" for="">Categoria:</label>
                <select id="fecha" class="form-select" aria-label="Default select example" >
                    <option selected="....."></option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <label id="l-descripcion" for="">Descripción:</label>
        <textarea name="descripcion" id="descripcion" cols="67" rows="5"></textarea>

        <button type="submit" class="btn btn-primary btn-publicar">Publicar</button>

    </form>
</div>