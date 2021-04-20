<aside class="sidebar">
  <?php include ("View/busqueda.php"); ?>
</aside>
<article class="main">

  <div class="publicacion_nueva">
    <h1 class="n">Nueva Publicación</h1>
    <br>
    <form id="f-n-p" action="?c=Controller_create_publication" method="POST">
      <br>
      <div class="row g-3 a">
        <div class="col">
          <label id="l-titulo" for="">Titulo:</label>
          <input id="titulo" name="title" type="text" class="form-control" placeholder="Titulo" required>
        </div>
        <div class="col">
          <label id="l-fecha" for="">Fecha:</label>
          <input id="fecha" name="fecha" type="date" class="form-control" placeholder="Fecha" required>
        </div>
      </div>

      <div class="row g-3 a">
        <div class="col">
          <label id="l-titulo" for="">Subir Archivo:</label>
          <input id="titulo" name="multimedia" type="file" class="form-control">
        </div>
        <div class="col">
          <label id="l-fecha"  for="fk_id_category">Categoria:</label>
          <select id="fecha" name="fk_id_category" class="form-select" >
            <?php // include 'Controller/Controller_read_categories.php' ?>
            <?php // foreach ($rows_categorie as $row) { ?>
            <option values="<?php // echo $row->id_category  ?>"><?php // echo $row->name_category  ?></option>
            <?php // } ?>
          </select>
        </div>
      </div>

      <label id="l-descripcion" for="description">Descripción:</label>
      <textarea name="description" id="descripcion" cols="67" rows="5"></textarea>

      <button type="submit" class="btn btn-primary btn-publicar">Publicar</button>

    </form>
  </div>
</article>