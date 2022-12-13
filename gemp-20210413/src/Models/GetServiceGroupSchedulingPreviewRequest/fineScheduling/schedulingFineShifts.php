<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest\fineScheduling;

use AlibabaCloud\Tea\Model;

class schedulingFineShifts extends Model
{
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
     * @example 早班
     *
     * @var string
     */
    public $shiftName;
    protected $_name = [
        'schedulingEndTime'   => 'schedulingEndTime',
        'schedulingOrder'     => 'schedulingOrder',
        'schedulingStartTime' => 'schedulingStartTime',
        'shiftName'           => 'shiftName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulingEndTime) {
            $res['schedulingEndTime'] = $this->schedulingEndTime;
        }
        if (null !== $this->schedulingOrder) {
            $res['schedulingOrder'] = $this->schedulingOrder;
        }
        if (null !== $this->schedulingStartTime) {
            $res['schedulingStartTime'] = $this->schedulingStartTime;
        }
        if (null !== $this->shiftName) {
            $res['shiftName'] = $this->shiftName;
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
        if (isset($map['schedulingEndTime'])) {
            $model->schedulingEndTime = $map['schedulingEndTime'];
        }
        if (isset($map['schedulingOrder'])) {
            $model->schedulingOrder = $map['schedulingOrder'];
        }
        if (isset($map['schedulingStartTime'])) {
            $model->schedulingStartTime = $map['schedulingStartTime'];
        }
        if (isset($map['shiftName'])) {
            $model->shiftName = $map['shiftName'];
        }

        return $model;
    }
}
