<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeActiveOperationMaintainConfResponseBody;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @example 2021-08-11T10:08:27Z
     *
     * @var string
     */
    public $createdTime;

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
     * @example 04:00:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @example 04:00:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @example 2021-08-11T10:08:27Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
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
