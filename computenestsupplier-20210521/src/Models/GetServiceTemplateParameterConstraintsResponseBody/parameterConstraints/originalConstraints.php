<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateParameterConstraintsResponseBody\parameterConstraints;

use AlibabaCloud\Dara\Model;

class originalConstraints extends Model
{
    /**
     * @var string[]
     */
    public $allowedValues;

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
        'allowedValues' => 'AllowedValues',
        'propertyName' => 'PropertyName',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
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
                $n1 = 0;
                foreach ($this->allowedValues as $item1) {
                    $res['AllowedValues'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['AllowedValues'] as $item1) {
                    $model->allowedValues[$n1] = $item1;
                    ++$n1;
                }
            }
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
