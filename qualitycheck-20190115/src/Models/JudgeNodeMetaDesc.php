<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class JudgeNodeMetaDesc extends Model
{
    /**
     * @var string
     */
    public $actualValue;

    /**
     * @var int
     */
    public $dataType;

    /**
     * @var string
     */
    public $field;

    /**
     * @var int
     */
    public $fieldType;

    /**
     * @var int
     */
    public $symbol;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'actualValue' => 'ActualValue',
        'dataType' => 'DataType',
        'field' => 'Field',
        'fieldType' => 'FieldType',
        'symbol' => 'Symbol',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualValue) {
            $res['ActualValue'] = $this->actualValue;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->fieldType) {
            $res['FieldType'] = $this->fieldType;
        }

        if (null !== $this->symbol) {
            $res['Symbol'] = $this->symbol;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['ActualValue'])) {
            $model->actualValue = $map['ActualValue'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['FieldType'])) {
            $model->fieldType = $map['FieldType'];
        }

        if (isset($map['Symbol'])) {
            $model->symbol = $map['Symbol'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
