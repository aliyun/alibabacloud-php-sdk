<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\Tea\Model;

class notice extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $noticeEndTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $noticeStartTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'noticeEndTime'   => 'NoticeEndTime',
        'startTime'       => 'StartTime',
        'noticeStartTime' => 'NoticeStartTime',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->noticeStartTime) {
            $res['NoticeStartTime'] = $this->noticeStartTime;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['NoticeStartTime'])) {
            $model->noticeStartTime = $map['NoticeStartTime'];
        }

        return $model;
    }
}
