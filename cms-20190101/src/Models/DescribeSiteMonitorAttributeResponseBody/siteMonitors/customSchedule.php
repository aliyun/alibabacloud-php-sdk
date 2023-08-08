<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\customSchedule\days;
use AlibabaCloud\Tea\Model;

class customSchedule extends Model
{
    /**
     * @var days
     */
    public $days;

    /**
     * @var int
     */
    public $endHour;

    /**
     * @var int
     */
    public $startHour;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'days'      => 'days',
        'endHour'   => 'end_hour',
        'startHour' => 'start_hour',
        'timeZone'  => 'time_zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['days'] = null !== $this->days ? $this->days->toMap() : null;
        }
        if (null !== $this->endHour) {
            $res['end_hour'] = $this->endHour;
        }
        if (null !== $this->startHour) {
            $res['start_hour'] = $this->startHour;
        }
        if (null !== $this->timeZone) {
            $res['time_zone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customSchedule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['days'])) {
            $model->days = days::fromMap($map['days']);
        }
        if (isset($map['end_hour'])) {
            $model->endHour = $map['end_hour'];
        }
        if (isset($map['start_hour'])) {
            $model->startHour = $map['start_hour'];
        }
        if (isset($map['time_zone'])) {
            $model->timeZone = $map['time_zone'];
        }

        return $model;
    }
}
