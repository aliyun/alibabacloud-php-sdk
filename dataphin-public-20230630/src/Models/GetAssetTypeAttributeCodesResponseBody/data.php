<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetTypeAttributeCodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetTypeAttributeCodesResponseBody\data\enumValues;

class data extends Model
{
    /**
     * @var string
     */
    public $attributeCode;

    /**
     * @var string
     */
    public $attributeName;

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
    public $description;

    /**
     * @var string[]
     */
    public $editableIn;

    /**
     * @var string
     */
    public $enumSourceType;

    /**
     * @var enumValues[]
     */
    public $enumValues;

    /**
     * @var string
     */
    public $inputMode;

    /**
     * @var string
     */
    public $linkTarget;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $systemReferenceType;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var string[]
     */
    public $visibleIn;
    protected $_name = [
        'attributeCode' => 'AttributeCode',
        'attributeName' => 'AttributeName',
        'attributeSource' => 'AttributeSource',
        'attributeType' => 'AttributeType',
        'description' => 'Description',
        'editableIn' => 'EditableIn',
        'enumSourceType' => 'EnumSourceType',
        'enumValues' => 'EnumValues',
        'inputMode' => 'InputMode',
        'linkTarget' => 'LinkTarget',
        'maxLength' => 'MaxLength',
        'required' => 'Required',
        'systemReferenceType' => 'SystemReferenceType',
        'valueType' => 'ValueType',
        'visibleIn' => 'VisibleIn',
    ];

    public function validate()
    {
        if (\is_array($this->editableIn)) {
            Model::validateArray($this->editableIn);
        }
        if (\is_array($this->enumValues)) {
            Model::validateArray($this->enumValues);
        }
        if (\is_array($this->visibleIn)) {
            Model::validateArray($this->visibleIn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeCode) {
            $res['AttributeCode'] = $this->attributeCode;
        }

        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }

        if (null !== $this->attributeSource) {
            $res['AttributeSource'] = $this->attributeSource;
        }

        if (null !== $this->attributeType) {
            $res['AttributeType'] = $this->attributeType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->editableIn) {
            if (\is_array($this->editableIn)) {
                $res['EditableIn'] = [];
                $n1 = 0;
                foreach ($this->editableIn as $item1) {
                    $res['EditableIn'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enumSourceType) {
            $res['EnumSourceType'] = $this->enumSourceType;
        }

        if (null !== $this->enumValues) {
            if (\is_array($this->enumValues)) {
                $res['EnumValues'] = [];
                $n1 = 0;
                foreach ($this->enumValues as $item1) {
                    $res['EnumValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputMode) {
            $res['InputMode'] = $this->inputMode;
        }

        if (null !== $this->linkTarget) {
            $res['LinkTarget'] = $this->linkTarget;
        }

        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->systemReferenceType) {
            $res['SystemReferenceType'] = $this->systemReferenceType;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        if (null !== $this->visibleIn) {
            if (\is_array($this->visibleIn)) {
                $res['VisibleIn'] = [];
                $n1 = 0;
                foreach ($this->visibleIn as $item1) {
                    $res['VisibleIn'][$n1] = $item1;
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
        if (isset($map['AttributeCode'])) {
            $model->attributeCode = $map['AttributeCode'];
        }

        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }

        if (isset($map['AttributeSource'])) {
            $model->attributeSource = $map['AttributeSource'];
        }

        if (isset($map['AttributeType'])) {
            $model->attributeType = $map['AttributeType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EditableIn'])) {
            if (!empty($map['EditableIn'])) {
                $model->editableIn = [];
                $n1 = 0;
                foreach ($map['EditableIn'] as $item1) {
                    $model->editableIn[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnumSourceType'])) {
            $model->enumSourceType = $map['EnumSourceType'];
        }

        if (isset($map['EnumValues'])) {
            if (!empty($map['EnumValues'])) {
                $model->enumValues = [];
                $n1 = 0;
                foreach ($map['EnumValues'] as $item1) {
                    $model->enumValues[$n1] = enumValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InputMode'])) {
            $model->inputMode = $map['InputMode'];
        }

        if (isset($map['LinkTarget'])) {
            $model->linkTarget = $map['LinkTarget'];
        }

        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['SystemReferenceType'])) {
            $model->systemReferenceType = $map['SystemReferenceType'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        if (isset($map['VisibleIn'])) {
            if (!empty($map['VisibleIn'])) {
                $model->visibleIn = [];
                $n1 = 0;
                foreach ($map['VisibleIn'] as $item1) {
                    $model->visibleIn[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
