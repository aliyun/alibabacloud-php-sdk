<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\Tea\Model;

class notice extends Model
{
    /**
     * @description The end of the time range when the alert rule takes effect within 24 hours per day. This value is a UNIX timestamp. The year, month, and day that are indicated by the timestamp are not displayed in this value. Only the hour, minute, and second are displayed.
     *
     * @example 1480607940000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The end of the time range when alert notifications are sent based on the alert rule within 24 hours per day. This value is a UNIX timestamp. The year, month, and day that are indicated by the timestamp are not displayed in this value. Only the hour, minute, and second are displayed.
     *
     * @example 1480607940000
     *
     * @var int
     */
    public $noticeEndTime;

    /**
     * @description The beginning of the time range when alert notifications are sent based on the alert rule within 24 hours per day. This value is a UNIX timestamp. The year, month, and day that are indicated by the timestamp are not displayed in this value. Only the hour, minute, and second are displayed.
     *
     * @example 1480521600000
     *
     * @var int
     */
    public $noticeStartTime;

    /**
     * @description The beginning of the time range when the alert rule takes effect within 24 hours per day. This value is a UNIX timestamp. The year, month, and day that are indicated by the timestamp are not displayed in this value. Only the hour, minute, and second are displayed.
     *
     * @example 1480521600000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'noticeEndTime'   => 'NoticeEndTime',
        'noticeStartTime' => 'NoticeStartTime',
        'startTime'       => 'StartTime',
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
        if (null !== $this->noticeEndTime) {
            $res['NoticeEndTime'] = $this->noticeEndTime;
        }
        if (null !== $this->noticeStartTime) {
            $res['NoticeStartTime'] = $this->noticeStartTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NoticeEndTime'])) {
            $model->noticeEndTime = $map['NoticeEndTime'];
        }
        if (isset($map['NoticeStartTime'])) {
            $model->noticeStartTime = $map['NoticeStartTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
