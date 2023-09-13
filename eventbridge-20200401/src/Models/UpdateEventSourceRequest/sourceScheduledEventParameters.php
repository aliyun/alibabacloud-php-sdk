<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest;

use AlibabaCloud\Tea\Model;

class sourceScheduledEventParameters extends Model
{
    /**
     * @description The Cron expression.
     *
     * @example 10 * * * * *
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The time zone in which the Cron expression is executed.
     *
     * @example GMT+0:00
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'schedule' => 'Schedule',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceScheduledEventParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
