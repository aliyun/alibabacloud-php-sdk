<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsResponseBody\components;

use AlibabaCloud\Dara\Model;

class componentAssetConfigs extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $fieldDescription;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'encrypted' => 'Encrypted',
        'fieldDescription' => 'FieldDescription',
        'fieldName' => 'FieldName',
        'fieldType' => 'FieldType',
        'required' => 'Required',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->fieldDescription) {
            $res['FieldDescription'] = $this->fieldDescription;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['FieldDescription'])) {
            $model->fieldDescription = $map['FieldDescription'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
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
