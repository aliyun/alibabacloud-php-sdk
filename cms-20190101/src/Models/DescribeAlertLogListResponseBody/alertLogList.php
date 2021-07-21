<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\dimensions;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\escalation;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\extendedInfo;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\webhookList;
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
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $blackListUUID;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $levelChange;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $blackListName;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $alertTime;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $blackListDetail;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $sendStatus;

    /**
     * @var extendedInfo[]
     */
    public $extendedInfo;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var webhookList[]
     */
    public $webhookList;

    /**
     * @var string[]
     */
    public $dingdingWebhookList;

    /**
     * @var string[]
     */
    public $contactOnCallList;

    /**
     * @var string[]
     */
    public $contactMailList;

    /**
     * @var string[]
     */
    public $contactGroups;

    /**
     * @var string[]
     */
    public $contactALIIWWList;

    /**
     * @var string[]
     */
    public $contactSMSList;

    /**
     * @var string[]
     */
    public $contactDingList;

    /**
     * @var escalation
     */
    public $escalation;
    protected $_name = [
        'metricName'          => 'MetricName',
        'eventName'           => 'EventName',
        'product'             => 'Product',
        'blackListUUID'       => 'BlackListUUID',
        'message'             => 'Message',
        'namespace'           => 'Namespace',
        'levelChange'         => 'LevelChange',
        'instanceId'          => 'InstanceId',
        'ruleName'            => 'RuleName',
        'ruleId'              => 'RuleId',
        'blackListName'       => 'BlackListName',
        'groupName'           => 'GroupName',
        'groupId'             => 'GroupId',
        'alertTime'           => 'AlertTime',
        'instanceName'        => 'InstanceName',
        'blackListDetail'     => 'BlackListDetail',
        'level'               => 'Level',
        'sendStatus'          => 'SendStatus',
        'extendedInfo'        => 'ExtendedInfo',
        'dimensions'          => 'Dimensions',
        'webhookList'         => 'WebhookList',
        'dingdingWebhookList' => 'DingdingWebhookList',
        'contactOnCallList'   => 'ContactOnCallList',
        'contactMailList'     => 'ContactMailList',
        'contactGroups'       => 'ContactGroups',
        'contactALIIWWList'   => 'ContactALIIWWList',
        'contactSMSList'      => 'ContactSMSList',
        'contactDingList'     => 'ContactDingList',
        'escalation'          => 'Escalation',
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
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->blackListUUID) {
            $res['BlackListUUID'] = $this->blackListUUID;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->levelChange) {
            $res['LevelChange'] = $this->levelChange;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->blackListName) {
            $res['BlackListName'] = $this->blackListName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->blackListDetail) {
            $res['BlackListDetail'] = $this->blackListDetail;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
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
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->webhookList) {
            $res['WebhookList'] = [];
            if (null !== $this->webhookList && \is_array($this->webhookList)) {
                $n = 0;
                foreach ($this->webhookList as $item) {
                    $res['WebhookList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dingdingWebhookList) {
            $res['DingdingWebhookList'] = $this->dingdingWebhookList;
        }
        if (null !== $this->contactOnCallList) {
            $res['ContactOnCallList'] = $this->contactOnCallList;
        }
        if (null !== $this->contactMailList) {
            $res['ContactMailList'] = $this->contactMailList;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->contactALIIWWList) {
            $res['ContactALIIWWList'] = $this->contactALIIWWList;
        }
        if (null !== $this->contactSMSList) {
            $res['ContactSMSList'] = $this->contactSMSList;
        }
        if (null !== $this->contactDingList) {
            $res['ContactDingList'] = $this->contactDingList;
        }
        if (null !== $this->escalation) {
            $res['Escalation'] = null !== $this->escalation ? $this->escalation->toMap() : null;
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
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['BlackListUUID'])) {
            $model->blackListUUID = $map['BlackListUUID'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['LevelChange'])) {
            $model->levelChange = $map['LevelChange'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['BlackListName'])) {
            $model->blackListName = $map['BlackListName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['BlackListDetail'])) {
            $model->blackListDetail = $map['BlackListDetail'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
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
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WebhookList'])) {
            if (!empty($map['WebhookList'])) {
                $model->webhookList = [];
                $n                  = 0;
                foreach ($map['WebhookList'] as $item) {
                    $model->webhookList[$n++] = null !== $item ? webhookList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DingdingWebhookList'])) {
            if (!empty($map['DingdingWebhookList'])) {
                $model->dingdingWebhookList = $map['DingdingWebhookList'];
            }
        }
        if (isset($map['ContactOnCallList'])) {
            if (!empty($map['ContactOnCallList'])) {
                $model->contactOnCallList = $map['ContactOnCallList'];
            }
        }
        if (isset($map['ContactMailList'])) {
            if (!empty($map['ContactMailList'])) {
                $model->contactMailList = $map['ContactMailList'];
            }
        }
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = $map['ContactGroups'];
            }
        }
        if (isset($map['ContactALIIWWList'])) {
            if (!empty($map['ContactALIIWWList'])) {
                $model->contactALIIWWList = $map['ContactALIIWWList'];
            }
        }
        if (isset($map['ContactSMSList'])) {
            if (!empty($map['ContactSMSList'])) {
                $model->contactSMSList = $map['ContactSMSList'];
            }
        }
        if (isset($map['ContactDingList'])) {
            if (!empty($map['ContactDingList'])) {
                $model->contactDingList = $map['ContactDingList'];
            }
        }
        if (isset($map['Escalation'])) {
            $model->escalation = escalation::fromMap($map['Escalation']);
        }

        return $model;
    }
}
