<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateNotificationPolicyRequest extends Model
{
    /**
     * @description Specifies whether to enable simple mode.
     *
     * @example false
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
     * @description An array of alert event group objects.
     *
     *   If you do not specify the groupingFields field, all alerts will be sent to contacts based on `alertname`.
     *
     *   If you specify the groupingFields field, alerts with the same field will be sent to contacts in one notification.
     *
     * ```
     * @example { 	"groupWait":5, 	"groupInterval":30, 	"groupingFields":["alertname"] }
     *
     * @var string
     */
    public $groupRule;

    /**
     * @description The ID of the notification policy.
     *
     *   If you do not specify this parameter, a new notification policy is created.
     *   If you specify this parameter, the specified notification policy is modified.
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
     * @description The matching rules. Sample statement:
     *
     * ```
     * @example [ 		 { 		 "matchingConditions": [          { 		 "value": "test", 		 "key": "alertname", 		 "operator": "eq"         }       ]     }   ]
     *
     * @var string
     */
    public $matchingRules;

    /**
     * @description The name of the notification policy.
     *
     * This parameter is required.
     * @example notificationpolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description An array of notification rule objects. Format:
     *
     * This parameter is required.
     * @example {     "notifyStartTime":"00:00",     "notifyEndTime":"23:59",     "notifyChannels":[         "dingTalk",         "email",         "sms",         "tts",         "webhook"     ],     "notifyObjects":[         {             "notifyObjectType":"CONTACT",             "notifyObjectId":123,             "notifyObjectName":"test"         }     ] }
     *
     * @var string
     */
    public $notifyRule;

    /**
     * @description The notification template. The default notification template is provided below the table.
     *
     * @example {{if .commonLabels.clustername }}
     *
     * {{end}}
     * @var string
     */
    public $notifyTemplate;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to resend a notification for a long-lasting unresolved alert. Default value: true. Valid values:
     *
     *   `true`: If you set this parameter to `true`, you must set **RepeatInterval**.
     *   `false`: If you set this parameter to `false`, you must set **EscalationPolicyId**.
     *
     * @example true
     *
     * @var bool
     */
    public $repeat;

    /**
     * @description The time interval at which a notification is resent for a long-lasting unresolved alert. Unit: seconds.
     *
     * @example 600
     *
     * @var int
     */
    public $repeatInterval;

    /**
     * @description Indicates whether the system sends a notification to the contacts when the status of an alert changes to Resolved. Default value: true. Valid values:
     *
     *   `true`: The system sends a notification.
     *   `false`: The system does not send a notification.
     *
     * @example true
     *
     * @var bool
     */
    public $sendRecoverMessage;

    /**
     * @description Specifies whether to enable the notification policy. Valid values: enable and disable.
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
        'regionId'           => 'RegionId',
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
            $res['GroupRule'] = $this->groupRule;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
        }
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = $this->matchingRules;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifyRule) {
            $res['NotifyRule'] = $this->notifyRule;
        }
        if (null !== $this->notifyTemplate) {
            $res['NotifyTemplate'] = $this->notifyTemplate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return CreateOrUpdateNotificationPolicyRequest
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
            $model->groupRule = $map['GroupRule'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IntegrationId'])) {
            $model->integrationId = $map['IntegrationId'];
        }
        if (isset($map['MatchingRules'])) {
            $model->matchingRules = $map['MatchingRules'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NotifyRule'])) {
            $model->notifyRule = $map['NotifyRule'];
        }
        if (isset($map['NotifyTemplate'])) {
            $model->notifyTemplate = $map['NotifyTemplate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
