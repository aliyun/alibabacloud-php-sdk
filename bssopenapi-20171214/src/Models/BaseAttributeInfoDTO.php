<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class BaseAttributeInfoDTO extends Model
{
    /**
     * @var string[]
     */
    public $attributeCategories;

    /**
     * @var string
     */
    public $attributeSource;

    /**
     * @var string
     */
    public $attributeType;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operationalAttributeType;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var AttributeValueInfoDTO[]
     */
    public $values;
    protected $_name = [
        'attributeCategories' => 'AttributeCategories',
        'attributeSource' => 'AttributeSource',
        'attributeType' => 'AttributeType',
        'code' => 'Code',
        'description' => 'Description',
        'name' => 'Name',
        'operationalAttributeType' => 'OperationalAttributeType',
        'unit' => 'Unit',
        'valueType' => 'ValueType',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->attributeCategories)) {
            Model::validateArray($this->attributeCategories);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeCategories) {
            if (\is_array($this->attributeCategories)) {
                $res['AttributeCategories'] = [];
                $n1 = 0;
                foreach ($this->attributeCategories as $item1) {
                    $res['AttributeCategories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attributeSource) {
            $res['AttributeSource'] = $this->attributeSource;
        }

        if (null !== $this->attributeType) {
            $res['AttributeType'] = $this->attributeType;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operationalAttributeType) {
            $res['OperationalAttributeType'] = $this->operationalAttributeType;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AttributeCategories'])) {
            if (!empty($map['AttributeCategories'])) {
                $model->attributeCategories = [];
                $n1 = 0;
                foreach ($map['AttributeCategories'] as $item1) {
                    $model->attributeCategories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AttributeSource'])) {
            $model->attributeSource = $map['AttributeSource'];
        }

        if (isset($map['AttributeType'])) {
            $model->attributeType = $map['AttributeType'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperationalAttributeType'])) {
            $model->operationalAttributeType = $map['OperationalAttributeType'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1] = AttributeValueInfoDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
