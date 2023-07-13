<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList\alarmHistory\contactALIIMs;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList\alarmHistory\contactGroups;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList\alarmHistory\contactMails;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList\alarmHistory\contacts;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList\alarmHistory\contactSmses;
use AlibabaCloud\Tea\Model;

class alarmHistory extends Model
{
    /**
     * @description The timestamp when the alert was triggered. Unit: milliseconds.
     *
     * @example 1640586600000
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description The TradeManager IDs of the alert contacts.
     *
     * > This parameter is valid only on the China site (aliyun.com).
     * @var contactALIIMs
     */
    public $contactALIIMs;

    /**
     * @description The alert contact groups.
     *
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @description The email addresses of the alert contacts.
     *
     * @var contactMails
     */
    public $contactMails;

    /**
     * @description The mobile numbers of the alert contacts.
     *
     * > This parameter is valid only on the China site (aliyun.com).
     * @var contactSmses
     */
    public $contactSmses;

    /**
     * @description The alert contacts that receive alert notifications.
     *
     * @var contacts
     */
    public $contacts;

    /**
     * @description The resources that are monitored.
     *
     * @example {\"instanceId\":\"i-bp1cqhiw1za2****\"}
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an alert is triggered.
     *
     * @example 3
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The expression that is used to trigger alerts.
     *
     * @example $Average>=10
     *
     * @var string
     */
    public $expression;

    /**
     * @description The ID of the application group.
     *
     * @example 7671****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The instance name.
     *
     * @example i-bp1cqhiw1za2****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The duration of the alert. Unit: milliseconds.
     *
     * @example 360133
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The severity level and notification methods of the alert. Valid values:
     *
     *   P4: Alert notifications are sent by using emails and DingTalk chatbots.
     *   OK: No alert is generated.
     *
     * @example P4
     *
     * @var string
     */
    public $level;

    /**
     * @description The metric name.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the alert rule.
     *
     * @example applyTemplate61dc81b5-d357-4cf6-a9b7-9f83c1d5****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @example ECS_Rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The alert status. Valid values:
     *
     *   ALARM: Alerts are triggered.
     *   OK: No alerts are triggered.
     *
     * @example ALARM
     *
     * @var string
     */
    public $state;

    /**
     * @description Indicates whether alerts are muted. Valid values:
     *
     *   2 (default): Alerts are muted and are not triggered within the mute period, even if the condition specified in the alert rule is met.
     *   0: Alerts are triggered or cleared.
     *   1: The alert rule is ineffective.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The threshold of the metric value to trigger or clear an alert.
     *
     * @example 10.58
     *
     * @var string
     */
    public $value;

    /**
     * @description The callback URL.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webhooks;
    protected $_name = [
        'alertTime'       => 'AlertTime',
        'contactALIIMs'   => 'ContactALIIMs',
        'contactGroups'   => 'ContactGroups',
        'contactMails'    => 'ContactMails',
        'contactSmses'    => 'ContactSmses',
        'contacts'        => 'Contacts',
        'dimensions'      => 'Dimensions',
        'evaluationCount' => 'EvaluationCount',
        'expression'      => 'Expression',
        'groupId'         => 'GroupId',
        'instanceName'    => 'InstanceName',
        'lastTime'        => 'LastTime',
        'level'           => 'Level',
        'metricName'      => 'MetricName',
        'namespace'       => 'Namespace',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'state'           => 'State',
        'status'          => 'Status',
        'value'           => 'Value',
        'webhooks'        => 'Webhooks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->contactALIIMs) {
            $res['ContactALIIMs'] = null !== $this->contactALIIMs ? $this->contactALIIMs->toMap() : null;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }
        if (null !== $this->contactMails) {
            $res['ContactMails'] = null !== $this->contactMails ? $this->contactMails->toMap() : null;
        }
        if (null !== $this->contactSmses) {
            $res['ContactSmses'] = null !== $this->contactSmses ? $this->contactSmses->toMap() : null;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toMap() : null;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['ContactALIIMs'])) {
            $model->contactALIIMs = contactALIIMs::fromMap($map['ContactALIIMs']);
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }
        if (isset($map['ContactMails'])) {
            $model->contactMails = contactMails::fromMap($map['ContactMails']);
        }
        if (isset($map['ContactSmses'])) {
            $model->contactSmses = contactSmses::fromMap($map['ContactSmses']);
        }
        if (isset($map['Contacts'])) {
            $model->contacts = contacts::fromMap($map['Contacts']);
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Webhooks'])) {
            $model->webhooks = $map['Webhooks'];
        }

        return $model;
    }
}
