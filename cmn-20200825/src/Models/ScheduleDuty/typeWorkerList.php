<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ScheduleDuty;

use AlibabaCloud\Tea\Model;

class typeWorkerList extends Model
{
    /**
     * @example scheduleTypeIdcccc
     *
     * @var string
     */
    public $scheduleTypeId;

    /**
     * @var string[]
     */
    public $scheduleWorkerName;
    protected $_name = [
        'scheduleTypeId'     => 'ScheduleTypeId',
        'scheduleWorkerName' => 'ScheduleWorkerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleTypeId) {
            $res['ScheduleTypeId'] = $this->scheduleTypeId;
        }
        if (null !== $this->scheduleWorkerName) {
            $res['ScheduleWorkerName'] = $this->scheduleWorkerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typeWorkerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleTypeId'])) {
            $model->scheduleTypeId = $map['ScheduleTypeId'];
        }
        if (isset($map['ScheduleWorkerName'])) {
            if (!empty($map['ScheduleWorkerName'])) {
                $model->scheduleWorkerName = $map['ScheduleWorkerName'];
            }
        }

        return $model;
    }
}
