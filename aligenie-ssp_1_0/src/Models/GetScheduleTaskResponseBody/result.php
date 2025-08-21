<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetScheduleTaskResponseBody\result\actionTopicList;

class result extends Model
{
    /**
     * @var actionTopicList[]
     */
    public $actionTopicList;

    /**
     * @var string
     */
    public $cron;

    /**
     * @var string
     */
    public $scheduleEndTime;

    /**
     * @var int
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $scheduleStartTime;

    /**
     * @var string
     */
    public $scheduleType;
    protected $_name = [
        'actionTopicList' => 'ActionTopicList',
        'cron' => 'Cron',
        'scheduleEndTime' => 'ScheduleEndTime',
        'scheduleId' => 'ScheduleId',
        'scheduleStartTime' => 'ScheduleStartTime',
        'scheduleType' => 'ScheduleType',
    ];

    public function validate()
    {
        if (\is_array($this->actionTopicList)) {
            Model::validateArray($this->actionTopicList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionTopicList) {
            if (\is_array($this->actionTopicList)) {
                $res['ActionTopicList'] = [];
                $n1 = 0;
                foreach ($this->actionTopicList as $item1) {
                    $res['ActionTopicList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionTopicList'])) {
            if (!empty($map['ActionTopicList'])) {
                $model->actionTopicList = [];
                $n1 = 0;
                foreach ($map['ActionTopicList'] as $item1) {
                    $model->actionTopicList[$n1] = actionTopicList::fromMap($item1);
                    ++$n1;
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
