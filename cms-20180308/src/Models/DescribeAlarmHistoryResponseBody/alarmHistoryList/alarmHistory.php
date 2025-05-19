<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList\alarmHistory\contactALIIMs;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList\alarmHistory\contactGroups;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList\alarmHistory\contactMails;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList\alarmHistory\contacts;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList\alarmHistory\contactSmses;

class alarmHistory extends Model
{
    /**
     * @var string
     */
    public $alertName;

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
    public $id;

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
    public $preLevel;

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
    public $userId;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $webhooks;
    protected $_name = [
        'alertName' => 'AlertName',
        'alertTime' => 'AlertTime',
        'contactALIIMs' => 'ContactALIIMs',
        'contactGroups' => 'ContactGroups',
        'contactMails' => 'ContactMails',
        'contactSmses' => 'ContactSmses',
        'contacts' => 'Contacts',
        'dimensions' => 'Dimensions',
        'evaluationCount' => 'EvaluationCount',
        'expression' => 'Expression',
        'groupId' => 'GroupId',
        'id' => 'Id',
        'instanceName' => 'InstanceName',
        'lastTime' => 'LastTime',
        'level' => 'Level',
        'metricName' => 'MetricName',
        'namespace' => 'Namespace',
        'preLevel' => 'PreLevel',
        'ruleName' => 'RuleName',
        'state' => 'State',
        'status' => 'Status',
        'userId' => 'UserId',
        'value' => 'Value',
        'webhooks' => 'Webhooks',
    ];

    public function validate()
    {
        if (null !== $this->contactALIIMs) {
            $this->contactALIIMs->validate();
        }
        if (null !== $this->contactGroups) {
            $this->contactGroups->validate();
        }
        if (null !== $this->contactMails) {
            $this->contactMails->validate();
        }
        if (null !== $this->contactSmses) {
            $this->contactSmses->validate();
        }
        if (null !== $this->contacts) {
            $this->contacts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }

        if (null !== $this->contactALIIMs) {
            $res['ContactALIIMs'] = null !== $this->contactALIIMs ? $this->contactALIIMs->toArray($noStream) : $this->contactALIIMs;
        }

        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toArray($noStream) : $this->contactGroups;
        }

        if (null !== $this->contactMails) {
            $res['ContactMails'] = null !== $this->contactMails ? $this->contactMails->toArray($noStream) : $this->contactMails;
        }

        if (null !== $this->contactSmses) {
            $res['ContactSmses'] = null !== $this->contactSmses ? $this->contactSmses->toArray($noStream) : $this->contactSmses;
        }

        if (null !== $this->contacts) {
            $res['Contacts'] = null !== $this->contacts ? $this->contacts->toArray($noStream) : $this->contacts;
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (null !== $this->preLevel) {
            $res['PreLevel'] = $this->preLevel;
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

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['PreLevel'])) {
            $model->preLevel = $map['PreLevel'];
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

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
