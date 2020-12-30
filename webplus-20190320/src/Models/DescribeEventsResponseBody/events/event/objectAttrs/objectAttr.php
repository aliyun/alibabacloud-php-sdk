<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody\events\event\objectAttrs;

use AlibabaCloud\Tea\Model;

class objectAttr extends Model
{
    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var string
     */
    public $attributeValue;
    protected $_name = [
        'attributeName'  => 'AttributeName',
        'attributeValue' => 'AttributeValue',
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
        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = $this->attributeValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return objectAttr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }

        return $model;
    }
}
