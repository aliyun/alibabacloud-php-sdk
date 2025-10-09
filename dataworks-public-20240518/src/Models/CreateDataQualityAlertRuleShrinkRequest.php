<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataQualityAlertRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $targetShrink;
    protected $_name = [
        'condition' => 'Condition',
        'notificationShrink' => 'Notification',
        'projectId' => 'ProjectId',
        'targetShrink' => 'Target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->targetShrink) {
            $res['Target'] = $this->targetShrink;
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
            $model->notificationShrink = $map['Notification'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Target'])) {
            $model->targetShrink = $map['Target'];
        }

        return $model;
    }
}
