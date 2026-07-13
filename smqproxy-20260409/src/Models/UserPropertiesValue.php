<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;

class UserPropertiesValue extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $stringValue;

    /**
     * @var string
     */
    public $binaryValue;
    protected $_name = [
        'dataType' => 'DataType',
        'stringValue' => 'StringValue',
        'binaryValue' => 'BinaryValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->stringValue) {
            $res['StringValue'] = $this->stringValue;
        }

        if (null !== $this->binaryValue) {
            $res['BinaryValue'] = $this->binaryValue;
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['StringValue'])) {
            $model->stringValue = $map['StringValue'];
        }

        if (isset($map['BinaryValue'])) {
            $model->binaryValue = $map['BinaryValue'];
        }

        return $model;
    }
}
