<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersShrinkRequest;

use AlibabaCloud\Dara\Model;

class propertyKeyValueFilterParam extends Model
{
    /**
     * @var string
     */
    public $propertyKey;

    /**
     * @var string
     */
    public $propertyValues;
    protected $_name = [
        'propertyKey' => 'PropertyKey',
        'propertyValues' => 'PropertyValues',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }

        if (isset($map['PropertyValues'])) {
            $model->propertyValues = $map['PropertyValues'];
        }

        return $model;
    }
}
