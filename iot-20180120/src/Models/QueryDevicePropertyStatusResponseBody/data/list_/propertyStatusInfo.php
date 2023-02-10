<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class propertyStatusInfo extends Model
{
    /**
     * @example int
     *
     * @var string
     */
    public $dataType;

    /**
     * @example Temperture
     *
     * @var string
     */
    public $identifier;

    /**
     * @example temperature
     *
     * @var string
     */
    public $name;

    /**
     * @example 1517553572362
     *
     * @var string
     */
    public $time;

    /**
     * @example °C
     *
     * @var string
     */
    public $unit;

    /**
     * @example 25
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'dataType'   => 'DataType',
        'identifier' => 'Identifier',
        'name'       => 'Name',
        'time'       => 'Time',
        'unit'       => 'Unit',
        'value'      => 'Value',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyStatusInfo
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

        return $model;
    }
}
