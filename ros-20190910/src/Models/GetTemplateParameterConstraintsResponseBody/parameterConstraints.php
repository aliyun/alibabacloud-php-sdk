<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints\notSupportResources;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints\originalConstraints;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints\queryErrors;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints\queryTimeoutDetails;

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
     * @var notSupportResources[]
     */
    public $notSupportResources;

    /**
     * @var originalConstraints[]
     */
    public $originalConstraints;

    /**
     * @var string
     */
    public $parameterKey;

    /**
     * @var queryErrors[]
     */
    public $queryErrors;

    /**
     * @var queryTimeoutDetails[]
     */
    public $queryTimeoutDetails;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allowedValues' => 'AllowedValues',
        'associationParameterNames' => 'AssociationParameterNames',
        'behavior' => 'Behavior',
        'behaviorReason' => 'BehaviorReason',
        'illegalValueByParameterConstraints' => 'IllegalValueByParameterConstraints',
        'illegalValueByRules' => 'IllegalValueByRules',
        'notSupportResources' => 'NotSupportResources',
        'originalConstraints' => 'OriginalConstraints',
        'parameterKey' => 'ParameterKey',
        'queryErrors' => 'QueryErrors',
        'queryTimeoutDetails' => 'QueryTimeoutDetails',
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
        if (\is_array($this->illegalValueByParameterConstraints)) {
            Model::validateArray($this->illegalValueByParameterConstraints);
        }
        if (\is_array($this->illegalValueByRules)) {
            Model::validateArray($this->illegalValueByRules);
        }
        if (\is_array($this->notSupportResources)) {
            Model::validateArray($this->notSupportResources);
        }
        if (\is_array($this->originalConstraints)) {
            Model::validateArray($this->originalConstraints);
        }
        if (\is_array($this->queryErrors)) {
            Model::validateArray($this->queryErrors);
        }
        if (\is_array($this->queryTimeoutDetails)) {
            Model::validateArray($this->queryTimeoutDetails);
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

        if (null !== $this->illegalValueByParameterConstraints) {
            if (\is_array($this->illegalValueByParameterConstraints)) {
                $res['IllegalValueByParameterConstraints'] = [];
                $n1 = 0;
                foreach ($this->illegalValueByParameterConstraints as $item1) {
                    $res['IllegalValueByParameterConstraints'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->illegalValueByRules) {
            if (\is_array($this->illegalValueByRules)) {
                $res['IllegalValueByRules'] = [];
                $n1 = 0;
                foreach ($this->illegalValueByRules as $item1) {
                    $res['IllegalValueByRules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notSupportResources) {
            if (\is_array($this->notSupportResources)) {
                $res['NotSupportResources'] = [];
                $n1 = 0;
                foreach ($this->notSupportResources as $item1) {
                    $res['NotSupportResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->queryErrors) {
            if (\is_array($this->queryErrors)) {
                $res['QueryErrors'] = [];
                $n1 = 0;
                foreach ($this->queryErrors as $item1) {
                    $res['QueryErrors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryTimeoutDetails) {
            if (\is_array($this->queryTimeoutDetails)) {
                $res['QueryTimeoutDetails'] = [];
                $n1 = 0;
                foreach ($this->queryTimeoutDetails as $item1) {
                    $res['QueryTimeoutDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['IllegalValueByParameterConstraints'])) {
            if (!empty($map['IllegalValueByParameterConstraints'])) {
                $model->illegalValueByParameterConstraints = [];
                $n1 = 0;
                foreach ($map['IllegalValueByParameterConstraints'] as $item1) {
                    $model->illegalValueByParameterConstraints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IllegalValueByRules'])) {
            if (!empty($map['IllegalValueByRules'])) {
                $model->illegalValueByRules = [];
                $n1 = 0;
                foreach ($map['IllegalValueByRules'] as $item1) {
                    $model->illegalValueByRules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NotSupportResources'])) {
            if (!empty($map['NotSupportResources'])) {
                $model->notSupportResources = [];
                $n1 = 0;
                foreach ($map['NotSupportResources'] as $item1) {
                    $model->notSupportResources[$n1] = notSupportResources::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['QueryErrors'])) {
            if (!empty($map['QueryErrors'])) {
                $model->queryErrors = [];
                $n1 = 0;
                foreach ($map['QueryErrors'] as $item1) {
                    $model->queryErrors[$n1] = queryErrors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryTimeoutDetails'])) {
            if (!empty($map['QueryTimeoutDetails'])) {
                $model->queryTimeoutDetails = [];
                $n1 = 0;
                foreach ($map['QueryTimeoutDetails'] as $item1) {
                    $model->queryTimeoutDetails[$n1] = queryTimeoutDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
