<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupTimesResponseBody;

use AlibabaCloud\Tea\Model;

class restoreTime extends Model
{
    /**
     * @description Indicates the end time. The time is in the UNIX timestamp format. The time is in UTC. Unit: ms.
     *
     * @example 1568636922671
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Indicates the start time. The time is in the UNIX timestamp format. The time must be in UTC. Unit: ms.
     *
     * @example 1568632853000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
