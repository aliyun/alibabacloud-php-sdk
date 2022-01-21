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
     * @var int
     */
    public $alertTime;

    /**
     * @var contactALIIMs
     */
    public $contactALIIMs;

    /**
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @var contactMails
     */
    public $contactMails;

    /**
     * @var contactSmses
     */
    public $contactSmses;

    /**
     * @var contacts
     */
    public $contacts;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $value;

    /**
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
