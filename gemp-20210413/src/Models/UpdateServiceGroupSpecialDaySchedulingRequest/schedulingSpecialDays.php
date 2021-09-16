<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSpecialDaySchedulingRequest;

use AlibabaCloud\Tea\Model;

class schedulingSpecialDays extends Model
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
     * @description 排班用户ID
     *
     * @var int
     */
    public $schedulingUserId;

    /**
     * @description 班次顺序
     *
     * @var int
     */
    public $schedulingOrder;
    protected $_name = [
        'schedulingStartTime' => 'schedulingStartTime',
        'schedulingEndTime'   => 'schedulingEndTime',
        'schedulingUserId'    => 'schedulingUserId',
        'schedulingOrder'     => 'schedulingOrder',
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
        if (null !== $this->schedulingUserId) {
            $res['schedulingUserId'] = $this->schedulingUserId;
        }
        if (null !== $this->schedulingOrder) {
            $res['schedulingOrder'] = $this->schedulingOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulingSpecialDays
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
        if (isset($map['schedulingUserId'])) {
            $model->schedulingUserId = $map['schedulingUserId'];
        }
        if (isset($map['schedulingOrder'])) {
            $model->schedulingOrder = $map['schedulingOrder'];
        }

        return $model;
    }
}
