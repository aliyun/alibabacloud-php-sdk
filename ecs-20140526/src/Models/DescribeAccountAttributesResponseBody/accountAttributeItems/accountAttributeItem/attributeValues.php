<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems\accountAttributeItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems\accountAttributeItem\attributeValues\valueItem;

class attributeValues extends Model
{
    /**
     * @var valueItem[]
     */
    public $valueItem;
    protected $_name = [
        'valueItem' => 'ValueItem',
    ];

    public function validate()
    {
        if (\is_array($this->valueItem)) {
            Model::validateArray($this->valueItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->valueItem) {
            if (\is_array($this->valueItem)) {
                $res['ValueItem'] = [];
                $n1 = 0;
                foreach ($this->valueItem as $item1) {
                    $res['ValueItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ValueItem'])) {
            if (!empty($map['ValueItem'])) {
                $model->valueItem = [];
                $n1 = 0;
                foreach ($map['ValueItem'] as $item1) {
                    $model->valueItem[$n1++] = valueItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
