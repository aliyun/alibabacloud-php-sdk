<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class Domain extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string[][]
     */
    public $functions;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'category'  => 'category',
        'functions' => 'functions',
        'name'      => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->functions) {
            $res['functions'] = $this->functions;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['functions'])) {
            $model->functions = $map['functions'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
