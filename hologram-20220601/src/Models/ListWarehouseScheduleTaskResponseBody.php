<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleTaskResponseBody\scheduleTaskList;

class ListWarehouseScheduleTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scheduleTaskList[]
     */
    public $scheduleTaskList;
    protected $_name = [
        'requestId' => 'RequestId',
        'scheduleTaskList' => 'ScheduleTaskList',
    ];

    public function validate()
    {
        if (\is_array($this->scheduleTaskList)) {
            Model::validateArray($this->scheduleTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scheduleTaskList) {
            if (\is_array($this->scheduleTaskList)) {
                $res['ScheduleTaskList'] = [];
                $n1 = 0;
                foreach ($this->scheduleTaskList as $item1) {
                    $res['ScheduleTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScheduleTaskList'])) {
            if (!empty($map['ScheduleTaskList'])) {
                $model->scheduleTaskList = [];
                $n1 = 0;
                foreach ($map['ScheduleTaskList'] as $item1) {
                    $model->scheduleTaskList[$n1] = scheduleTaskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
