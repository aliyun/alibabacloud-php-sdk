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

    /**
     * @var string[]
     */
    public $notifyStrategies;

    /**
     * @var bool
     */
    public $sendToArms;
    protected $_name = [
        'action' => 'action',
        'notification' => 'notification',
        'notifyStrategies' => 'notifyStrategies',
        'sendToArms' => 'sendToArms',
    ];

    public function validate()
    {
        if (null !== $this->action) {
            $this->action->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (\is_array($this->notifyStrategies)) {
            Model::validateArray($this->notifyStrategies);
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

        if (null !== $this->notifyStrategies) {
            if (\is_array($this->notifyStrategies)) {
                $res['notifyStrategies'] = [];
                $n1 = 0;
                foreach ($this->notifyStrategies as $item1) {
                    $res['notifyStrategies'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sendToArms) {
            $res['sendToArms'] = $this->sendToArms;
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

        if (isset($map['notifyStrategies'])) {
            if (!empty($map['notifyStrategies'])) {
                $model->notifyStrategies = [];
                $n1 = 0;
                foreach ($map['notifyStrategies'] as $item1) {
                    $model->notifyStrategies[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sendToArms'])) {
            $model->sendToArms = $map['sendToArms'];
        }

        return $model;
    }
}
