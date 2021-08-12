<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList\attribute;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList\attribute\values\attributeValue;
use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @var attributeValue[]
     */
    public $attributeValue;
    protected $_name = [
        'attributeValue' => 'AttributeValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = [];
            if (null !== $this->attributeValue && \is_array($this->attributeValue)) {
                $n = 0;
                foreach ($this->attributeValue as $item) {
                    $res['AttributeValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeValue'])) {
            if (!empty($map['AttributeValue'])) {
                $model->attributeValue = [];
                $n                     = 0;
                foreach ($map['AttributeValue'] as $item) {
                    $model->attributeValue[$n++] = null !== $item ? attributeValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
