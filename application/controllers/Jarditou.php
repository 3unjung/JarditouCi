<?php
/* 
    * nomdedomaine.controller/methode/paramètre..
    http://localhost/jarditouCi/index.php/jarditou/produits
*/

class Jarditou extends CI_Controller{

    public function produits() { // methode pour afficher tous les produits   
        $results = $this->db->query("SELECT * FROM produits"); // création d'une requète sql
        $produit  = $results->result(); // récupère toutes les données de la tabble produits 
        $aView["liste_produits"]  = $produit; // prépare les résultats sous forme de tableau
        $this->load->view("header"); // affiche la view de l'header
        $this->load->view("tableau", $aView); // affiche la view des produits
        $this->load->view("footer"); // affiche la view du footer

    }

    public function accueil() { // méthode accueil
        $this->load->view("header"); // affiche la view de l'header
        $this->load->view("index"); // affiche la view de le la page d'accueil
        $this->load->view("footer"); // affiche la view du footer

    }     

    
    public function details() { // méthode pour les détails du produit
        $pro_id = $_GET["pro_id"]; // récupère l'id du produit depuis l'url
        $detailsProduit = $this->db->query("SELECT * FROM produits WHERE pro_id=" .$pro_id); // création d'une requète sql
        $details = $detailsProduit->result(); // récupère toute les les données du produit
        $aView["description"]  = $details; // prépare le résultat dans un tableau
        $this->load->view("header"); // affiche la view de l'header
        $this->load->view("details", $aView); // affiche la view des détails du produit
        $this->load->view("footer"); // affiche la view du footeer

    }

    public function g($pro_id) { // methode pour mettre à jour un produit, codeigneter ne fait pas de dinstinction avec $_POST, $_GET et récupère lui même l'id dans l'url

        if($this->input->post()) {  // si les nouvelles informations sont post

            $newinfo = $this->input->post(); // récupère les nouvelles informations
            $this->db->where('pro_id', $pro_id); // recherche l'identifiant de l'url correspondant dans la base de donnée
            $this->db->update('produits', $newinfo); // met à jour les informations
            redirect('jarditou/produits'); // redirige vers la liste des produits
        }
        else { 
            $getProduct = $this->db->query("SELECT * FROM produits WHERE pro_id=" .$pro_id);
            $produit_id= $getProduct->row();
            $view["row"]  = $produit_id;
            $requete = $this->db->query("SELECT * FROM categories"); // création d'une requète sql 
            $requeteGet = $requete->result(); // récupère toutes les catégories
            $aView["categories"] = $requeteGet; // prépare les résultats dans un tableau
            $this->load->view("header"); // affiche la view de l'header
            $this->load->view("update", $view+$aView); // affiche la view du formulaire de mise à jour + celui du champs de selection des catégories
            $this->load->view("footer"); // affiche la view du footer
        }
    }

    public function supprimer($pro_id) { // méthode pour supprimer un produit passé en argument
        $this->db->where("pro_id", $pro_id); // trouve l'identifiant du produit  par rapport à son id récupéré dans l'url
        $this->db->delete("produits"); // supprime le produit de la base de donnée
        redirect('jarditou/produits'); // redirige vers la liste des produtis

    }

    public function ajout() { // méthode pour ajouter un produit
        if($this->input->post()) { // si les informations sont post
            $data = $this->input->post(); // récupère les informations envoyésse { 
            $this->load->view("ajout");
            $this->db->insert("produits", $data); // insère dans la base de données les informations envoyés
            redirect("jarditou/produits"); // redigire vers la liste des produits
        }
          
        else {
            $requete = $this->db->query("SELECT * FROM categories"); // création d'une requète sql
            $requeteGet = $requete->result(); // récupères toutes les catégories
            $aView["categories"] = $requeteGet; // prépare les résultats dans un tableau
            $this->load->view("header"); // affiche la view de l'header
            $this->load->view("ajout", $aView); // affiche le formulaire d'ajout de produit
            $this->load->view("footer"); // affiche la view du footer

        }
    }
    
}   


?>


