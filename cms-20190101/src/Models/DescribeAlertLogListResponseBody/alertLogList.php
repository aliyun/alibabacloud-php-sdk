<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\dimensions;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\escalation;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\extendedInfo;
use AlibabaCloud\Tea\Model;

class alertLogList extends Model
{
    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string[]
     */
    public $contactALIIWWList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $levelChange;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var extendedInfo[]
     */
    public $extendedInfo;

    /**
     * @var string[]
     */
    public $dingdingWebhookList;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string[]
     */
    public $contactMailList;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var string[]
     */
    public $contactSMSList;

    /**
     * @var string
     */
    public $sendStatus;

    /**
     * @var string[]
     */
    public $contactOnCallList;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string[]
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var escalation
     */
    public $escalation;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $contactDingList;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string[]
     */
    public $webhookList;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $alertTime;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'metricName'          => 'MetricName',
        'eventName'           => 'EventName',
        'contactALIIWWList'   => 'ContactALIIWWList',
        'message'             => 'Message',
        'levelChange'         => 'LevelChange',
        'ruleId'              => 'RuleId',
        'extendedInfo'        => 'ExtendedInfo',
        'dingdingWebhookList' => 'DingdingWebhookList',
        'instanceName'        => 'InstanceName',
        'contactMailList'     => 'ContactMailList',
        'dimensions'          => 'Dimensions',
        'contactSMSList'      => 'ContactSMSList',
        'sendStatus'          => 'SendStatus',
        'contactOnCallList'   => 'ContactOnCallList',
        'product'             => 'Product',
        'contactGroups'       => 'ContactGroups',
        'namespace'           => 'Namespace',
        'escalation'          => 'Escalation',
        'instanceId'          => 'InstanceId',
        'contactDingList'     => 'ContactDingList',
        'ruleName'            => 'RuleName',
        'webhookList'         => 'WebhookList',
        'groupId'             => 'GroupId',
        'groupName'           => 'GroupName',
        'alertTime'           => 'AlertTime',
        'level'               => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->contactALIIWWList) {
            $res['ContactALIIWWList'] = $this->contactALIIWWList;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->levelChange) {
            $res['LevelChange'] = $this->levelChange;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->extendedInfo) {
            $res['ExtendedInfo'] = [];
            if (null !== $this->extendedInfo && \is_array($this->extendedInfo)) {
                $n = 0;
                foreach ($this->extendedInfo as $item) {
                    $res['ExtendedInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dingdingWebhookList) {
            $res['DingdingWebhookList'] = $this->dingdingWebhookList;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->contactMailList) {
            $res['ContactMailList'] = $this->contactMailList;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contactSMSList) {
            $res['ContactSMSList'] = $this->contactSMSList;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }
        if (null !== $this->contactOnCallList) {
            $res['ContactOnCallList'] = $this->contactOnCallList;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->escalation) {
            $res['Escalation'] = null !== $this->escalation ? $this->escalation->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->contactDingList) {
            $res['ContactDingList'] = $this->contactDingList;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->webhookList) {
            $res['WebhookList'] = $this->webhookList;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertLogList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['ContactALIIWWList'])) {
            if (!empty($map['ContactALIIWWList'])) {
                $model->contactALIIWWList = $map['ContactALIIWWList'];
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['LevelChange'])) {
            $model->levelChange = $map['LevelChange'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ExtendedInfo'])) {
            if (!empty($map['ExtendedInfo'])) {
                $model->extendedInfo = [];
                $n                   = 0;
                foreach ($map['ExtendedInfo'] as $item) {
                    $model->extendedInfo[$n++] = null !== $item ? extendedInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DingdingWebhookList'])) {
            if (!empty($map['DingdingWebhookList'])) {
                $model->dingdingWebhookList = $map['DingdingWebhookList'];
            }
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ContactMailList'])) {
            if (!empty($map['ContactMailList'])) {
                $model->contactMailList = $map['ContactMailList'];
            }
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContactSMSList'])) {
            if (!empty($map['ContactSMSList'])) {
                $model->contactSMSList = $map['ContactSMSList'];
            }
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['ContactOnCallList'])) {
            if (!empty($map['ContactOnCallList'])) {
                $model->contactOnCallList = $map['ContactOnCallList'];
            }
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = $map['ContactGroups'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Escalation'])) {
            $model->escalation = escalation::fromMap($map['Escalation']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ContactDingList'])) {
            if (!empty($map['ContactDingList'])) {
                $model->contactDingList = $map['ContactDingList'];
            }
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['WebhookList'])) {
            if (!empty($map['WebhookList'])) {
                $model->webhookList = $map['WebhookList'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
