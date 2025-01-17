<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints;

use AlibabaCloud\Dara\Model;

class originalConstraints extends Model
{
    /**
     * @var mixed[]
     */
    public $allowedValues;
    /**
     * @var string
     */
    public $behavior;
    /**
     * @var string
     */
    public $behaviorReason;
    /**
     * @var string
     */
    public $propertyName;
    /**
     * @var string
     */
    public $resourceName;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'allowedValues'  => 'AllowedValues',
        'behavior'       => 'Behavior',
        'behaviorReason' => 'BehaviorReason',
        'propertyName'   => 'PropertyName',
        'resourceName'   => 'ResourceName',
        'resourceType'   => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->allowedValues)) {
            Model::validateArray($this->allowedValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedValues) {
            if (\is_array($this->allowedValues)) {
                $res['AllowedValues'] = [];
                $n1                   = 0;
                foreach ($this->allowedValues as $item1) {
                    $res['AllowedValues'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->behavior) {
            $res['Behavior'] = $this->behavior;
        }

        if (null !== $this->behaviorReason) {
            $res['BehaviorReason'] = $this->behaviorReason;
        }

        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
                $n1                   = 0;
                foreach ($map['AllowedValues'] as $item1) {
                    $model->allowedValues[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Behavior'])) {
            $model->behavior = $map['Behavior'];
        }

        if (isset($map['BehaviorReason'])) {
            $model->behaviorReason = $map['BehaviorReason'];
        }

        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
