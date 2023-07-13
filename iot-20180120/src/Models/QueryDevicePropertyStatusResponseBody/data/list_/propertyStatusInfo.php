<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyStatusResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class propertyStatusInfo extends Model
{
    /**
     * @description The data type of the property. Valid values:
     *
     *   **int**: integer
     *   **float**: single-precision floating-point number
     *   **double**: double-precision floating-point number
     *   **enum**: enumeration
     *   **bool**: Boolean
     *   **text**: character
     *   **date**: time (string-type UTC timestamp in milliseconds)
     *   **array**: array
     *   **struct**: structure
     *
     * @example int
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The identifier of the property.
     *
     * @example Temperature
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The name of the property.
     *
     * @example temperature
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the property was modified, in milliseconds.
     *
     * @example 1517553572362
     *
     * @var string
     */
    public $time;

    /**
     * @description The unit of the property value.
     *
     * @example °C
     *
     * @var string
     */
    public $unit;

    /**
     * @description The value of the property.
     *
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
