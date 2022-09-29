<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody;

use AlibabaCloud\Tea\Model;

class parameterConstraints extends Model
{
    /**
     * @var string[]
     */
    public $allowedValues;

    /**
     * @var string[]
     */
    public $associationParameterNames;

    /**
     * @var string
     */
    public $behavior;

    /**
     * @var string
     */
    public $behaviorReason;

    /**
     * @var mixed[]
     */
    public $illegalValueByParameterConstraints;

    /**
     * @var mixed[]
     */
    public $illegalValueByRules;

    /**
     * @var string
     */
    public $parameterKey;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allowedValues'                      => 'AllowedValues',
        'associationParameterNames'          => 'AssociationParameterNames',
        'behavior'                           => 'Behavior',
        'behaviorReason'                     => 'BehaviorReason',
        'illegalValueByParameterConstraints' => 'IllegalValueByParameterConstraints',
        'illegalValueByRules'                => 'IllegalValueByRules',
        'parameterKey'                       => 'ParameterKey',
        'type'                               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedValues) {
            $res['AllowedValues'] = $this->allowedValues;
        }
        if (null !== $this->associationParameterNames) {
            $res['AssociationParameterNames'] = $this->associationParameterNames;
        }
        if (null !== $this->behavior) {
            $res['Behavior'] = $this->behavior;
        }
        if (null !== $this->behaviorReason) {
            $res['BehaviorReason'] = $this->behaviorReason;
        }
        if (null !== $this->illegalValueByParameterConstraints) {
            $res['IllegalValueByParameterConstraints'] = $this->illegalValueByParameterConstraints;
        }
        if (null !== $this->illegalValueByRules) {
            $res['IllegalValueByRules'] = $this->illegalValueByRules;
        }
        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterConstraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedValues'])) {
            if (!empty($map['AllowedValues'])) {
                $model->allowedValues = $map['AllowedValues'];
            }
        }
        if (isset($map['AssociationParameterNames'])) {
            if (!empty($map['AssociationParameterNames'])) {
                $model->associationParameterNames = $map['AssociationParameterNames'];
            }
        }
        if (isset($map['Behavior'])) {
            $model->behavior = $map['Behavior'];
        }
        if (isset($map['BehaviorReason'])) {
            $model->behaviorReason = $map['BehaviorReason'];
        }
        if (isset($map['IllegalValueByParameterConstraints'])) {
            if (!empty($map['IllegalValueByParameterConstraints'])) {
                $model->illegalValueByParameterConstraints = $map['IllegalValueByParameterConstraints'];
            }
        }
        if (isset($map['IllegalValueByRules'])) {
            if (!empty($map['IllegalValueByRules'])) {
                $model->illegalValueByRules = $map['IllegalValueByRules'];
            }
        }
        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
