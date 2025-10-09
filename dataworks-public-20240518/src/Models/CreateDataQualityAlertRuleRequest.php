<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityAlertRuleRequest\notification;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityAlertRuleRequest\target;

class CreateDataQualityAlertRuleRequest extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var notification
     */
    public $notification;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var target
     */
    public $target;
    protected $_name = [
        'condition' => 'Condition',
        'notification' => 'Notification',
        'projectId' => 'ProjectId',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['Notification'])) {
            $model->notification = notification::fromMap($map['Notification']);
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        return $model;
    }
}
