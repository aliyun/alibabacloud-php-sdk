<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSchedulingRequest\fastScheduling;

use AlibabaCloud\Tea\Model;

class schedulingUsers extends Model
{
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
     * @example 6666
     *
     * @var int
     */
    public $schedulingUserId;

    /**
     * @var int[]
     */
    public $schedulingUserIdList;
    protected $_name = [
        'schedulingObjectType' => 'schedulingObjectType',
        'schedulingOrder'      => 'schedulingOrder',
        'schedulingUserId'     => 'schedulingUserId',
        'schedulingUserIdList' => 'schedulingUserIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulingObjectType) {
            $res['schedulingObjectType'] = $this->schedulingObjectType;
        }
        if (null !== $this->schedulingOrder) {
            $res['schedulingOrder'] = $this->schedulingOrder;
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
     * @return schedulingUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['schedulingObjectType'])) {
            $model->schedulingObjectType = $map['schedulingObjectType'];
        }
        if (isset($map['schedulingOrder'])) {
            $model->schedulingOrder = $map['schedulingOrder'];
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
