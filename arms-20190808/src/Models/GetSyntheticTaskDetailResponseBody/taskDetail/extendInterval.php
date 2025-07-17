<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class extendInterval extends Model
{
    /**
     * @description The day on which synthetic monitoring is performed. Valid values:
     *
     *   \\-1: every day
     *   0: Sunday
     *   1: Monday
     *   2: Tuesday
     *   3: Wednesday
     *   4: Thursday
     *   5: Friday
     *   6: Saturday
     *
     * @var int[]
     */
    public $days;

    /**
     * @description The minute at which synthetic monitoring ends.
     *
     * @example 20
     *
     * @var int
     */
    public $endMinute;

    /**
     * @description The time when synthetic monitoring ends. Format: `yyyy-MM-dd HH`.
     *
     * @example 2022-05-03 11:40
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The hour at which synthetic monitoring ends.
     *
     * @example 12
     *
     * @var int
     */
    public $endhour;

    /**
     * @description The hour at which synthetic monitoring starts.
     *
     * @example 9
     *
     * @var int
     */
    public $startHour;

    /**
     * @description The minute at which synthetic monitoring starts.
     *
     * @example 20
     *
     * @var int
     */
    public $startMinute;

    /**
     * @description The time when synthetic monitoring starts. Format: yyyy-MM-dd HH.
     *
     * @example 2022-02-26 11:40
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'days' => 'Days',
        'endMinute' => 'EndMinute',
        'endTime' => 'EndTime',
        'endhour' => 'Endhour',
        'startHour' => 'StartHour',
        'startMinute' => 'StartMinute',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->endMinute) {
            $res['EndMinute'] = $this->endMinute;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endhour) {
            $res['Endhour'] = $this->endhour;
        }
        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
        }
        if (null !== $this->startMinute) {
            $res['StartMinute'] = $this->startMinute;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Days'])) {
            if (!empty($map['Days'])) {
                $model->days = $map['Days'];
            }
        }
        if (isset($map['EndMinute'])) {
            $model->endMinute = $map['EndMinute'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Endhour'])) {
            $model->endhour = $map['Endhour'];
        }
        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }
        if (isset($map['StartMinute'])) {
            $model->startMinute = $map['StartMinute'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
