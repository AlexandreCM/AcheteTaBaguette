<?php
require_once($_SERVER['CONFIGURATION_COMMUN']);
require_once(CHEMIN_RACINE_COMMUN . "/accesseur/AccesseurProduit.php");

function afficherSideBarUtilisateur($page = null) {
    if(!is_object($page)) $page = (object)[];

    $BDD = new AccesseurProduit();
    $produit = $BDD->getProduitParId($page->idProduit);
    print_r($produit);

    ?>

    <div class="content">

        <!-- Ligne image et produit description -->
        <div class="row">

            <!-- colonne imageProduit -->
            <div class="col-md-6">
                <img
                        src="..\achetetabaguette_fr - publique\illustration\baguette.jpg"
                        alt="produit"
                        class="img-fluid imageProduit"
                />
            </div>

            <!-- colonne information produit -->
            <div class="col-md-6">

                <!-- Ligne Titre produit -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="nomProduit">Du pain</h1>
                    </div>
                </div>

                <!-- Ligne description produit -->
                <div class="row">
                    <div class="col-md-12">
                        <span class="typeProduit label-primary">Pain</span>
                        <span class="idProduit">No. 1960140180</span>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiumdod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiumdod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>

                <!-- Prix du produit -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="product-price">
                            <span class="unitePrixProduit">CDN$</span>
                            <span class="prixProduit label-primary">2.50</span>
                        </h2>
                        <hr>
                    </div>
                </div>

                <!-- Ajout au panier -->
                <div class="row align-items-center add-to-cart">

                    <!-- choix quantite et stock -->
                    <div class="col-md-5 product-qty quantite">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <button type="button" class="btn btn-outline-secondary btn-number"  data-type="minus" data-field="quant[1]">-</button>
                                    <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]">+</button>
                                </div>
                            </div>
                        </div>

                        <!-- stock -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <span class="badge badge-success stockProduit">En stock</span>
                                <!-- <span class="badge badge-danger stockProduit">Pas de stock</span> -->
                            </div>
                        </div>
                    </div>

                    <!-- bouton ajout panier -->
                    <div class="col-md-7">
                        <!-- <a href="#" class="btn btn-lg btn-primary">Ajouter au panier</a> -->
                        <button class="btn btn-lg btn-primary boutonAjouterPanier">Ajouter au panier</button>
                    </div>
                </div>

            </div><!-- fin colonne description produit -->
        </div><!-- fin ligne image produit et description -->

        <!-- Ligne produit similaire -->
        <div class="row">
            <div class="col-md-12">

                <!-- Titre produit similaire -->
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <h3 class="titreLigneProduitSimilaire">Produit similaire</h3>
                    </div>
                </div>

                <!-- liste produit similaire -->
                <div class="row">

                    <!-- TODO boucle de 6 articles -->
                    <!-- Image et titre d'un produit similaire -->
                    <div class="col-md-2 border">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <img
                                            class="img-fluid imageProduit"
                                            src="..\achetetabaguette_fr - publique\illustration\baguette.jpg"
                                            alt="produit"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="nomProduit"><strong>Du pain griller au feu de bois</strong></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <span class="unitePrixProduit">CDN$</span>
                                    <span class="prixProduit label-primary">2.50</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Image et titre d'un produit similaire -->
                    <div class="col-md-2 border">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <img
                                            class="img-fluid imageProduit"
                                            src="..\achetetabaguette_fr - publique\illustration\baguette.jpg"
                                            alt="produit"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="nomProduit"><strong>Du pain griller au feu de bois</strong></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <span class="unitePrixProduit">CDN$</span>
                                    <span class="prixProduit label-primary">2.50</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Image et titre d'un produit similaire -->
                    <div class="col-md-2 border">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <img
                                            class="img-fluid imageProduit"
                                            src="..\achetetabaguette_fr - publique\illustration\baguette.jpg"
                                            alt="produit"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="nomProduit"><strong>Du pain griller au feu de bois</strong></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <span class="unitePrixProduit">CDN$</span>
                                    <span class="prixProduit label-primary">2.50</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Image et titre d'un produit similaire -->
                    <div class="col-md-2 border">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <img
                                            class="img-fluid imageProduit"
                                            src="..\achetetabaguette_fr - publique\illustration\baguette.jpg"
                                            alt="produit"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="nomProduit"><strong>Du pain griller au feu de bois</strong></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <span class="unitePrixProduit">CDN$</span>
                                    <span class="prixProduit label-primary">2.50</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Image et titre d'un produit similaire -->
                    <div class="col-md-2 border">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <img
                                            class="img-fluid imageProduit"
                                            src="..\achetetabaguette_fr - publique\illustration\baguette.jpg"
                                            alt="produit"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="nomProduit"><strong>Du pain griller au feu de bois</strong></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <span class="unitePrixProduit">CDN$</span>
                                    <span class="prixProduit label-primary">2.50</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Image et titre d'un produit similaire -->
                    <div class="col-md-2 border">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <img
                                            class="img-fluid imageProduit"
                                            src="..\achetetabaguette_fr - publique\illustration\baguette.jpg"
                                            alt="produit"
                                    />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="nomProduit"><strong>Du pain griller au feu de bois</strong></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <span class="unitePrixProduit">CDN$</span>
                                    <span class="prixProduit label-primary">2.50</span>
                                </div>
                            </div>
                        </a>
                    </div>


                </div><!-- Fin liste produit similaire -->

            </div>
        </div><!-- Fin ligne produit similaire -->

    </div>

    <?php
}
