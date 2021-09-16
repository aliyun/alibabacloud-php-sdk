<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fineScheduling;

use AlibabaCloud\Tea\Model;

class schedulingFineShifts extends Model
{
    /**
     * @description 排班开始时间
     *
     * @var string
     */
    public $schedulingStartTime;

    /**
     * @description 排班结束时间
     *
     * @var string
     */
    public $schedulingEndTime;

    /**
     * @description 排班顺序
     *
     * @var int
     */
    public $schedulingOrder;

    /**
     * @description 是否跨天
     *
     * @var bool
     */
    public $skipOneDay;

    /**
     * @description 循环次序
     *
     * @var int
     */
    public $cycleOrder;

    /**
     * @description 班次名称
     *
     * @var string
     */
    public $shiftName;

    /**
     * @description 排班用户ID
     *
     * @var int
     */
    public $schedulingUserId;
    protected $_name = [
        'schedulingStartTime' => 'schedulingStartTime',
        'schedulingEndTime'   => 'schedulingEndTime',
        'schedulingOrder'     => 'schedulingOrder',
        'skipOneDay'          => 'skipOneDay',
        'cycleOrder'          => 'cycleOrder',
        'shiftName'           => 'shiftName',
        'schedulingUserId'    => 'schedulingUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulingStartTime) {
            $res['schedulingStartTime'] = $this->schedulingStartTime;
        }
        if (null !== $this->schedulingEndTime) {
            $res['schedulingEndTime'] = $this->schedulingEndTime;
        }
        if (null !== $this->schedulingOrder) {
            $res['schedulingOrder'] = $this->schedulingOrder;
        }
        if (null !== $this->skipOneDay) {
            $res['skipOneDay'] = $this->skipOneDay;
        }
        if (null !== $this->cycleOrder) {
            $res['cycleOrder'] = $this->cycleOrder;
        }
        if (null !== $this->shiftName) {
            $res['shiftName'] = $this->shiftName;
        }
        if (null !== $this->schedulingUserId) {
            $res['schedulingUserId'] = $this->schedulingUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulingFineShifts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['schedulingStartTime'])) {
            $model->schedulingStartTime = $map['schedulingStartTime'];
        }
        if (isset($map['schedulingEndTime'])) {
            $model->schedulingEndTime = $map['schedulingEndTime'];
        }
        if (isset($map['schedulingOrder'])) {
            $model->schedulingOrder = $map['schedulingOrder'];
        }
        if (isset($map['skipOneDay'])) {
            $model->skipOneDay = $map['skipOneDay'];
        }
        if (isset($map['cycleOrder'])) {
            $model->cycleOrder = $map['cycleOrder'];
        }
        if (isset($map['shiftName'])) {
            $model->shiftName = $map['shiftName'];
        }
        if (isset($map['schedulingUserId'])) {
            $model->schedulingUserId = $map['schedulingUserId'];
        }

        return $model;
    }
}
