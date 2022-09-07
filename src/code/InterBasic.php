<?php

namespace app\code;

class InterBasic extends Basic implements BasicInterface
{
    public function __construct(string $name, string $structure, string $compilation)
    {
        parent::__construct($name,$structure,$compilation);
    }


    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "Class InterBasic";
    }
}