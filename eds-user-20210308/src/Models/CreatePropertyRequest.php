<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class CreatePropertyRequest extends Model
{
    /**
     * @var string
     */
    public $propertyKey;

    /**
     * @var string[]
     */
    public $propertyValues;
    protected $_name = [
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
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }

        if (null !== $this->propertyValues) {
            if (\is_array($this->propertyValues)) {
                $res['PropertyValues'] = [];
                $n1 = 0;
                foreach ($this->propertyValues as $item1) {
                    $res['PropertyValues'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }

        if (isset($map['PropertyValues'])) {
            if (!empty($map['PropertyValues'])) {
                $model->propertyValues = [];
                $n1 = 0;
                foreach ($map['PropertyValues'] as $item1) {
                    $model->propertyValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
