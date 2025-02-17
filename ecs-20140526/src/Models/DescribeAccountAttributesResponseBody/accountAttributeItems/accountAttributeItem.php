<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems\accountAttributeItem\attributeValues;

class accountAttributeItem extends Model
{
    /**
     * @var string
     */
    public $attributeName;
    /**
     * @var attributeValues
     */
    public $attributeValues;
    protected $_name = [
        'attributeName'   => 'AttributeName',
        'attributeValues' => 'AttributeValues',
    ];

    public function validate()
    {
        if (null !== $this->attributeValues) {
            $this->attributeValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }

        if (null !== $this->attributeValues) {
            $res['AttributeValues'] = null !== $this->attributeValues ? $this->attributeValues->toArray($noStream) : $this->attributeValues;
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
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }

        if (isset($map['AttributeValues'])) {
            $model->attributeValues = attributeValues::fromMap($map['AttributeValues']);
        }

        return $model;
    }
}
