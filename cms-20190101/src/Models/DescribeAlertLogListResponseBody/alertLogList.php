<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\dimensions;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\escalation;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\extendedInfo;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendResultList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\webhookList;
use AlibabaCloud\Tea\Model;

class alertLogList extends Model
{
    /**
     * @var string
     */
    public $alertTime;

    /**
     * @var string
     */
    public $blackListDetail;

    /**
     * @var string
     */
    public $blackListName;

    /**
     * @var string
     */
    public $blackListUUID;

    /**
     * @var string[]
     */
    public $contactALIIWWList;

    /**
     * @var string[]
     */
    public $contactDingList;

    /**
     * @var string[]
     */
    public $contactGroups;

    /**
     * @var string[]
     */
    public $contactMailList;

    /**
     * @var string[]
     */
    public $contactOnCallList;

    /**
     * @var string[]
     */
    public $contactSMSList;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var string[]
     */
    public $dingdingWebhookList;

    /**
     * @var escalation
     */
    public $escalation;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var extendedInfo[]
     */
    public $extendedInfo;

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
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $levelChange;

    /**
     * @var string
     */
    public $message;

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
    public $product;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var sendDetail
     */
    public $sendDetail;

    /**
     * @var sendResultList[]
     */
    public $sendResultList;

    /**
     * @var string
     */
    public $sendStatus;

    /**
     * @var webhookList[]
     */
    public $webhookList;
    protected $_name = [
        'alertTime'           => 'AlertTime',
        'blackListDetail'     => 'BlackListDetail',
        'blackListName'       => 'BlackListName',
        'blackListUUID'       => 'BlackListUUID',
        'contactALIIWWList'   => 'ContactALIIWWList',
        'contactDingList'     => 'ContactDingList',
        'contactGroups'       => 'ContactGroups',
        'contactMailList'     => 'ContactMailList',
        'contactOnCallList'   => 'ContactOnCallList',
        'contactSMSList'      => 'ContactSMSList',
        'dimensions'          => 'Dimensions',
        'dingdingWebhookList' => 'DingdingWebhookList',
        'escalation'          => 'Escalation',
        'eventName'           => 'EventName',
        'extendedInfo'        => 'ExtendedInfo',
        'groupId'             => 'GroupId',
        'groupName'           => 'GroupName',
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'level'               => 'Level',
        'levelChange'         => 'LevelChange',
        'message'             => 'Message',
        'metricName'          => 'MetricName',
        'namespace'           => 'Namespace',
        'product'             => 'Product',
        'ruleId'              => 'RuleId',
        'ruleName'            => 'RuleName',
        'sendDetail'          => 'SendDetail',
        'sendResultList'      => 'SendResultList',
        'sendStatus'          => 'SendStatus',
        'webhookList'         => 'WebhookList',
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
        if (null !== $this->blackListDetail) {
            $res['BlackListDetail'] = $this->blackListDetail;
        }
        if (null !== $this->blackListName) {
            $res['BlackListName'] = $this->blackListName;
        }
        if (null !== $this->blackListUUID) {
            $res['BlackListUUID'] = $this->blackListUUID;
        }
        if (null !== $this->contactALIIWWList) {
            $res['ContactALIIWWList'] = $this->contactALIIWWList;
        }
        if (null !== $this->contactDingList) {
            $res['ContactDingList'] = $this->contactDingList;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->contactMailList) {
            $res['ContactMailList'] = $this->contactMailList;
        }
        if (null !== $this->contactOnCallList) {
            $res['ContactOnCallList'] = $this->contactOnCallList;
        }
        if (null !== $this->contactSMSList) {
            $res['ContactSMSList'] = $this->contactSMSList;
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
        if (null !== $this->dingdingWebhookList) {
            $res['DingdingWebhookList'] = $this->dingdingWebhookList;
        }
        if (null !== $this->escalation) {
            $res['Escalation'] = null !== $this->escalation ? $this->escalation->toMap() : null;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->levelChange) {
            $res['LevelChange'] = $this->levelChange;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sendDetail) {
            $res['SendDetail'] = null !== $this->sendDetail ? $this->sendDetail->toMap() : null;
        }
        if (null !== $this->sendResultList) {
            $res['SendResultList'] = [];
            if (null !== $this->sendResultList && \is_array($this->sendResultList)) {
                $n = 0;
                foreach ($this->sendResultList as $item) {
                    $res['SendResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
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
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['BlackListDetail'])) {
            $model->blackListDetail = $map['BlackListDetail'];
        }
        if (isset($map['BlackListName'])) {
            $model->blackListName = $map['BlackListName'];
        }
        if (isset($map['BlackListUUID'])) {
            $model->blackListUUID = $map['BlackListUUID'];
        }
        if (isset($map['ContactALIIWWList'])) {
            if (!empty($map['ContactALIIWWList'])) {
                $model->contactALIIWWList = $map['ContactALIIWWList'];
            }
        }
        if (isset($map['ContactDingList'])) {
            if (!empty($map['ContactDingList'])) {
                $model->contactDingList = $map['ContactDingList'];
            }
        }
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = $map['ContactGroups'];
            }
        }
        if (isset($map['ContactMailList'])) {
            if (!empty($map['ContactMailList'])) {
                $model->contactMailList = $map['ContactMailList'];
            }
        }
        if (isset($map['ContactOnCallList'])) {
            if (!empty($map['ContactOnCallList'])) {
                $model->contactOnCallList = $map['ContactOnCallList'];
            }
        }
        if (isset($map['ContactSMSList'])) {
            if (!empty($map['ContactSMSList'])) {
                $model->contactSMSList = $map['ContactSMSList'];
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
        if (isset($map['DingdingWebhookList'])) {
            if (!empty($map['DingdingWebhookList'])) {
                $model->dingdingWebhookList = $map['DingdingWebhookList'];
            }
        }
        if (isset($map['Escalation'])) {
            $model->escalation = escalation::fromMap($map['Escalation']);
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['LevelChange'])) {
            $model->levelChange = $map['LevelChange'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SendDetail'])) {
            $model->sendDetail = sendDetail::fromMap($map['SendDetail']);
        }
        if (isset($map['SendResultList'])) {
            if (!empty($map['SendResultList'])) {
                $model->sendResultList = [];
                $n                     = 0;
                foreach ($map['SendResultList'] as $item) {
                    $model->sendResultList[$n++] = null !== $item ? sendResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
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

        return $model;
    }
}
