<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponseBody\scheduleInformation\scheduleItems;

class scheduleInformation extends Model
{
    /**
     * @var string
     */
    public $error;

    /**
     * @var scheduleItems[]
     */
    public $scheduleItems;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'error' => 'Error',
        'scheduleItems' => 'ScheduleItems',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->scheduleItems)) {
            Model::validateArray($this->scheduleItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->scheduleItems) {
            if (\is_array($this->scheduleItems)) {
                $res['ScheduleItems'] = [];
                $n1 = 0;
                foreach ($this->scheduleItems as $item1) {
                    $res['ScheduleItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['ScheduleItems'])) {
            if (!empty($map['ScheduleItems'])) {
                $model->scheduleItems = [];
                $n1 = 0;
                foreach ($map['ScheduleItems'] as $item1) {
                    $model->scheduleItems[$n1++] = scheduleItems::fromMap($item1);
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
