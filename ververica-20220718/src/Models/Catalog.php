<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Catalog extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $properties;
    protected $_name = [
        'name'       => 'name',
        'properties' => 'properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Catalog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }

        return $model;
    }
}
