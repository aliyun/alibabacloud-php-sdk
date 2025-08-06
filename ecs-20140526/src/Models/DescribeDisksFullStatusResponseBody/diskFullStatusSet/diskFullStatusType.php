<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\diskEventSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\healthStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\status;

class diskFullStatusType extends Model
{
    /**
     * @var string
     */
    public $device;

    /**
     * @var diskEventSet
     */
    public $diskEventSet;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var healthStatus
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'device' => 'Device',
        'diskEventSet' => 'DiskEventSet',
        'diskId' => 'DiskId',
        'healthStatus' => 'HealthStatus',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->diskEventSet) {
            $this->diskEventSet->validate();
        }
        if (null !== $this->healthStatus) {
            $this->healthStatus->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }

        if (null !== $this->diskEventSet) {
            $res['DiskEventSet'] = null !== $this->diskEventSet ? $this->diskEventSet->toArray($noStream) : $this->diskEventSet;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = null !== $this->healthStatus ? $this->healthStatus->toArray($noStream) : $this->healthStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }

        if (isset($map['DiskEventSet'])) {
            $model->diskEventSet = diskEventSet::fromMap($map['DiskEventSet']);
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['HealthStatus'])) {
            $model->healthStatus = healthStatus::fromMap($map['HealthStatus']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
