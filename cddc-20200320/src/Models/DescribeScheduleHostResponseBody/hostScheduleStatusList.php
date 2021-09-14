<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleHostResponseBody;

use AlibabaCloud\Tea\Model;

class hostScheduleStatusList extends Model
{
    /**
     * @var string
     */
    public $scheduleStatus;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $instanceOutId;

    /**
     * @var string
     */
    public $instanceInId;
    protected $_name = [
        'scheduleStatus'  => 'ScheduleStatus',
        'dedicatedHostId' => 'DedicatedHostId',
        'instanceOutId'   => 'InstanceOutId',
        'instanceInId'    => 'InstanceInId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleStatus) {
            $res['ScheduleStatus'] = $this->scheduleStatus;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->instanceOutId) {
            $res['InstanceOutId'] = $this->instanceOutId;
        }
        if (null !== $this->instanceInId) {
            $res['InstanceInId'] = $this->instanceInId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostScheduleStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleStatus'])) {
            $model->scheduleStatus = $map['ScheduleStatus'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['InstanceOutId'])) {
            $model->instanceOutId = $map['InstanceOutId'];
        }
        if (isset($map['InstanceInId'])) {
            $model->instanceInId = $map['InstanceInId'];
        }

        return $model;
    }
}
