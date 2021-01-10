<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageAcksResponseBody\messageAcks;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $ackTime;

    /**
     * @var int
     */
    public $mid;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'ackTime'  => 'AckTime',
        'mid'      => 'Mid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->ackTime) {
            $res['AckTime'] = $this->ackTime;
        }
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['AckTime'])) {
            $model->ackTime = $map['AckTime'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }

        return $model;
    }
}
