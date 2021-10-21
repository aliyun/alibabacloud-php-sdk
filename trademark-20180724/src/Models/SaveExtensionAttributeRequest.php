<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SaveExtensionAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $attributeKey;

    /**
     * @var string
     */
    public $attributeValue;
    protected $_name = [
        'bizId'          => 'BizId',
        'attributeKey'   => 'AttributeKey',
        'attributeValue' => 'AttributeValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
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
     * @return SaveExtensionAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['AttributeKey'])) {
            $model->attributeKey = $map['AttributeKey'];
        }
        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }

        return $model;
    }
}
