<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataQualityAlertRuleShrinkRequest extends Model
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
     * @var string
     */
    public $notificationShrink;

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
     * @var string
     */
    public $targetShrink;
    protected $_name = [
        'condition' => 'Condition',
        'notificationShrink' => 'Notification',
        'projectId' => 'ProjectId',
        'targetShrink' => 'Target',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateDataQualityAlertRuleShrinkRequest
     */
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
