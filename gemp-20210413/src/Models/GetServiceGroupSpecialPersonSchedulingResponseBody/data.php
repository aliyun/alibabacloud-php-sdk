<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSpecialPersonSchedulingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description 排班日期
     *
     * @var string
     */
    public $schedulingDate;

    /**
     * @description 服务组id
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @description 服务组名字
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @description 排班用户ID
     *
     * @var int
     */
    public $schedulingUserId;
    protected $_name = [
        'schedulingStartTime' => 'schedulingStartTime',
        'schedulingEndTime'   => 'schedulingEndTime',
        'schedulingDate'      => 'schedulingDate',
        'serviceGroupId'      => 'serviceGroupId',
        'serviceGroupName'    => 'serviceGroupName',
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
        if (null !== $this->schedulingDate) {
            $res['schedulingDate'] = $this->schedulingDate;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->schedulingUserId) {
            $res['schedulingUserId'] = $this->schedulingUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['schedulingDate'])) {
            $model->schedulingDate = $map['schedulingDate'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['schedulingUserId'])) {
            $model->schedulingUserId = $map['schedulingUserId'];
        }

        return $model;
    }
}
