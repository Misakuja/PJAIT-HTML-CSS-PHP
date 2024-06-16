<?php
interface PageInterface {
    public function sendMail();
    public function registerUser();
    public function loginUser();
    public function resetPasswordUser();
    public function logoutUser();
    public function loginZookeeper();
    public function resetPasswordZookeeper();
}