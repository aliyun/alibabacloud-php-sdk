<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\diskEvent;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\instanceEvents;
use AlibabaCloud\Tea\Model;

class localDiskRepairActivity extends Model
{
    /**
     * @var diskEvent
     */
    public $diskEvent;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var instanceEvents
     */
    public $instanceEvents;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'diskEvent'      => 'DiskEvent',
        'diskId'         => 'DiskId',
        'instanceEvents' => 'InstanceEvents',
        'instanceId'     => 'InstanceId',
        'progress'       => 'Progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskEvent) {
            $res['DiskEvent'] = null !== $this->diskEvent ? $this->diskEvent->toMap() : null;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->instanceEvents) {
            $res['InstanceEvents'] = null !== $this->instanceEvents ? $this->instanceEvents->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return localDiskRepairActivity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskEvent'])) {
            $model->diskEvent = diskEvent::fromMap($map['DiskEvent']);
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['InstanceEvents'])) {
            $model->instanceEvents = instanceEvents::fromMap($map['InstanceEvents']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
