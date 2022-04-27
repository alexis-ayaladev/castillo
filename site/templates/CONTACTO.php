<?php snippet('header') ?>
<section class="container-fluid">
    <div class="row mx-5">
        <div class="col-md-6 col-sm-12">
            <img class="img-contacto" src="<?= $site->url(); ?>/assets/icons/contacto.svg" alt="home img">
        </div>
        <div class="col-md-6 col-sm-12">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="Nombre" class="form-label text-secondary-color">Nombre</label>
                    <input type="text" class="form-control input-contacto" id="Nombre"">
                </div>
                <div class=" mb-3">
                    <label for="Telefono" class="form-label text-secondary-color">Telefono</label>
                    <input type="tel" class="form-control input-contacto " id="Telefono">
                </div>
                <div class=" mb-3">
                    <label for="Email" class="form-label text-secondary-color">Email</label>
                    <input type="email" class="form-control input-contacto" id="Email">
                </div>
                <div class="mb-3">
                    <label for="textArea" class="form-label text-secondary-color">Mensaje</label>
                    <textarea class="form-control textarea-contacto" id="textArea"  rows="3"></textarea>
                </div>
                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-outline-primary primary-button ">Enviar</button>
                </div>
                
            </form>
            <div class="row me-5">
                <p class="text-primary-color subtitulo" ><?= $page->Oficinas() ?></p>
                <div class="col-md-6 col-sm-12">
                    <p class="text-secondary-color" >Guadalajara</p>
                    <p class="text-secondary-color" ><?= $page->UbicacionGDL() ?></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-secondary-color" >Ciudad de México</p>
                    <p class="text-secondary-color" ><?= $page->UbicacionCDMX() ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>