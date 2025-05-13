<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

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
        'action' => 'action',
        'notification' => 'notification',
    ];

    public function validate()
    {
        if (null !== $this->action) {
            $this->action->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = null !== $this->action ? $this->action->toArray($noStream) : $this->action;
        }

        if (null !== $this->notification) {
            $res['notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
