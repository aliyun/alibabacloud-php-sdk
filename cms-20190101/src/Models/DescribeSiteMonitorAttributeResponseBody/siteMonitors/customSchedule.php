<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\customSchedule\days;

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
        'days' => 'days',
        'endHour' => 'end_hour',
        'startHour' => 'start_hour',
        'timeZone' => 'time_zone',
    ];

    public function validate()
    {
        if (null !== $this->days) {
            $this->days->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->days) {
            $res['days'] = null !== $this->days ? $this->days->toArray($noStream) : $this->days;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
