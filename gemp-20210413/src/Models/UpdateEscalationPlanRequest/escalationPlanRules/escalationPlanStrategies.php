<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest\escalationPlanRules;

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
     * @description 通知对象id
     *
     * @var int[]
     */
    public $noticeObjects;

    /**
     * @description 通知渠道
     *
     * @var string[]
     */
    public $noticeChannels;
    protected $_name = [
        'noticeTime'     => 'noticeTime',
        'noticeObjects'  => 'noticeObjects',
        'noticeChannels' => 'noticeChannels',
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
        if (null !== $this->noticeObjects) {
            $res['noticeObjects'] = $this->noticeObjects;
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
        if (isset($map['noticeObjects'])) {
            if (!empty($map['noticeObjects'])) {
                $model->noticeObjects = $map['noticeObjects'];
            }
        }
        if (isset($map['noticeChannels'])) {
            if (!empty($map['noticeChannels'])) {
                $model->noticeChannels = $map['noticeChannels'];
            }
        }

        return $model;
    }
}
