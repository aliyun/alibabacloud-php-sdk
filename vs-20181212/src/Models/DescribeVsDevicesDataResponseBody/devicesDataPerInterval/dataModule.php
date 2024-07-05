<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDevicesDataResponseBody\devicesDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 128
     *
     * @var string
     */
    public $devicesDataValue;

    /**
     * @example 2022-01-04T16:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'devicesDataValue' => 'DevicesDataValue',
        'timeStamp'        => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devicesDataValue) {
            $res['DevicesDataValue'] = $this->devicesDataValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevicesDataValue'])) {
            $model->devicesDataValue = $map['DevicesDataValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
