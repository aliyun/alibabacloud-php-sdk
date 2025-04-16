<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\healthStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\status;

class instanceFullStatusType extends Model
{
    /**
     * @var healthStatus
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var scheduledSystemEventSet
     */
    public $scheduledSystemEventSet;

    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'healthStatus' => 'HealthStatus',
        'instanceId' => 'InstanceId',
        'scheduledSystemEventSet' => 'ScheduledSystemEventSet',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->healthStatus) {
            $this->healthStatus->validate();
        }
        if (null !== $this->scheduledSystemEventSet) {
            $this->scheduledSystemEventSet->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = null !== $this->healthStatus ? $this->healthStatus->toArray($noStream) : $this->healthStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->scheduledSystemEventSet) {
            $res['ScheduledSystemEventSet'] = null !== $this->scheduledSystemEventSet ? $this->scheduledSystemEventSet->toArray($noStream) : $this->scheduledSystemEventSet;
        }

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = healthStatus::fromMap($map['HealthStatus']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ScheduledSystemEventSet'])) {
            $model->scheduledSystemEventSet = scheduledSystemEventSet::fromMap($map['ScheduledSystemEventSet']);
        }

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
