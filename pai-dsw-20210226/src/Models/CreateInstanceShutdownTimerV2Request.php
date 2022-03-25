<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceShutdownTimerV2Request extends Model
{
    /**
     * @description 定时关机设定时间
     *
     * @var string
     */
    public $dueTime;

    /**
     * @description 距离定时关机时间段
     *
     * @var int
     */
    public $remainingTimeInMs;
    protected $_name = [
        'dueTime'           => 'DueTime',
        'remainingTimeInMs' => 'RemainingTimeInMs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dueTime) {
            $res['DueTime'] = $this->dueTime;
        }
        if (null !== $this->remainingTimeInMs) {
            $res['RemainingTimeInMs'] = $this->remainingTimeInMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceShutdownTimerV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DueTime'])) {
            $model->dueTime = $map['DueTime'];
        }
        if (isset($map['RemainingTimeInMs'])) {
            $model->remainingTimeInMs = $map['RemainingTimeInMs'];
        }

        return $model;
    }
}
