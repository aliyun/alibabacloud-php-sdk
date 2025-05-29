<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceSettingsResponseBody;

use AlibabaCloud\Dara\Model;

class settings extends Model
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
        'attributeName' => 'AttributeName',
        'attributeValue' => 'AttributeValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }

        return $model;
    }
}
