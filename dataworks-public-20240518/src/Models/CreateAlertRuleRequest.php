<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\notification;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition;
use AlibabaCloud\Tea\Model;

class CreateAlertRuleRequest extends Model
{
    /**
     * @description Indicates whether the rule is enabled.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The name of the rule.
     *
     * This parameter is required.
     *
     * @example xm_create_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The configuration for the alert notification.
     *
     * @var notification
     */
    public $notification;

    /**
     * @description The ID of the Alibaba Cloud account used by the owner of the rule.
     *
     * This parameter is required.
     *
     * @example 279114181716147735
     *
     * @var string
     */
    public $owner;

    /**
     * @description The alert triggering condition.
     *
     * This parameter is required.
     *
     * @var triggerCondition
     */
    public $triggerCondition;
    protected $_name = [
        'enabled' => 'Enabled',
        'name' => 'Name',
        'notification' => 'Notification',
        'owner' => 'Owner',
        'triggerCondition' => 'TriggerCondition',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->triggerCondition) {
            $res['TriggerCondition'] = null !== $this->triggerCondition ? $this->triggerCondition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlertRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Notification'])) {
            $model->notification = notification::fromMap($map['Notification']);
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TriggerCondition'])) {
            $model->triggerCondition = triggerCondition::fromMap($map['TriggerCondition']);
        }

        return $model;
    }
}
