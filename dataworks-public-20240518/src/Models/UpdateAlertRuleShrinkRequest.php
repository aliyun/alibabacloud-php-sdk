<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlertRuleShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enable the rule.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The rule ID.
     *
     * @example 105412
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the rule.
     *
     * @example collection_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The configuration for the alert notification.
     *
     * @var string
     */
    public $notificationShrink;

    /**
     * @description The ID of the Alibaba Cloud account used by the owner of the rule.
     *
     * @example 193379****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The alert triggering condition.
     *
     * @var string
     */
    public $triggerConditionShrink;
    protected $_name = [
        'enabled' => 'Enabled',
        'id' => 'Id',
        'name' => 'Name',
        'notificationShrink' => 'Notification',
        'owner' => 'Owner',
        'triggerConditionShrink' => 'TriggerCondition',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->triggerConditionShrink) {
            $res['TriggerCondition'] = $this->triggerConditionShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlertRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TriggerCondition'])) {
            $model->triggerConditionShrink = $map['TriggerCondition'];
        }

        return $model;
    }
}
