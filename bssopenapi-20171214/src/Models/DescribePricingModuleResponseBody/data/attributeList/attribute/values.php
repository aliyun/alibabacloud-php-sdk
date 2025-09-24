<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList\attribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\attributeList\attribute\values\attributeValue;

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
        if (\is_array($this->attributeValue)) {
            Model::validateArray($this->attributeValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeValue) {
            if (\is_array($this->attributeValue)) {
                $res['AttributeValue'] = [];
                $n1 = 0;
                foreach ($this->attributeValue as $item1) {
                    $res['AttributeValue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttributeValue'])) {
            if (!empty($map['AttributeValue'])) {
                $model->attributeValue = [];
                $n1 = 0;
                foreach ($map['AttributeValue'] as $item1) {
                    $model->attributeValue[$n1] = attributeValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
