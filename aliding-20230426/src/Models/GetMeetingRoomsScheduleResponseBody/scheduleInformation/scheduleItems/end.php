<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation\scheduleItems;

use AlibabaCloud\Tea\Model;

class end extends Model
{
    /**
     * @example 2020-01-02T10:15:30+08:00
     *
     * @var string
     */
    public $dateTime;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'dateTime' => 'DateTime',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return end
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
