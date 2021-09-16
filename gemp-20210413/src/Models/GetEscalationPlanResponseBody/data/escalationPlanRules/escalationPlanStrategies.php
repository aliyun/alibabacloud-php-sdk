<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules\escalationPlanStrategies\noticeObjectList;
use AlibabaCloud\Tea\Model;

class escalationPlanStrategies extends Model
{
    /**
     * @description 通知时间
     *
     * @var int
     */
    public $noticeTime;

    /**
     * @description 升级计划类型
     *
     * @var string
     */
    public $escalationPlanType;

    /**
     * @description 通知对象列表
     *
     * @var noticeObjectList[]
     */
    public $noticeObjectList;

    /**
     * @description 通知对象渠道
     *
     * @var string
     */
    public $noticeChannels;
    protected $_name = [
        'noticeTime'         => 'noticeTime',
        'escalationPlanType' => 'escalationPlanType',
        'noticeObjectList'   => 'noticeObjectList',
        'noticeChannels'     => 'noticeChannels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->noticeTime) {
            $res['noticeTime'] = $this->noticeTime;
        }
        if (null !== $this->escalationPlanType) {
            $res['escalationPlanType'] = $this->escalationPlanType;
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
        if (null !== $this->noticeChannels) {
            $res['noticeChannels'] = $this->noticeChannels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationPlanStrategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['noticeTime'])) {
            $model->noticeTime = $map['noticeTime'];
        }
        if (isset($map['escalationPlanType'])) {
            $model->escalationPlanType = $map['escalationPlanType'];
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
        if (isset($map['noticeChannels'])) {
            $model->noticeChannels = $map['noticeChannels'];
        }

        return $model;
    }
}
