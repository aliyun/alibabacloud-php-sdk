<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AttributeValueInfoDTO\boundedValue;

class AttributeValueInfoDTO extends Model
{
    /**
     * @var boundedValue
     */
    public $boundedValue;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var AttributeValueInfoDTO[]
     */
    public $descriptionAttributeValues;

    /**
     * @var string
     */
    public $identifyKey;

    /**
     * @var string
     */
    public $max;

    /**
     * @var string
     */
    public $min;

    /**
     * @var string[]
     */
    public $operationTags;

    /**
     * @var string
     */
    public $step;

    /**
     * @var AttributeValueInfoDTO[][]
     */
    public $subAttributeValues;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueName;
    protected $_name = [
        'boundedValue' => 'BoundedValue',
        'code' => 'Code',
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'descriptionAttributeValues' => 'DescriptionAttributeValues',
        'identifyKey' => 'IdentifyKey',
        'max' => 'Max',
        'min' => 'Min',
        'operationTags' => 'OperationTags',
        'step' => 'Step',
        'subAttributeValues' => 'SubAttributeValues',
        'value' => 'Value',
        'valueName' => 'ValueName',
    ];

    public function validate()
    {
        if (null !== $this->boundedValue) {
            $this->boundedValue->validate();
        }
        if (\is_array($this->descriptionAttributeValues)) {
            Model::validateArray($this->descriptionAttributeValues);
        }
        if (\is_array($this->operationTags)) {
            Model::validateArray($this->operationTags);
        }
        if (\is_array($this->subAttributeValues)) {
            Model::validateArray($this->subAttributeValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundedValue) {
            $res['BoundedValue'] = null !== $this->boundedValue ? $this->boundedValue->toArray($noStream) : $this->boundedValue;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->descriptionAttributeValues) {
            if (\is_array($this->descriptionAttributeValues)) {
                $res['DescriptionAttributeValues'] = [];
                $n1 = 0;
                foreach ($this->descriptionAttributeValues as $item1) {
                    $res['DescriptionAttributeValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->identifyKey) {
            $res['IdentifyKey'] = $this->identifyKey;
        }

        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        if (null !== $this->operationTags) {
            if (\is_array($this->operationTags)) {
                $res['OperationTags'] = [];
                $n1 = 0;
                foreach ($this->operationTags as $item1) {
                    $res['OperationTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->subAttributeValues) {
            if (\is_array($this->subAttributeValues)) {
                $res['SubAttributeValues'] = [];
                foreach ($this->subAttributeValues as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['SubAttributeValues'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['SubAttributeValues'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->valueName) {
            $res['ValueName'] = $this->valueName;
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
        if (isset($map['BoundedValue'])) {
            $model->boundedValue = boundedValue::fromMap($map['BoundedValue']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DescriptionAttributeValues'])) {
            if (!empty($map['DescriptionAttributeValues'])) {
                $model->descriptionAttributeValues = [];
                $n1 = 0;
                foreach ($map['DescriptionAttributeValues'] as $item1) {
                    $model->descriptionAttributeValues[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IdentifyKey'])) {
            $model->identifyKey = $map['IdentifyKey'];
        }

        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        if (isset($map['OperationTags'])) {
            if (!empty($map['OperationTags'])) {
                $model->operationTags = [];
                $n1 = 0;
                foreach ($map['OperationTags'] as $item1) {
                    $model->operationTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['SubAttributeValues'])) {
            if (!empty($map['SubAttributeValues'])) {
                $model->subAttributeValues = [];
                foreach ($map['SubAttributeValues'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->subAttributeValues[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->subAttributeValues[$key1][$n2] = self::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['ValueName'])) {
            $model->valueName = $map['ValueName'];
        }

        return $model;
    }
}
