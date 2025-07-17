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
     *   If you specify the groupingFields field, alerts with the same field will be sent to contacts in one notification.
     *
     * Sample statement:
     *
     * {
     * "groupWait":5,    // The waiting time for grouping.
     * "groupInterval":30,     // The time interval of grouping.
     * "groupingFields":["alertname"]       // The field that is used to group alert events.
     * }
     *
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
     * @description The matching rules. Format:
     *
     * [
     * {
     * "matchingConditions": [
     * {
     * "value": "test",    // The value of the matching condition.
     * "key": "alertname",     // The key of the matching condition.
     * "operator": "eq"   // The logical operator of the matching condition, including eq (equal to), neq (not equal to), in (contains), nin (does not contain), re (regular expression match), and nre (regular expression mismatch).
     * }
     * ]
     * }
     * ]
     *
     * @example [ 		 { 		 "matchingConditions": [          { 		 "value": "test", 		 "key": "alertname", 		 "operator": "eq"         }       ]     }   ]
     *
     * @var string
     */
    public $matchingRules;

    /**
     * @description The name of the notification policy.
     *
     * This parameter is required.
     *
     * @example notificationpolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description An array of notification rule objects. Format:
     *
     * {
     * "notifyStartTime":"00:00",      // The start time of the notification window.
     * "notifyEndTime":"23:59",       // The end time of the notification window.
     * "notifyChannels":["dingTalk", "email", "sms", "tts", "webhook"],       // The notification methods. Valid values: dingTalk, email, sms, tts, and webhook.
     * "notifyObjects":[{       // An array of notification objects.
     * "notifyObjectType":"CONTACT",       // The type of the notification object. Valid values: CONTACT (contact), CONTACT_GROUP (contact group), ARMS_CONTACT (ARMS contact), ARMS_CONTACT_GROUP (ARMS contact group), DING_ROBOT_GROUP (DingTalk, Lark, WeCom, or IM robot), and CONTACT_SCHEDULE (user on duty defined by a schedule).
     * "notifyObjectId":123,       // The ID of the notification object.
     * "notifyObjectName":"test"       // The name of the notification object.
     * }]
     *
     * This parameter is required.
     *
     * @example {     "notifyStartTime":"00:00",     "notifyEndTime":"23:59",     "notifyChannels":[         "dingTalk",         "email",         "sms",         "tts",         "webhook"     ],     "notifyObjects":[         {             "notifyObjectType":"CONTACT",             "notifyObjectId":123,             "notifyObjectName":"test"         }     ] }
     *
     * @var string
     */
    public $notifyRule;

    /**
     * @description The notification template. The default notification template is provided below the table.
     *
     * @example "robotContent":"{{if .commonLabels.clustername }} > Cluster name: {{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }} > Application name: {{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }}{{ for .alerts }} > {{.annotations.message}} {{if .generatorURL }} [Link]\\({{.generatorURL}}) {{ end }} {{if eq "true" .labels._aliyun_arms_is_denoise_filtered }} (Suspected noise) {{end}} {{end}}"
     *
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
     * @description Specifies whether the status of an alert automatically changes to Resolved when all events related to the alert change to the Restored state. ARMS notifies contacts when the alert status changes to Resolved.
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
        'directedMode' => 'DirectedMode',
        'escalationPolicyId' => 'EscalationPolicyId',
        'groupRule' => 'GroupRule',
        'id' => 'Id',
        'integrationId' => 'IntegrationId',
        'matchingRules' => 'MatchingRules',
        'name' => 'Name',
        'notifyRule' => 'NotifyRule',
        'notifyTemplate' => 'NotifyTemplate',
        'regionId' => 'RegionId',
        'repeat' => 'Repeat',
        'repeatInterval' => 'RepeatInterval',
        'sendRecoverMessage' => 'SendRecoverMessage',
        'state' => 'State',
    ];

    public function validate() {}

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
