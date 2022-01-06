<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDesiredPropertyResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class desiredPropertyInfo extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'dataType'   => 'DataType',
        'identifier' => 'Identifier',
        'name'       => 'Name',
        'time'       => 'Time',
        'unit'       => 'Unit',
        'value'      => 'Value',
        'version'    => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desiredPropertyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
