<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskResponseBody\result\actionTopicList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var actionTopicList[]
     */
    public $actionTopicList;

    /**
     * @example 0 10 20 30 6 ? 2022
     *
     * @var string
     */
    public $cron;

    /**
     * @example 1659169473000
     *
     * @var string
     */
    public $scheduleEndTime;

    /**
     * @example 1234567
     *
     * @var int
     */
    public $scheduleId;

    /**
     * @example 1656577473000
     *
     * @var string
     */
    public $scheduleStartTime;

    /**
     * @example ONCE
     *
     * @var string
     */
    public $scheduleType;
    protected $_name = [
        'actionTopicList'   => 'ActionTopicList',
        'cron'              => 'Cron',
        'scheduleEndTime'   => 'ScheduleEndTime',
        'scheduleId'        => 'ScheduleId',
        'scheduleStartTime' => 'ScheduleStartTime',
        'scheduleType'      => 'ScheduleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionTopicList) {
            $res['ActionTopicList'] = [];
            if (null !== $this->actionTopicList && \is_array($this->actionTopicList)) {
                $n = 0;
                foreach ($this->actionTopicList as $item) {
                    $res['ActionTopicList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->scheduleEndTime) {
            $res['ScheduleEndTime'] = $this->scheduleEndTime;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->scheduleStartTime) {
            $res['ScheduleStartTime'] = $this->scheduleStartTime;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionTopicList'])) {
            if (!empty($map['ActionTopicList'])) {
                $model->actionTopicList = [];
                $n                      = 0;
                foreach ($map['ActionTopicList'] as $item) {
                    $model->actionTopicList[$n++] = null !== $item ? actionTopicList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['ScheduleEndTime'])) {
            $model->scheduleEndTime = $map['ScheduleEndTime'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['ScheduleStartTime'])) {
            $model->scheduleStartTime = $map['ScheduleStartTime'];
        }
        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        return $model;
    }
}
