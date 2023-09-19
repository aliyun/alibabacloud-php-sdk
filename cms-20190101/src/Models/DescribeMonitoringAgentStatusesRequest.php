<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentStatusesRequest extends Model
{
    /**
     * @description The ID of the availability monitoring task.
     *
     * @example 126****
     *
     * @var string
     */
    public $hostAvailabilityTaskId;

    /**
     * @description The instance IDs. Separate multiple instance IDs with commas (,).
     *
     * @example i-hp3dunahluwajv6f****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostAvailabilityTaskId' => 'HostAvailabilityTaskId',
        'instanceIds'            => 'InstanceIds',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentStatusesRequest
     */
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
