<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceSettingsResponseBody;

use AlibabaCloud\Tea\Model;

class settings extends Model
{
    /**
     * @example navbar.hide
     *
     * @var string
     */
    public $attributeName;

    /**
     * @example 1
     *
     * @var string
     */
    public $attributeValue;
    protected $_name = [
        'attributeName' => 'AttributeName',
        'attributeValue' => 'AttributeValue',
    ];

    public function validate() {}

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
     * @return settings
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
