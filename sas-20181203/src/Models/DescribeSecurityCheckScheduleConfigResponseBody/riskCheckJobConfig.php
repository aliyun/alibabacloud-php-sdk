<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityCheckScheduleConfigResponseBody;

use AlibabaCloud\Tea\Model;

class riskCheckJobConfig extends Model
{
    /**
     * @var string
     */
    public $daysOfWeek;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'daysOfWeek' => 'DaysOfWeek',
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daysOfWeek) {
            $res['DaysOfWeek'] = $this->daysOfWeek;
        }
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
     * @return riskCheckJobConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaysOfWeek'])) {
            $model->daysOfWeek = $map['DaysOfWeek'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
