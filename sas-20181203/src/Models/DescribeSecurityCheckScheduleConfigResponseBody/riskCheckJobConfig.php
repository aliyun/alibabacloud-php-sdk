<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityCheckScheduleConfigResponseBody;

use AlibabaCloud\Tea\Model;

class riskCheckJobConfig extends Model
{
    /**
     * @description The day of the week when the check tasks are performed. Multiple days can be specified. Multiple days are separated by commas (,).
     *
     *   **1**: Monday
     *   **2**: Tuesday
     *   **3**: Wednesday
     *   **4**: Thursday
     *   **5**: Friday
     *   **6**: Saturday
     *   **7**: Sunday
     *
     * @example 1,2,3
     *
     * @var string
     */
    public $daysOfWeek;

    /**
     * @description The time range during which check tasks end. Valid values:
     *
     *   **6**: 00:00 to 06:00
     *   **12**: 06:00 to 12:00
     *   **18**: 12:00 to 18:00
     *   **24**: 18:00 to 24:00
     *
     * @example 12
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time range during which check tasks start. Valid values:
     *
     *   **0**: 00:00 to 06:00
     *   **6**: 06:00 to 12:00
     *   **12**: 12:00 to 18:00
     *   **18**: 18:00 to 24:00
     *
     * @example 6
     *
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
