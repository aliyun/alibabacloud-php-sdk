<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsResponseBody;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsResponseBody\parameterConstraints\originalConstraints;
use AlibabaCloud\Tea\Model;

class parameterConstraints extends Model
{
    /**
     * @description The valid values of the parameter.
     *
     * @var string[]
     */
    public $allowedValues;

    /**
     * @description The names of the associated parameters.
     *
     * @var string[]
     */
    public $associationParameterNames;

    /**
     * @description The behavior of the parameter. Valid values:
     *
     *   NoLimit: The value of this parameter is not limited.
     *   NotSupport: The value of this parameter cannot be queried.
     *   QueryError: The query failed.
     *
     * >  If AllowedValues is not returned, Behavior and BehaviorReason are returned.
     * @example NoLimit
     *
     * @var string
     */
    public $behavior;

    /**
     * @description The reason why the behavior of the parameter is returned.
     *
     * @example none
     *
     * @var string
     */
    public $behaviorReason;

    /**
     * @description The original constraint information.
     *
     * @var originalConstraints[]
     */
    public $originalConstraints;

    /**
     * @description The name of the parameter.
     *
     * @example PayType
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @description The type of the parameter.
     *
     * @example String
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'allowedValues'             => 'AllowedValues',
        'associationParameterNames' => 'AssociationParameterNames',
        'behavior'                  => 'Behavior',
        'behaviorReason'            => 'BehaviorReason',
        'originalConstraints'       => 'OriginalConstraints',
        'parameterKey'              => 'ParameterKey',
        'type'                      => 'Type',
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
        if (null !== $this->originalConstraints) {
            $res['OriginalConstraints'] = [];
            if (null !== $this->originalConstraints && \is_array($this->originalConstraints)) {
                $n = 0;
                foreach ($this->originalConstraints as $item) {
                    $res['OriginalConstraints'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['OriginalConstraints'])) {
            if (!empty($map['OriginalConstraints'])) {
                $model->originalConstraints = [];
                $n                          = 0;
                foreach ($map['OriginalConstraints'] as $item) {
                    $model->originalConstraints[$n++] = null !== $item ? originalConstraints::fromMap($item) : $item;
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
