<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest\AScripts;

use AlibabaCloud\Tea\Model;

class extAttributes extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $attributeKey;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $attributeValue;
    protected $_name = [
        'attributeKey'   => 'AttributeKey',
        'attributeValue' => 'AttributeValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeKey) {
            $res['AttributeKey'] = $this->attributeKey;
        }
        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = $this->attributeValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeKey'])) {
            $model->attributeKey = $map['AttributeKey'];
        }
        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }

        return $model;
    }
}
