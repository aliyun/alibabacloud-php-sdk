<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data\fineScheduling;

use AlibabaCloud\Tea\Model;

class schedulingTemplateFineShifts extends Model
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
     * @description 用户ID
     *
     * @var string
     */
    public $schedulingUserId;

    /**
     * @description 是否跨天
     *
     * @var bool
     */
    public $skipOneDay;

    /**
     * @description 排班用户名字
     *
     * @var string
     */
    public $schedulingUserName;

    /**
     * @description 班次名称
     *
     * @var string
     */
    public $shiftName;
    protected $_name = [
        'schedulingStartTime' => 'schedulingStartTime',
        'schedulingEndTime'   => 'schedulingEndTime',
        'schedulingOrder'     => 'schedulingOrder',
        'schedulingUserId'    => 'schedulingUserId',
        'skipOneDay'          => 'skipOneDay',
        'schedulingUserName'  => 'schedulingUserName',
        'shiftName'           => 'shiftName',
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
        if (null !== $this->schedulingUserId) {
            $res['schedulingUserId'] = $this->schedulingUserId;
        }
        if (null !== $this->skipOneDay) {
            $res['skipOneDay'] = $this->skipOneDay;
        }
        if (null !== $this->schedulingUserName) {
            $res['schedulingUserName'] = $this->schedulingUserName;
        }
        if (null !== $this->shiftName) {
            $res['shiftName'] = $this->shiftName;
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
        if (isset($map['schedulingStartTime'])) {
            $model->schedulingStartTime = $map['schedulingStartTime'];
        }
        if (isset($map['schedulingEndTime'])) {
            $model->schedulingEndTime = $map['schedulingEndTime'];
        }
        if (isset($map['schedulingOrder'])) {
            $model->schedulingOrder = $map['schedulingOrder'];
        }
        if (isset($map['schedulingUserId'])) {
            $model->schedulingUserId = $map['schedulingUserId'];
        }
        if (isset($map['skipOneDay'])) {
            $model->skipOneDay = $map['skipOneDay'];
        }
        if (isset($map['schedulingUserName'])) {
            $model->schedulingUserName = $map['schedulingUserName'];
        }
        if (isset($map['shiftName'])) {
            $model->shiftName = $map['shiftName'];
        }

        return $model;
    }
}
