<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceShutdownTimerRequest extends Model
{
    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $dueTime;

    /**
     * @example 3600000
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
     * @return CreateInstanceShutdownTimerRequest
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
