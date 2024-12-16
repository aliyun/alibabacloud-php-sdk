<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\bindingConfig;

use AlibabaCloud\Tea\Model;

class autoMatchUserProfileExpressions extends Model
{
    /**
     * @description 表达式的类型
     *
     * This parameter is required.
     * @example filed
     *
     * @var string
     */
    public $expressionMappingType;

    /**
     * @description 映射属性取值表达式
     *
     * This parameter is required.
     * @example idpUser.phoneNumber
     *
     * @var string
     */
    public $sourceValueExpression;

    /**
     * @description 映射目标属性名称
     *
     * This parameter is required.
     * @example user.username
     *
     * @var string
     */
    public $targetField;

    /**
     * @description 映射目标属性名称
     *
     * @var string
     */
    public $targetFieldDescription;
    protected $_name = [
        'expressionMappingType'  => 'ExpressionMappingType',
        'sourceValueExpression'  => 'SourceValueExpression',
        'targetField'            => 'TargetField',
        'targetFieldDescription' => 'TargetFieldDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressionMappingType) {
            $res['ExpressionMappingType'] = $this->expressionMappingType;
        }
        if (null !== $this->sourceValueExpression) {
            $res['SourceValueExpression'] = $this->sourceValueExpression;
        }
        if (null !== $this->targetField) {
            $res['TargetField'] = $this->targetField;
        }
        if (null !== $this->targetFieldDescription) {
            $res['TargetFieldDescription'] = $this->targetFieldDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoMatchUserProfileExpressions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressionMappingType'])) {
            $model->expressionMappingType = $map['ExpressionMappingType'];
        }
        if (isset($map['SourceValueExpression'])) {
            $model->sourceValueExpression = $map['SourceValueExpression'];
        }
        if (isset($map['TargetField'])) {
            $model->targetField = $map['TargetField'];
        }
        if (isset($map['TargetFieldDescription'])) {
            $model->targetFieldDescription = $map['TargetFieldDescription'];
        }

        return $model;
    }
}
