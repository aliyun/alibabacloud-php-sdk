<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest\bindingConfig;

use AlibabaCloud\Dara\Model;

class autoMatchUserProfileExpressions extends Model
{
    /**
     * @var string
     */
    public $expressionMappingType;

    /**
     * @var string
     */
    public $sourceValueExpression;

    /**
     * @var string
     */
    public $targetField;

    /**
     * @var string
     */
    public $targetFieldDescription;
    protected $_name = [
        'expressionMappingType' => 'ExpressionMappingType',
        'sourceValueExpression' => 'SourceValueExpression',
        'targetField' => 'TargetField',
        'targetFieldDescription' => 'TargetFieldDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
