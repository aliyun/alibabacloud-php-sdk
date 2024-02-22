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
     * @description The timestamp that was generated when the alert was triggered.
     *
     * Unit: milliseconds.
     * @example 1610043776621
     *
     * @var string
     */
    public $alertTime;

    /**
     * @description The details of the blacklist policy.
     *
     * @example BlackListDetail
     *
     * @var string
     */
    public $blackListDetail;

    /**
     * @description The name of the blacklist policy.
     *
     * @example {"id":123,"metricProject":"acs_ecs_dashboard","userId":1736511134389110,"uuid":"8410dbbd-7d30-41c5-94cb-***","name":"alert-***","productCategory":"ecs","instances":[{"instanceId":"host-***"}],"metrics":null,"scopeType":"USER","scopeValue":"","startTime":"0001-01-01T00:00:00Z","endTime":"9999-12-31T23:59:59.999999999+08:00","effectiveTime":null,"isEnable":true,"status":1,"gmtCreate":"2021-11-02T16:35:59+08:00","gmtModified":"2021-11-02T16:35:59+08:00","loadTime":"2021-11-02T16:36:15.213072177+08:00"}
     *
     * @var string
     */
    public $blackListName;

    /**
     * @description The ID of the blacklist policy.
     *
     * @example 8410dbbd-7d30-41c5-94cb-*****
     *
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
     * @description The dimensions of the resource that triggered alerts.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var string[]
     */
    public $dingdingWebhookList;

    /**
     * @description The alert rule based on which the alert is triggered.
     *
     * @var escalation
     */
    public $escalation;

    /**
     * @description The event name.
     *
     * @example IOHang
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The extended fields.
     *
     * @var extendedInfo[]
     */
    public $extendedInfo;

    /**
     * @description The ID of the application group.
     *
     * @example 7301****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the application group.
     *
     * @example ECS_Instances
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The resource ID.
     *
     * @example i-m5e1qg6uo38rztr4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The resource name.
     *
     * @example portalHost
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The alert level and the methods that are used to send alert notifications. Valid values:
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
     * @description Indicates whether the alert level was changed. Valid values:
     *
     *   `P4->OK`: The alert level was changed from P4 to OK.
     *   `P4->P4`: The alert level was still P4.
     *
     * @example P4->OK
     *
     * @var string
     */
    public $levelChange;

    /**
     * @description The log ID.
     *
     * @example 7818361[1523]@1671593992[1]
     *
     * @var string
     */
    public $logId;

    /**
     * @description The alert information in a JSON string.
     *
     * @example {"alertName":"e47aa0ac-4076-44db-a47d-d1083968****_Availability"}
     *
     * @var string
     */
    public $message;

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
     * @description The identifier of the cloud service. Valid values:
     *
     *   If the cloud service is provided by Alibaba Cloud, the abbreviation of the service name is returned. Example: ECS.
     *   If the cloud service is not provided by Alibaba Cloud, a value in the `acs_Service keyword` format is returned. Example: acs_networkmonitor.
     *
     * @example ECS
     *
     * @var string
     */
    public $product;

    /**
     * @description The ID of the alert rule.
     *
     * @example d582b9e9-b1c1-4f17-9279-0fe7333a****_ResponseTime
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The details about the sending results of alert notifications.
     *
     * @var sendDetail
     */
    public $sendDetail;

    /**
     * @description The sending results of alert notifications.
     *
     * @var sendResultList[]
     */
    public $sendResultList;

    /**
     * @description The status of the alert. Valid values:
     *
     *   0: The alert is triggered or cleared.
     *   1: The alert is ineffective.
     *   2: The alert is muted.
     *   3: The host is restarting.
     *   4: No alert notification is sent.
     *
     * If the value of the SendStatus parameter is 0, the value P4 of the Level parameter indicates a triggered alert and the value OK indicates a cleared alert.
     * @example 0
     *
     * @var string
     */
    public $sendStatus;

    /**
     * @description The callback URLs.
     *
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
        'logId'               => 'LogId',
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
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
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
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
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
