<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fineScheduling;

use AlibabaCloud\Tea\Model;

class schedulingFineShifts extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $cycleOrder;

    /**
     * @example 2020-10-13
     *
     * @var string
     */
    public $schedulingEndTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $schedulingOrder;

    /**
     * @example 2020-08-13
     *
     * @var string
     */
    public $schedulingStartTime;

    /**
     * @example 11
     *
     * @var int
     */
    public $schedulingUserId;

    /**
     * @example 早班
     *
     * @var string
     */
    public $shiftName;

    /**
     * @example fasle
     *
     * @var bool
     */
    public $skipOneDay;
    protected $_name = [
        'cycleOrder'          => 'cycleOrder',
        'schedulingEndTime'   => 'schedulingEndTime',
        'schedulingOrder'     => 'schedulingOrder',
        'schedulingStartTime' => 'schedulingStartTime',
        'schedulingUserId'    => 'schedulingUserId',
        'shiftName'           => 'shiftName',
        'skipOneDay'          => 'skipOneDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleOrder) {
            $res['cycleOrder'] = $this->cycleOrder;
        }
        if (null !== $this->schedulingEndTime) {
            $res['schedulingEndTime'] = $this->schedulingEndTime;
        }
        if (null !== $this->schedulingOrder) {
            $res['schedulingOrder'] = $this->schedulingOrder;
        }
        if (null !== $this->schedulingStartTime) {
            $res['schedulingStartTime'] = $this->schedulingStartTime;
        }
        if (null !== $this->schedulingUserId) {
            $res['schedulingUserId'] = $this->schedulingUserId;
        }
        if (null !== $this->shiftName) {
            $res['shiftName'] = $this->shiftName;
        }
        if (null !== $this->skipOneDay) {
            $res['skipOneDay'] = $this->skipOneDay;
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
        if (isset($map['cycleOrder'])) {
            $model->cycleOrder = $map['cycleOrder'];
        }
        if (isset($map['schedulingEndTime'])) {
            $model->schedulingEndTime = $map['schedulingEndTime'];
        }
        if (isset($map['schedulingOrder'])) {
            $model->schedulingOrder = $map['schedulingOrder'];
        }
        if (isset($map['schedulingStartTime'])) {
            $model->schedulingStartTime = $map['schedulingStartTime'];
        }
        if (isset($map['schedulingUserId'])) {
            $model->schedulingUserId = $map['schedulingUserId'];
        }
        if (isset($map['shiftName'])) {
            $model->shiftName = $map['shiftName'];
        }
        if (isset($map['skipOneDay'])) {
            $model->skipOneDay = $map['skipOneDay'];
        }

        return $model;
    }
}
