<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\notification;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition;
use AlibabaCloud\Tea\Model;

class alertRule extends Model
{
    /**
     * @description Indicates whether the rule is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The rule ID.
     *
     * @example 16035
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the rule.
     *
     * @example error_rule
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
     * @example 279961421580845157
     *
     * @var string
     */
    public $owner;

    /**
     * @description The alert triggering condition.
     *
     * @var triggerCondition
     */
    public $triggerCondition;
    protected $_name = [
        'enabled' => 'Enabled',
        'id' => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return alertRule
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
