<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class ModifyActiveOperationMaintainConfRequest extends Model
{
    /**
     * @example 1,2,3,4,5,6,7
     *
     * @var string
     */
    public $cycleTime;

    /**
     * @example Week
     *
     * @var string
     */
    public $cycleType;

    /**
     * @example 02:00:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @example 02:00:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'cycleTime'         => 'CycleTime',
        'cycleType'         => 'CycleType',
        'maintainEndTime'   => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'regionId'          => 'RegionId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleTime) {
            $res['CycleTime'] = $this->cycleTime;
        }
        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActiveOperationMaintainConfRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleTime'])) {
            $model->cycleTime = $map['CycleTime'];
        }
        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
