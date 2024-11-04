<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class AlertRuleSend extends Model
{
    /**
     * @var AlertRuleAction
     */
    public $action;

    /**
     * @var AlertRuleNotification
     */
    public $notification;
    protected $_name = [
        'action'       => 'action',
        'notification' => 'notification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = null !== $this->action ? $this->action->toMap() : null;
        }
        if (null !== $this->notification) {
            $res['notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleSend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = AlertRuleAction::fromMap($map['action']);
        }
        if (isset($map['notification'])) {
            $model->notification = AlertRuleNotification::fromMap($map['notification']);
        }

        return $model;
    }
}
