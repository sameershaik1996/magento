<?php
namespace microstore\create\Model;
use microstore\create\Api\CreateInterface;
 
class CreateMicro implements CreateInterface
{
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function name() {
        return "Hello, " ."sameer";
    }
}