<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest\AScripts;

use AlibabaCloud\Tea\Model;

class extAttributes extends Model
{
    /**
     * @description The attribute name.
     *
     * Set the value to **EsDebug**, which specifies that when requests carry the _es_dbg parameter whose value is the specified key, the debugging header is enabled to output the execution result.
     *
     * This parameter is required.
     * @example EsDebug
     *
     * @var string
     */
    public $attributeKey;

    /**
     * @description The attribute value, which must be 1 to 128 characters in length, and can contain letters and digits.
     *
     * This parameter is required.
     * @example test123
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
