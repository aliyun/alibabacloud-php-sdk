<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\Dara\Model;

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
    public $noticeStartTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
