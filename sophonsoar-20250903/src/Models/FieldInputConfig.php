<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class FieldInputConfig extends Model
{
    /**
     * @var bool
     */
    public $arrayed;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $fieldCheckRegex;

    /**
     * @var string
     */
    public $fieldClass;

    /**
     * @var FieldInputConfig[]
     */
    public $fieldConfigs;

    /**
     * @var string
     */
    public $fieldDescription;

    /**
     * @var string
     */
    public $fieldExample;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldPath;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'arrayed' => 'Arrayed',
        'defaultValue' => 'DefaultValue',
        'fieldCheckRegex' => 'FieldCheckRegex',
        'fieldClass' => 'FieldClass',
        'fieldConfigs' => 'FieldConfigs',
        'fieldDescription' => 'FieldDescription',
        'fieldExample' => 'FieldExample',
        'fieldName' => 'FieldName',
        'fieldPath' => 'FieldPath',
        'fieldType' => 'FieldType',
        'required' => 'Required',
    ];

    public function validate()
    {
        if (\is_array($this->fieldConfigs)) {
            Model::validateArray($this->fieldConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrayed) {
            $res['Arrayed'] = $this->arrayed;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->fieldCheckRegex) {
            $res['FieldCheckRegex'] = $this->fieldCheckRegex;
        }

        if (null !== $this->fieldClass) {
            $res['FieldClass'] = $this->fieldClass;
        }

        if (null !== $this->fieldConfigs) {
            if (\is_array($this->fieldConfigs)) {
                $res['FieldConfigs'] = [];
                $n1 = 0;
                foreach ($this->fieldConfigs as $item1) {
                    $res['FieldConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fieldDescription) {
            $res['FieldDescription'] = $this->fieldDescription;
        }

        if (null !== $this->fieldExample) {
            $res['FieldExample'] = $this->fieldExample;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->fieldPath) {
            $res['FieldPath'] = $this->fieldPath;
        }

        if (null !== $this->fieldType) {
            $res['FieldType'] = $this->fieldType;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
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
        if (isset($map['Arrayed'])) {
            $model->arrayed = $map['Arrayed'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['FieldCheckRegex'])) {
            $model->fieldCheckRegex = $map['FieldCheckRegex'];
        }

        if (isset($map['FieldClass'])) {
            $model->fieldClass = $map['FieldClass'];
        }

        if (isset($map['FieldConfigs'])) {
            if (!empty($map['FieldConfigs'])) {
                $model->fieldConfigs = [];
                $n1 = 0;
                foreach ($map['FieldConfigs'] as $item1) {
                    $model->fieldConfigs[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FieldDescription'])) {
            $model->fieldDescription = $map['FieldDescription'];
        }

        if (isset($map['FieldExample'])) {
            $model->fieldExample = $map['FieldExample'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['FieldPath'])) {
            $model->fieldPath = $map['FieldPath'];
        }

        if (isset($map['FieldType'])) {
            $model->fieldType = $map['FieldType'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
