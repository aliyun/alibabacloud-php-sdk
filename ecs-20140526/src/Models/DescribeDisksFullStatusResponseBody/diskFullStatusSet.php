<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskEventSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\healthStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\status;
use AlibabaCloud\Tea\Model;

class diskFullStatusSet extends Model
{
    /**
     * @var status
     */
    public $status;

    /**
     * @var diskEventSet[]
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
            $res['DiskEventSet'] = [];
            if (null !== $this->diskEventSet && \is_array($this->diskEventSet)) {
                $n = 0;
                foreach ($this->diskEventSet as $item) {
                    $res['DiskEventSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return diskFullStatusSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['DiskEventSet'])) {
            if (!empty($map['DiskEventSet'])) {
                $model->diskEventSet = [];
                $n                   = 0;
                foreach ($map['DiskEventSet'] as $item) {
                    $model->diskEventSet[$n++] = null !== $item ? diskEventSet::fromMap($item) : $item;
                }
            }
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
