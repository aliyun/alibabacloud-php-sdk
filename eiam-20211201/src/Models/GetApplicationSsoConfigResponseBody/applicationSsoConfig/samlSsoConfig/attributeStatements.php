<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\samlSsoConfig;

use AlibabaCloud\Dara\Model;

class attributeStatements extends Model
{
    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var string
     */
    public $attributeValueExpression;
    protected $_name = [
        'attributeName' => 'AttributeName',
        'attributeValueExpression' => 'AttributeValueExpression',
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

        if (null !== $this->attributeValueExpression) {
            $res['AttributeValueExpression'] = $this->attributeValueExpression;
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

        if (isset($map['AttributeValueExpression'])) {
            $model->attributeValueExpression = $map['AttributeValueExpression'];
        }

        return $model;
    }
}
