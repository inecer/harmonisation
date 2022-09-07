<?php

namespace app\code;

class Basic
{
    public String $name; //Peut etre utilisé avec les autres classe
    private String $structure; //Utilisable seulement par la classe
    protected String $compilation;

    /**
     * @return mixed
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * @param mixed $structure
     * @return Basic
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompilation()
    {
        return $this->compilation;
    }

    /**
     * @param mixed $compilation
     * @return Basic
     */
    public function setCompilation($compilation)
    {
        $this->compilation = $compilation;
        return $this;
    } //Seulement les enfants de la classe peuvent y accédée


}