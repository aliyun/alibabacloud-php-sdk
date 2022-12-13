<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest\fineScheduling;

use AlibabaCloud\Tea\Model;

class schedulingTemplateFineShifts extends Model
{
    /**
     * @example 2021-10-01 08:00:00
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
     * @example 2021-09-01 08:00:00
     *
     * @var string
     */
    public $schedulingStartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $schedulingUserId;

    /**
     * @var string
     */
    public $schedulingUserName;

    /**
     * @example false
     *
     * @var bool
     */
    public $skipOneDay;
    protected $_name = [
        'schedulingEndTime'   => 'schedulingEndTime',
        'schedulingOrder'     => 'schedulingOrder',
        'schedulingStartTime' => 'schedulingStartTime',
        'schedulingUserId'    => 'schedulingUserId',
        'schedulingUserName'  => 'schedulingUserName',
        'skipOneDay'          => 'skipOneDay',
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
        if (null !== $this->schedulingUserId) {
            $res['schedulingUserId'] = $this->schedulingUserId;
        }
        if (null !== $this->schedulingUserName) {
            $res['schedulingUserName'] = $this->schedulingUserName;
        }
        if (null !== $this->skipOneDay) {
            $res['skipOneDay'] = $this->skipOneDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulingTemplateFineShifts
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
        if (isset($map['schedulingUserId'])) {
            $model->schedulingUserId = $map['schedulingUserId'];
        }
        if (isset($map['schedulingUserName'])) {
            $model->schedulingUserName = $map['schedulingUserName'];
        }
        if (isset($map['skipOneDay'])) {
            $model->skipOneDay = $map['skipOneDay'];
        }

        return $model;
    }
}
