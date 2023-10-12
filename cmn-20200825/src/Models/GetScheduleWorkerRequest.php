<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class GetScheduleWorkerRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scheduleWorkerId;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'scheduleWorkerId' => 'ScheduleWorkerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scheduleWorkerId) {
            $res['ScheduleWorkerId'] = $this->scheduleWorkerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScheduleWorkerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScheduleWorkerId'])) {
            $model->scheduleWorkerId = $map['ScheduleWorkerId'];
        }

        return $model;
    }
}
