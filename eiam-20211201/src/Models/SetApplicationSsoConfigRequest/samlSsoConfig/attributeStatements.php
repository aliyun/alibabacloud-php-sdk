<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\samlSsoConfig;

use AlibabaCloud\Tea\Model;

class attributeStatements extends Model
{
    /**
     * @description The attribute name.
     *
     * @example https://www.aliyun.com/SAML-Role/Attributes/RoleSessionName
     *
     * @var string
     */
    public $attributeName;

    /**
     * @description The expression that is used to generate the value of the attribute.
     *
     * @example user.username
     *
     * @var string
     */
    public $attributeValueExpression;
    protected $_name = [
        'attributeName'            => 'AttributeName',
        'attributeValueExpression' => 'AttributeValueExpression',
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
        if (null !== $this->attributeValueExpression) {
            $res['AttributeValueExpression'] = $this->attributeValueExpression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributeStatements
     */
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
