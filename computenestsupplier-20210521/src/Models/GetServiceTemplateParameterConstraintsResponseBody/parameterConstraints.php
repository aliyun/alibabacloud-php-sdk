<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsResponseBody\parameterConstraints\originalConstraints;

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
     * @var originalConstraints[]
     */
    public $originalConstraints;

    /**
     * @var string
     */
    public $parameterKey;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allowedValues' => 'AllowedValues',
        'associationParameterNames' => 'AssociationParameterNames',
        'behavior' => 'Behavior',
        'behaviorReason' => 'BehaviorReason',
        'originalConstraints' => 'OriginalConstraints',
        'parameterKey' => 'ParameterKey',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->allowedValues)) {
            Model::validateArray($this->allowedValues);
        }
        if (\is_array($this->associationParameterNames)) {
            Model::validateArray($this->associationParameterNames);
        }
        if (\is_array($this->originalConstraints)) {
            Model::validateArray($this->originalConstraints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedValues) {
            if (\is_array($this->allowedValues)) {
                $res['AllowedValues'] = [];
                $n1 = 0;
                foreach ($this->allowedValues as $item1) {
                    $res['AllowedValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->associationParameterNames) {
            if (\is_array($this->associationParameterNames)) {
                $res['AssociationParameterNames'] = [];
                $n1 = 0;
                foreach ($this->associationParameterNames as $item1) {
                    $res['AssociationParameterNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->behavior) {
            $res['Behavior'] = $this->behavior;
        }

        if (null !== $this->behaviorReason) {
            $res['BehaviorReason'] = $this->behaviorReason;
        }

        if (null !== $this->originalConstraints) {
            if (\is_array($this->originalConstraints)) {
                $res['OriginalConstraints'] = [];
                $n1 = 0;
                foreach ($this->originalConstraints as $item1) {
                    $res['OriginalConstraints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AllowedValues'])) {
            if (!empty($map['AllowedValues'])) {
                $model->allowedValues = [];
                $n1 = 0;
                foreach ($map['AllowedValues'] as $item1) {
                    $model->allowedValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AssociationParameterNames'])) {
            if (!empty($map['AssociationParameterNames'])) {
                $model->associationParameterNames = [];
                $n1 = 0;
                foreach ($map['AssociationParameterNames'] as $item1) {
                    $model->associationParameterNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Behavior'])) {
            $model->behavior = $map['Behavior'];
        }

        if (isset($map['BehaviorReason'])) {
            $model->behaviorReason = $map['BehaviorReason'];
        }

        if (isset($map['OriginalConstraints'])) {
            if (!empty($map['OriginalConstraints'])) {
                $model->originalConstraints = [];
                $n1 = 0;
                foreach ($map['OriginalConstraints'] as $item1) {
                    $model->originalConstraints[$n1] = originalConstraints::fromMap($item1);
                    ++$n1;
                }
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
