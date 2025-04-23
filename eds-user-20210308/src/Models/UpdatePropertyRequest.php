<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyRequest\propertyValues;

class UpdatePropertyRequest extends Model
{
    /**
     * @var int
     */
    public $propertyId;

    /**
     * @var string
     */
    public $propertyKey;

    /**
     * @var propertyValues[]
     */
    public $propertyValues;
    protected $_name = [
        'propertyId' => 'PropertyId',
        'propertyKey' => 'PropertyKey',
        'propertyValues' => 'PropertyValues',
    ];

    public function validate()
    {
        if (\is_array($this->propertyValues)) {
            Model::validateArray($this->propertyValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }

        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }

        if (null !== $this->propertyValues) {
            if (\is_array($this->propertyValues)) {
                $res['PropertyValues'] = [];
                $n1 = 0;
                foreach ($this->propertyValues as $item1) {
                    $res['PropertyValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }

        if (isset($map['PropertyValues'])) {
            if (!empty($map['PropertyValues'])) {
                $model->propertyValues = [];
                $n1 = 0;
                foreach ($map['PropertyValues'] as $item1) {
                    $model->propertyValues[$n1++] = propertyValues::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
