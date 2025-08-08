<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules\module\properties\property;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules\module\properties\property\propertyValues\propertyValue;

class propertyValues extends Model
{
    /**
     * @var propertyValue[]
     */
    public $propertyValue;
    protected $_name = [
        'propertyValue' => 'PropertyValue',
    ];

    public function validate()
    {
        if (\is_array($this->propertyValue)) {
            Model::validateArray($this->propertyValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyValue) {
            if (\is_array($this->propertyValue)) {
                $res['PropertyValue'] = [];
                $n1 = 0;
                foreach ($this->propertyValue as $item1) {
                    $res['PropertyValue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PropertyValue'])) {
            if (!empty($map['PropertyValue'])) {
                $model->propertyValue = [];
                $n1 = 0;
                foreach ($map['PropertyValue'] as $item1) {
                    $model->propertyValue[$n1] = propertyValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
