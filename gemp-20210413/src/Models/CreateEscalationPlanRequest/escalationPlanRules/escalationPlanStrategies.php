<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanRequest\escalationPlanRules;

use AlibabaCloud\Tea\Model;

class escalationPlanStrategies extends Model
{
    /**
     * @description 升级通知策略
     *
     * @var string[]
     */
    public $noticeChannels;

    /**
     * @description 升级通知对象id列表
     *
     * @var int[]
     */
    public $noticeObjects;

    /**
     * @description 通知时间
     *
     * @var string
     */
    public $noticeTime;
    protected $_name = [
        'noticeChannels' => 'noticeChannels',
        'noticeObjects'  => 'noticeObjects',
        'noticeTime'     => 'noticeTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->noticeChannels) {
            $res['noticeChannels'] = $this->noticeChannels;
        }
        if (null !== $this->noticeObjects) {
            $res['noticeObjects'] = $this->noticeObjects;
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
        if (isset($map['noticeChannels'])) {
            if (!empty($map['noticeChannels'])) {
                $model->noticeChannels = $map['noticeChannels'];
            }
        }
        if (isset($map['noticeObjects'])) {
            if (!empty($map['noticeObjects'])) {
                $model->noticeObjects = $map['noticeObjects'];
            }
        }
        if (isset($map['noticeTime'])) {
            $model->noticeTime = $map['noticeTime'];
        }

        return $model;
    }
}
