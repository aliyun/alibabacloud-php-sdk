<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMessageAcksResponseBody\messageAcks;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $mid;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $ackTime;
    protected $_name = [
        'mid'      => 'Mid',
        'deviceId' => 'DeviceId',
        'ackTime'  => 'AckTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->ackTime) {
            $res['AckTime'] = $this->ackTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['AckTime'])) {
            $model->ackTime = $map['AckTime'];
        }

        return $model;
    }
}
