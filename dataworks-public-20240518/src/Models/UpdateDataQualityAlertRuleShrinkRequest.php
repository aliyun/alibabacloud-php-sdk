<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataQualityAlertRuleShrinkRequest extends Model
{
    /**
     * @example results.any { r -> r.status == \\"fail\\" && r.rule.severity == \\"High\\" }
     *
     * @var string
     */
    public $condition;

    /**
     * @example 105412
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @example 1000
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $targetShrink;
    protected $_name = [
        'condition' => 'Condition',
        'id' => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return UpdateDataQualityAlertRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
