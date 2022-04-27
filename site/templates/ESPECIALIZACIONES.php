<?php snippet('header') ?>

<article class="container">
    <div class="row my-5">
        <div class="col-md-8 col-sm-12 my-5">
            <div class="slide-spec">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="fe-text">
                        <p class="text-primary-color font-42" ><?= $page->fe() ?></p>
                        <p class="text-secondary-color" > <?= $page->fetext() ?></p>
                    </div>
                    <div class="fe-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/fe.svg" alt="Fé publica">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="val-text">
                        <p class="text-primary-color font-42" ><?= $page->val() ?></p>
                        <p class="text-secondary-color" ><?= $page->valtext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="val-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/val.svg" alt="Valuación">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="soc-text">
                        <p class="text-primary-color font-42" ><?= $page->soc() ?></p>
                        <p class="text-secondary-color" ><?= $page->soctext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="soc-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/sociedades.svg" alt="Sociedades">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="pla-text">
                        <p class="text-primary-color font-42" ><?= $page->soc() ?></p>
                        <p class="text-secondary-color" ><?= $page->soctext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="pla-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/planeacion.svg" alt="Planeación Fiscal y Patrimonial">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="pro-text">
                        <p class="text-primary-color font-42" ><?= $page->pro() ?></p>
                        <p class="text-secondary-color" ><?= $page->protext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="pro-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/propiedas.svg" alt="Propiedad Intelectual">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="inm-text">
                        <p class="text-primary-color font-42" ><?= $page->inm() ?></p>
                        <p class="text-secondary-color" ><?= $page->inmtext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="pro-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/Inmobiliario.svg" alt="Inmobiliario">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="fin-text">
                        <p class="text-primary-color font-42" ><?= $page->fin() ?></p>
                        <p class="text-secondary-color" ><?= $page->fintext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="pro-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/financiero.svg" alt="Financiero, Bancario y Bursátil">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="inv-text">
                        <p class="text-primary-color font-42" ><?= $page->inv() ?></p>
                        <p class="text-secondary-color" ><?= $page->invtext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="pro-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/inversion.svg" alt="Inversión Extranjera">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="inv-text">
                        <p class="text-primary-color font-42" ><?= $page->civ() ?></p>
                        <p class="text-secondary-color" ><?= $page->civtext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="pro-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/civil.svg" alt="Civil, Mercantil y Amparo">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="inv-text">
                        <p class="text-primary-color font-42" ><?= $page->lab() ?></p>
                        <p class="text-secondary-color" ><?= $page->labtext() ?></p>
                        <a class="btn btn-outline-primary primary-button" href="/">Ver más</a>
                    </div>
                    <div class="pro-img mx-3">
                        <img src="<?= $site->url(); ?>/assets/icons/laboral.svg" alt="Laboral / Migratorio">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="nav-spec">
                <a class="text-color my-1"><?=$page->fe() ?></a>
                <a class="text-color my-1"><?= $page->val() ?></a>
                <a class="text-color my-1"><?= $page->soc() ?></a>
                <a class="text-color my-1"><?= $page->pla() ?></a>
                <a class="text-color my-1"><?= $page->pro() ?></a>
                <a class="text-color my-1"><?= $page->inm() ?></a>
                <a class="text-color my-1"><?= $page->fin() ?></a>
                <a class="text-color my-1"><?= $page->inv() ?></a>
                <a class="text-color my-1"><?= $page->civ() ?></a>
                <a class="text-color my-1"><?= $page->lab() ?></a>
            </div>
        </div>
    </div>
</article>

<?php snippet('footer') ?>