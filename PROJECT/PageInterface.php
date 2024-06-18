<?php
interface PageInterface {
    public function sendMailContactForm();

    public function registerUser();
    public function loginUser();
    public function resetPasswordUser();
    public function logoutUser();

    public function loginZookeeper();
    public function resetPasswordZookeeper();

    public function displayCart();
    public function addToCart($product_id);
    public function removeFromCart($product_id);
    public function clearCart();
    public function checkoutCart();
    public function sendConfirmationMailCheckout();

    public function calculatePrice($product_id, $ticketPrice);
    public function calculateTotalValue();

    public function updateAnimalCategoriesDatabase();
    public function getNumberOfSpecies();
    public function getNumberOfSpecimens();

    public function showAnimalCategoriesTable();
    public function listAllSpecies();
    public function listAllSpecimen($url_id);

    public function addSpecies(); //TODO
    public function editSpecies(); //TODO
    public function deleteSpecies(); //TODO

    public function addAnimal(); //TODO
    public function editAnimal(); //TODO
    public function deleteAnimal(); //TODO

}