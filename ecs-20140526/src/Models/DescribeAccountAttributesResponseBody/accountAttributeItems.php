<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems\attributeValues;
use AlibabaCloud\Tea\Model;

class accountAttributeItems extends Model
{
    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var attributeValues[]
     */
    public $attributeValues;
    protected $_name = [
        'attributeName'   => 'AttributeName',
        'attributeValues' => 'AttributeValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->attributeValues) {
            $res['AttributeValues'] = [];
            if (null !== $this->attributeValues && \is_array($this->attributeValues)) {
                $n = 0;
                foreach ($this->attributeValues as $item) {
                    $res['AttributeValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountAttributeItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributeValues'])) {
            if (!empty($map['AttributeValues'])) {
                $model->attributeValues = [];
                $n                      = 0;
                foreach ($map['AttributeValues'] as $item) {
                    $model->attributeValues[$n++] = null !== $item ? attributeValues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
