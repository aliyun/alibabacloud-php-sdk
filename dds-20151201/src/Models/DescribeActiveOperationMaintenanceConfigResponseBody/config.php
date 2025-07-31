<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationMaintenanceConfigResponseBody;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The time when the O\\&M task was created. The timefollows the *yyyy-mm-dd*t*hh:mm:ss*z format. The time is displayed in UTC.
     *
     * @example 2022-01-20T00:05:54+08:00
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The start time of the O\\&M period. The time follows the *hh:mm* z format. The time is displayed in UTC.
     *
     * @example 6
     *
     * @var string
     */
    public $cycleTime;

    /**
     * @description The cyclical type of the O\\&M task.
     *
     * @example ***
     *
     * @var string
     */
    public $cycleType;

    /**
     * @description The end time of the maintenance window. The time follows the *hh:mm*z format. The time is displayed in UTC.
     *
     * @example 04:00:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description The start time of the maintenance window. The time follows the *hh:mm*z format.
     *
     * @example 18:00:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description The time when the O\\&M task was modified. The time follows the *yyyy-mm-dd*t*hh:mm:ss*z format. The time is displayed in Coordinated Universal Time (UTC).
     *
     * @example 2021-07-26T05:50:34.000+00:00
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The state of the O\\&M task. Valid values: **0**: The O\\&M task is in the starting state. **1**: The O\\&M task is in the running state. **2**: The O\\&M task is in the stopped state.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'cycleTime' => 'CycleTime',
        'cycleType' => 'CycleType',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'modifiedTime' => 'ModifiedTime',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
