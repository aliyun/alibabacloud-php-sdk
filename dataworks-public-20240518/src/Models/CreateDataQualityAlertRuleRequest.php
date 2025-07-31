<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityAlertRuleRequest\notification;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityAlertRuleRequest\target;
use AlibabaCloud\Tea\Model;

class CreateDataQualityAlertRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example results.any { r -> r.status == \\"fail\\" && r.rule.severity == \\"High\\" }
     *
     * @var string
     */
    public $condition;

    /**
     * @description This parameter is required.
     *
     * @var notification
     */
    public $notification;

    /**
     * @description This parameter is required.
     *
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @var target
     */
    public $target;
    protected $_name = [
        'condition' => 'Condition',
        'notification' => 'Notification',
        'projectId' => 'ProjectId',
        'target' => 'Target',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataQualityAlertRuleRequest
     */
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
