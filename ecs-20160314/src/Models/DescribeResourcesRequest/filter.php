<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourcesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var string
     */
    public $attributeValue;

    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'attributeName'  => 'AttributeName',
        'attributeValue' => 'AttributeValue',
        'operation'      => 'Operation',
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
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
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
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
