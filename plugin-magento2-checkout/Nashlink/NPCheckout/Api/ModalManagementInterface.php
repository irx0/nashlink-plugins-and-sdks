<?php


namespace Nashlink\NPCheckout\Api;

interface ModalManagementInterface
{

    /**
     * POST for modal api
     * @param string $param
     * @return string
     */
    public function postModal();
}
