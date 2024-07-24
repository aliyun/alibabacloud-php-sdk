<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\groupRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\matchingRules;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\notifyRule;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\notifyTemplate;
use AlibabaCloud\Tea\Model;

class notificationPolicies extends Model
{
    /**
     * @description Indicates whether simple mode is enabled.
     *
     * @var bool
     */
    public $directedMode;

    /**
     * @description The ID of the escalation policy.
     *
     * @example 123
     *
     * @var int
     */
    public $escalationPolicyId;

    /**
     * @description The grouping rule for alert events.
     *
     * @var groupRule
     */
    public $groupRule;

    /**
     * @description The ID of the notification policy.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The integration ID of the ticket system to which alerts are pushed.
     *
     * @example 34
     *
     * @var int
     */
    public $integrationId;

    /**
     * @description The matching rules for alert events.
     *
     * @var matchingRules[]
     */
    public $matchingRules;

    /**
     * @description The name of the notification policy.
     *
     * @example notificationpolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The notification rule.
     *
     * @var notifyRule
     */
    public $notifyRule;

    /**
     * @description The notification template.
     *
     * @var notifyTemplate
     */
    public $notifyTemplate;

    /**
     * @description Indicates whether the system resends notifications for a long-lasting unresolved alert. Valid values:
     *
     *   `true` (default): The system resends notifications for a long-lasting unresolved alert at a specified time interval.
     *   `false`: The system resends notifications for a long-lasting unresolved alert based on an escalation policy.
     *
     * @example true
     *
     * @var bool
     */
    public $repeat;

    /**
     * @description The time interval at which notifications are resent for a long-lasting unresolved alert. Unit: seconds.
     *
     * @example 600
     *
     * @var int
     */
    public $repeatInterval;

    /**
     * @description Indicates whether the status of an alert automatically changes to Resolved when all events related to the alert change to the Restored state. The system sends a notification to the alert contacts when the alert status changes to Resolved.
     *
     *   `true` (default): The system sends a notification.
     *   `false`: The system does not send a notification.
     *
     * @example true
     *
     * @var bool
     */
    public $sendRecoverMessage;

    /**
     * @description Indicates whether the notification policy is enabled. Valid values: enable and disable.
     *
     * @example enable
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'directedMode'       => 'DirectedMode',
        'escalationPolicyId' => 'EscalationPolicyId',
        'groupRule'          => 'GroupRule',
        'id'                 => 'Id',
        'integrationId'      => 'IntegrationId',
        'matchingRules'      => 'MatchingRules',
        'name'               => 'Name',
        'notifyRule'         => 'NotifyRule',
        'notifyTemplate'     => 'NotifyTemplate',
        'repeat'             => 'Repeat',
        'repeatInterval'     => 'RepeatInterval',
        'sendRecoverMessage' => 'SendRecoverMessage',
        'state'              => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directedMode) {
            $res['DirectedMode'] = $this->directedMode;
        }
        if (null !== $this->escalationPolicyId) {
            $res['EscalationPolicyId'] = $this->escalationPolicyId;
        }
        if (null !== $this->groupRule) {
            $res['GroupRule'] = null !== $this->groupRule ? $this->groupRule->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
        }
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = [];
            if (null !== $this->matchingRules && \is_array($this->matchingRules)) {
                $n = 0;
                foreach ($this->matchingRules as $item) {
                    $res['MatchingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifyRule) {
            $res['NotifyRule'] = null !== $this->notifyRule ? $this->notifyRule->toMap() : null;
        }
        if (null !== $this->notifyTemplate) {
            $res['NotifyTemplate'] = null !== $this->notifyTemplate ? $this->notifyTemplate->toMap() : null;
        }
        if (null !== $this->repeat) {
            $res['Repeat'] = $this->repeat;
        }
        if (null !== $this->repeatInterval) {
            $res['RepeatInterval'] = $this->repeatInterval;
        }
        if (null !== $this->sendRecoverMessage) {
            $res['SendRecoverMessage'] = $this->sendRecoverMessage;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectedMode'])) {
            $model->directedMode = $map['DirectedMode'];
        }
        if (isset($map['EscalationPolicyId'])) {
            $model->escalationPolicyId = $map['EscalationPolicyId'];
        }
        if (isset($map['GroupRule'])) {
            $model->groupRule = groupRule::fromMap($map['GroupRule']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IntegrationId'])) {
            $model->integrationId = $map['IntegrationId'];
        }
        if (isset($map['MatchingRules'])) {
            if (!empty($map['MatchingRules'])) {
                $model->matchingRules = [];
                $n                    = 0;
                foreach ($map['MatchingRules'] as $item) {
                    $model->matchingRules[$n++] = null !== $item ? matchingRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NotifyRule'])) {
            $model->notifyRule = notifyRule::fromMap($map['NotifyRule']);
        }
        if (isset($map['NotifyTemplate'])) {
            $model->notifyTemplate = notifyTemplate::fromMap($map['NotifyTemplate']);
        }
        if (isset($map['Repeat'])) {
            $model->repeat = $map['Repeat'];
        }
        if (isset($map['RepeatInterval'])) {
            $model->repeatInterval = $map['RepeatInterval'];
        }
        if (isset($map['SendRecoverMessage'])) {
            $model->sendRecoverMessage = $map['SendRecoverMessage'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
