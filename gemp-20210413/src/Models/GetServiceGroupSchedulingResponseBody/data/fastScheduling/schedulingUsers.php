<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data\fastScheduling;

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
     * @example 66666
     *
     * @var int
     */
    public $schedulingUserId;

    /**
     * @var int[]
     */
    public $schedulingUserIdList;

    /**
     * @example 张杰
     *
     * @var string
     */
    public $schedulingUserName;
    protected $_name = [
        'schedulingObjectType' => 'schedulingObjectType',
        'schedulingOrder'      => 'schedulingOrder',
        'schedulingUserId'     => 'schedulingUserId',
        'schedulingUserIdList' => 'schedulingUserIdList',
        'schedulingUserName'   => 'schedulingUserName',
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
        if (null !== $this->schedulingUserName) {
            $res['schedulingUserName'] = $this->schedulingUserName;
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
        if (isset($map['schedulingUserName'])) {
            $model->schedulingUserName = $map['schedulingUserName'];
        }

        return $model;
    }
}
