<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data\unFinishEscalationPlan\noticeObjectList;
use AlibabaCloud\Tea\Model;

class unFinishEscalationPlan extends Model
{
    /**
     * @description 升级策略类型 UN_ACKNOWLEDGE
     *
     * @var string
     */
    public $escalationPlanType;

    /**
     * @description 分配渠道
     *
     * @var string[]
     */
    public $noticeChannels;

    /**
     * @description 用户信息
     *
     * @var noticeObjectList[]
     */
    public $noticeObjectList;

    /**
     * @description 延迟时间
     *
     * @var int
     */
    public $noticeTime;

    /**
     * @description 开始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 规则触发状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'escalationPlanType' => 'escalationPlanType',
        'noticeChannels'     => 'noticeChannels',
        'noticeObjectList'   => 'noticeObjectList',
        'noticeTime'         => 'noticeTime',
        'startTime'          => 'startTime',
        'status'             => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanType) {
            $res['escalationPlanType'] = $this->escalationPlanType;
        }
        if (null !== $this->noticeChannels) {
            $res['noticeChannels'] = $this->noticeChannels;
        }
        if (null !== $this->noticeObjectList) {
            $res['noticeObjectList'] = [];
            if (null !== $this->noticeObjectList && \is_array($this->noticeObjectList)) {
                $n = 0;
                foreach ($this->noticeObjectList as $item) {
                    $res['noticeObjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->noticeTime) {
            $res['noticeTime'] = $this->noticeTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unFinishEscalationPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationPlanType'])) {
            $model->escalationPlanType = $map['escalationPlanType'];
        }
        if (isset($map['noticeChannels'])) {
            if (!empty($map['noticeChannels'])) {
                $model->noticeChannels = $map['noticeChannels'];
            }
        }
        if (isset($map['noticeObjectList'])) {
            if (!empty($map['noticeObjectList'])) {
                $model->noticeObjectList = [];
                $n                       = 0;
                foreach ($map['noticeObjectList'] as $item) {
                    $model->noticeObjectList[$n++] = null !== $item ? noticeObjectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['noticeTime'])) {
            $model->noticeTime = $map['noticeTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
