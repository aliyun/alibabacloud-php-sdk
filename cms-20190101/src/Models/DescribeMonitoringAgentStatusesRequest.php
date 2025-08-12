<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeMonitoringAgentStatusesRequest extends Model
{
    /**
     * @var string
     */
    public $hostAvailabilityTaskId;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostAvailabilityTaskId' => 'HostAvailabilityTaskId',
        'instanceIds' => 'InstanceIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostAvailabilityTaskId) {
            $res['HostAvailabilityTaskId'] = $this->hostAvailabilityTaskId;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['HostAvailabilityTaskId'])) {
            $model->hostAvailabilityTaskId = $map['HostAvailabilityTaskId'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
