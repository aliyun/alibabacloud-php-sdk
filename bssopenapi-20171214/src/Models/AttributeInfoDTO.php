<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class AttributeInfoDTO extends Model
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
     * @var BaseAttributeInfoDTO[]
     */
    public $compositeAttributes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var BaseAttributeInfoDTO[]
     */
    public $descriptionAttributes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operationalAttributeConfig;

    /**
     * @var string
     */
    public $operationalAttributeType;

    /**
     * @var AttributeInfoDTO[]
     */
    public $subAttributes;

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
        'compositeAttributes' => 'CompositeAttributes',
        'description' => 'Description',
        'descriptionAttributes' => 'DescriptionAttributes',
        'name' => 'Name',
        'operationalAttributeConfig' => 'OperationalAttributeConfig',
        'operationalAttributeType' => 'OperationalAttributeType',
        'subAttributes' => 'SubAttributes',
        'unit' => 'Unit',
        'valueType' => 'ValueType',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->attributeCategories)) {
            Model::validateArray($this->attributeCategories);
        }
        if (\is_array($this->compositeAttributes)) {
            Model::validateArray($this->compositeAttributes);
        }
        if (\is_array($this->descriptionAttributes)) {
            Model::validateArray($this->descriptionAttributes);
        }
        if (\is_array($this->subAttributes)) {
            Model::validateArray($this->subAttributes);
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

        if (null !== $this->compositeAttributes) {
            if (\is_array($this->compositeAttributes)) {
                $res['CompositeAttributes'] = [];
                $n1 = 0;
                foreach ($this->compositeAttributes as $item1) {
                    $res['CompositeAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->descriptionAttributes) {
            if (\is_array($this->descriptionAttributes)) {
                $res['DescriptionAttributes'] = [];
                $n1 = 0;
                foreach ($this->descriptionAttributes as $item1) {
                    $res['DescriptionAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operationalAttributeConfig) {
            $res['OperationalAttributeConfig'] = $this->operationalAttributeConfig;
        }

        if (null !== $this->operationalAttributeType) {
            $res['OperationalAttributeType'] = $this->operationalAttributeType;
        }

        if (null !== $this->subAttributes) {
            if (\is_array($this->subAttributes)) {
                $res['SubAttributes'] = [];
                $n1 = 0;
                foreach ($this->subAttributes as $item1) {
                    $res['SubAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['CompositeAttributes'])) {
            if (!empty($map['CompositeAttributes'])) {
                $model->compositeAttributes = [];
                $n1 = 0;
                foreach ($map['CompositeAttributes'] as $item1) {
                    $model->compositeAttributes[$n1] = BaseAttributeInfoDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DescriptionAttributes'])) {
            if (!empty($map['DescriptionAttributes'])) {
                $model->descriptionAttributes = [];
                $n1 = 0;
                foreach ($map['DescriptionAttributes'] as $item1) {
                    $model->descriptionAttributes[$n1] = BaseAttributeInfoDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperationalAttributeConfig'])) {
            $model->operationalAttributeConfig = $map['OperationalAttributeConfig'];
        }

        if (isset($map['OperationalAttributeType'])) {
            $model->operationalAttributeType = $map['OperationalAttributeType'];
        }

        if (isset($map['SubAttributes'])) {
            if (!empty($map['SubAttributes'])) {
                $model->subAttributes = [];
                $n1 = 0;
                foreach ($map['SubAttributes'] as $item1) {
                    $model->subAttributes[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
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
