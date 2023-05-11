<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDesiredPropertyResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class desiredPropertyInfo extends Model
{
    /**
     * @description The data type of the property.
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
     * @example airconditioning
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the desired value of the property was last modified. Unit: milliseconds.
     *
     * @example 1579335899000
     *
     * @var string
     */
    public $time;

    /**
     * @description The unit of the property.
     *
     * @example ℃
     *
     * @var string
     */
    public $unit;

    /**
     * @description The desired value of the property.
     *
     * >  If you call the [ClearDeviceDesiredProperty](~~477431~~) operation to delete the desired value of the property, the **Value** parameter is not returned.
     * @example 34
     *
     * @var string
     */
    public $value;

    /**
     * @description The version of the desired value.
     *
     * @example 1
     *
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
