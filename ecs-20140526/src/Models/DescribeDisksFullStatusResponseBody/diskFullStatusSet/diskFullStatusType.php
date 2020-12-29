<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\diskEventSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\healthStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\status;
use AlibabaCloud\Tea\Model;

class diskFullStatusType extends Model
{
    /**
     * @var status
     */
    public $status;

    /**
     * @var diskEventSet
     */
    public $diskEventSet;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var healthStatus
     */
    public $healthStatus;
    protected $_name = [
        'status'       => 'Status',
        'diskEventSet' => 'DiskEventSet',
        'device'       => 'Device',
        'diskId'       => 'DiskId',
        'instanceId'   => 'InstanceId',
        'healthStatus' => 'HealthStatus',
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
        if (null !== $this->diskEventSet) {
            $res['DiskEventSet'] = null !== $this->diskEventSet ? $this->diskEventSet->toMap() : null;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
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
     * @return diskFullStatusType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['DiskEventSet'])) {
            $model->diskEventSet = diskEventSet::fromMap($map['DiskEventSet']);
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
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
