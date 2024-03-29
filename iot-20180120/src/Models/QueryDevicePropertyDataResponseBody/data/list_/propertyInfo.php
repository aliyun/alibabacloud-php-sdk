<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyDataResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class propertyInfo extends Model
{
    /**
     * @description The time when the property was modified.
     *
     * @example 1516541885630
     *
     * @var string
     */
    public $time;

    /**
     * @description The value of the property.
     *
     * @example 2
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'time'  => 'Time',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
