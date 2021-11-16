<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules\escalationPlanStrategies\noticeObjectList;
use AlibabaCloud\Tea\Model;

class escalationPlanStrategies extends Model
{
    /**
     * @description 升级计划类型
     *
     * @var string
     */
    public $escalationPlanType;

    /**
     * @description 通知对象渠道
     *
     * @var string
     */
    public $noticeChannels;

    /**
     * @description 通知对象列表
     *
     * @var noticeObjectList[]
     */
    public $noticeObjectList;

    /**
     * @description 通知时间
     *
     * @var int
     */
    public $noticeTime;
    protected $_name = [
        'escalationPlanType' => 'escalationPlanType',
        'noticeChannels'     => 'noticeChannels',
        'noticeObjectList'   => 'noticeObjectList',
        'noticeTime'         => 'noticeTime',
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
        if (isset($map['escalationPlanType'])) {
            $model->escalationPlanType = $map['escalationPlanType'];
        }
        if (isset($map['noticeChannels'])) {
            $model->noticeChannels = $map['noticeChannels'];
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

        return $model;
    }
}
