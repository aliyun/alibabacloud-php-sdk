<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class CreatePropertyRequest extends Model
{
    /**
     * @example department
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @var string[]
     */
    public $propertyValues;
    protected $_name = [
        'propertyKey'    => 'PropertyKey',
        'propertyValues' => 'PropertyValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->propertyValues) {
            $res['PropertyValues'] = $this->propertyValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['PropertyValues'])) {
            if (!empty($map['PropertyValues'])) {
                $model->propertyValues = $map['PropertyValues'];
            }
        }

        return $model;
    }
}
