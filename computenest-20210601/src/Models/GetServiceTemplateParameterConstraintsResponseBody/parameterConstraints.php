<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsResponseBody;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsResponseBody\parameterConstraints\originalConstraints;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsResponseBody\parameterConstraints\queryErrors;
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
     * @example NoLimit
     *
     * @var string
     */
    public $behavior;

    /**
     * @example No resource property refer to the parameter
     *
     * @var string
     */
    public $behaviorReason;

    /**
     * @var originalConstraints[]
     */
    public $originalConstraints;

    /**
     * @example ZoneInfo
     *
     * @var string
     */
    public $parameterKey;

    /**
     * @var queryErrors[]
     */
    public $queryErrors;

    /**
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
        'queryErrors'               => 'QueryErrors',
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
        if (null !== $this->queryErrors) {
            $res['QueryErrors'] = [];
            if (null !== $this->queryErrors && \is_array($this->queryErrors)) {
                $n = 0;
                foreach ($this->queryErrors as $item) {
                    $res['QueryErrors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['QueryErrors'])) {
            if (!empty($map['QueryErrors'])) {
                $model->queryErrors = [];
                $n                  = 0;
                foreach ($map['QueryErrors'] as $item) {
                    $model->queryErrors[$n++] = null !== $item ? queryErrors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
