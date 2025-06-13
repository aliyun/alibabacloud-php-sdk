<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest\AScripts;

use AlibabaCloud\Dara\Model;

class extAttributes extends Model
{
    /**
     * @var string
     */
    public $attributeKey;

    /**
     * @var string
     */
    public $attributeValue;
    protected $_name = [
        'attributeKey' => 'AttributeKey',
        'attributeValue' => 'AttributeValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
