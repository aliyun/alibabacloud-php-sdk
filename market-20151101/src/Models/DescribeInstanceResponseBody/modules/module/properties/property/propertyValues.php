<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules\module\properties\property;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules\module\properties\property\propertyValues\propertyValue;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyValue) {
            $res['PropertyValue'] = [];
            if (null !== $this->propertyValue && \is_array($this->propertyValue)) {
                $n = 0;
                foreach ($this->propertyValue as $item) {
                    $res['PropertyValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyValue'])) {
            if (!empty($map['PropertyValue'])) {
                $model->propertyValue = [];
                $n                    = 0;
                foreach ($map['PropertyValue'] as $item) {
                    $model->propertyValue[$n++] = null !== $item ? propertyValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
