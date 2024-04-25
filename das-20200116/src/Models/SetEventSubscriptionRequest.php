<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class SetEventSubscriptionRequest extends Model
{
    /**
     * @description Specifies whether to enable the event subscription feature. Valid values:
     *
     *   **0**: disables the event subscription feature.
     *   **1**: enables the event subscription feature.
     *
     * @example 1
     *
     * @var string
     */
    public $active;

    /**
     * @description The notification method. Valid values:
     *
     *   **hdm_alarm_sms**: text message.
     *   **dingtalk**: DingTalk chatbot.
     *   **hdm_alarm_sms_and_email**: text message and email.
     *   **hdm_alarm_sms,dingtalk**: text message and DingTalk chatbot.
     *
     * @example hdm_alarm_sms,dingtalk
     *
     * @var string
     */
    public $channelType;

    /**
     * @description The name of the contact group that receives alert notifications. Separate multiple names with commas (,).
     *
     * @example Default contact group
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description The name of the contact who receives alert notifications. Separate multiple names with commas (,).
     *
     * @example Default contact
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The notification rules based on the event type. If you leave this parameter empty, the values of **MinInterval** and **ChannelType** prevail.
     *
     * Specify this parameter in the following format: `{"silenced": {"Event type 1":Specifies whether to enable adaptive silence, "Event type 2":Specify whether to enable adaptive silence},"min_interval": {"Event type 1":Minimum interval between event notifications, "Event type 2":Minimum interval between event notifications},"alert_type": {"Event type 1":"Notification method", "Event type 2":"Notification method"}}`.
     *
     *   **silenced**: specifies whether to enable adaptive silence. After you enable adaptive silence, the interval between consecutive alert notifications for an event is the greater one of the minimum interval specified by **min_interval** and one third of the event duration. Valid values:
     *
     *   1: enables adaptive silence.
     *   2: disables adaptive silence.
     *
     *   **min_interval**: the minimum interval between event notifications. Unit: seconds.
     *
     *   **alert_type**: the notification method. Valid values:
     *
     *   **hdm_alarm_sms**: text message.
     *   **dingtalk**: DingTalk chatbot.
     *   **hdm_alarm_sms_and_email**: text message and email.
     *   **hdm_alarm_sms,dingtalk**: text message and DingTalk chatbot.
     *
     * @example {"silenced": {"AutoScale":1, "SQLThrottle":0, "TimeSeriesAbnormal": 1}, "min_interval": {"AutoScale":300, "SQLThrottle":360, "TimeSeriesAbnormal": 120}, "alert_type": {"AutoScale":"hdm_alarm_sms", "SQLThrottle":"hdm_alarm_sms_and_email", "TimeSeriesAbnormal": "hdm_alarm_sms,dingtalk"}}
     *
     * @var string
     */
    public $dispatchRule;

    /**
     * @description The supported event scenarios. You can set the value to **AllContext**, which indicates that all scenarios are supported.
     *
     * @example AllContext
     *
     * @var string
     */
    public $eventContext;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of event notifications. You can set the value to **zh-CN**, which indicates that event notifications are sent in Chinese.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $lang;

    /**
     * @description The risk level of the events. Valid values:
     *
     *   **Notice**: events that trigger notifications, including events at the **Notice**, **Optimization**, **Warn**, and **Critical** levels.
     *   **Optimization**: events that trigger optimizations, including events at the **Optimization**, **Warn**, and **Critical** levels.
     *   **Warn**: events that trigger warnings, including events at the **Warn** and **Critical** levels.
     *   **Critical**: events that trigger critical warnings.
     *
     * The following content describes the events at each level in detail:
     *
     *   Notice: events that are related to database exceptions for which no suggestions are generated.
     *   Optimization: events for which optimization suggestions are generated based on the status of the database.
     *   Warn: events that may affect the running of the database.
     *   Critical: events that affect the running of the database.
     *
     * @example Optimization
     *
     * @var string
     */
    public $level;

    /**
     * @description The minimum interval between consecutive event notifications. Unit: seconds.
     *
     * @example 60
     *
     * @var string
     */
    public $minInterval;

    /**
     * @description The alert severity based on the event type.
     *
     * Valid values of event types:
     *
     *   **AutoScale**: auto scaling event.
     *   **SQLThrottle**: throttling event.
     *   **TimeSeriesAbnormal**: event for detecting time series anomalies.
     *   **SQLOptimize**: SQL optimization event.
     *   **ResourceOptimize**: storage optimization event.
     *
     * Valid values of alert severities:
     *
     *   **info**
     *   **noticed**
     *   **warning**
     *   **critical**
     *
     * @example {"AutoScale":"critical","SQLThrottle":"info","TimeSeriesAbnormal":"warning"}
     *
     * @var string
     */
    public $severity;
    protected $_name = [
        'active'           => 'Active',
        'channelType'      => 'ChannelType',
        'contactGroupName' => 'ContactGroupName',
        'contactName'      => 'ContactName',
        'dispatchRule'     => 'DispatchRule',
        'eventContext'     => 'EventContext',
        'instanceId'       => 'InstanceId',
        'lang'             => 'Lang',
        'level'            => 'Level',
        'minInterval'      => 'MinInterval',
        'severity'         => 'Severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->dispatchRule) {
            $res['DispatchRule'] = $this->dispatchRule;
        }
        if (null !== $this->eventContext) {
            $res['EventContext'] = $this->eventContext;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->minInterval) {
            $res['MinInterval'] = $this->minInterval;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetEventSubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['DispatchRule'])) {
            $model->dispatchRule = $map['DispatchRule'];
        }
        if (isset($map['EventContext'])) {
            $model->eventContext = $map['EventContext'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MinInterval'])) {
            $model->minInterval = $map['MinInterval'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
