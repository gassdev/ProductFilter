<?php
namespace App\Data;

class SearchData
{
    /**
     * q
     *
     * @var string
     */
    public $q = '';

    /**
     * categories
     *
     * @var array
     */
    public $categories = [];

    /**
     * @var null|integer
     */
    public $max;

    /**
     * @var null|integer
     */
    public $min;

    /**
     * @var boolean
     */
    public $promo = false;
}
