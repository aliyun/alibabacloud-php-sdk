<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionRequest\notifyStrategyList\strategies;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description 等级
     *
     * @var string
     */
    public $level;

    /**
     * @description 影响程度
     *
     * @var string
     */
    public $effection;

    /**
     * @description 故障通知类型
     *
     * @var string
     */
    public $problemNotifyType;

    /**
     * @description 事件动作
     *
     * @var string
     */
    public $action;
    protected $_name = [
        'level'             => 'level',
        'effection'         => 'effection',
        'problemNotifyType' => 'problemNotifyType',
        'action'            => 'action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->effection) {
            $res['effection'] = $this->effection;
        }
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['effection'])) {
            $model->effection = $map['effection'];
        }
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
        }
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        return $model;
    }
}
