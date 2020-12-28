<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\healthStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\scheduledSystemEventSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\status;
use AlibabaCloud\Tea\Model;

class instanceFullStatusSet extends Model
{
    /**
     * @var status
     */
    public $status;

    /**
     * @var scheduledSystemEventSet[]
     */
    public $scheduledSystemEventSet;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var healthStatus
     */
    public $healthStatus;
    protected $_name = [
        'status'                  => 'Status',
        'scheduledSystemEventSet' => 'ScheduledSystemEventSet',
        'instanceId'              => 'InstanceId',
        'healthStatus'            => 'HealthStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->scheduledSystemEventSet) {
            $res['ScheduledSystemEventSet'] = [];
            if (null !== $this->scheduledSystemEventSet && \is_array($this->scheduledSystemEventSet)) {
                $n = 0;
                foreach ($this->scheduledSystemEventSet as $item) {
                    $res['ScheduledSystemEventSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = null !== $this->healthStatus ? $this->healthStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceFullStatusSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['ScheduledSystemEventSet'])) {
            if (!empty($map['ScheduledSystemEventSet'])) {
                $model->scheduledSystemEventSet = [];
                $n                              = 0;
                foreach ($map['ScheduledSystemEventSet'] as $item) {
                    $model->scheduledSystemEventSet[$n++] = null !== $item ? scheduledSystemEventSet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = healthStatus::fromMap($map['HealthStatus']);
        }

        return $model;
    }
}
