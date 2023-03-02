<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSpecialDaySchedulingRequest;

use AlibabaCloud\Tea\Model;

class schedulingSpecialDays extends Model
{
    /**
     * @example 2021-08-19 12:00:00
     *
     * @var string
     */
    public $schedulingEndTime;

    /**
     * @var string
     */
    public $schedulingObjectType;

    /**
     * @example 1
     *
     * @var int
     */
    public $schedulingOrder;

    /**
     * @example 2021-08-19 08:00:00
     *
     * @var string
     */
    public $schedulingStartTime;

    /**
     * @example 64
     *
     * @var int
     */
    public $schedulingUserId;

    /**
     * @var int[]
     */
    public $schedulingUserIdList;
    protected $_name = [
        'schedulingEndTime'    => 'schedulingEndTime',
        'schedulingObjectType' => 'schedulingObjectType',
        'schedulingOrder'      => 'schedulingOrder',
        'schedulingStartTime'  => 'schedulingStartTime',
        'schedulingUserId'     => 'schedulingUserId',
        'schedulingUserIdList' => 'schedulingUserIdList',
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
        if (null !== $this->schedulingObjectType) {
            $res['schedulingObjectType'] = $this->schedulingObjectType;
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
        if (null !== $this->schedulingUserIdList) {
            $res['schedulingUserIdList'] = $this->schedulingUserIdList;
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
        if (isset($map['schedulingEndTime'])) {
            $model->schedulingEndTime = $map['schedulingEndTime'];
        }
        if (isset($map['schedulingObjectType'])) {
            $model->schedulingObjectType = $map['schedulingObjectType'];
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
        if (isset($map['schedulingUserIdList'])) {
            if (!empty($map['schedulingUserIdList'])) {
                $model->schedulingUserIdList = $map['schedulingUserIdList'];
            }
        }

        return $model;
    }
}
