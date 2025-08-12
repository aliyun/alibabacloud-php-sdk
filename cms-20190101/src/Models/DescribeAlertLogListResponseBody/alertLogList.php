<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\dimensions;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\escalation;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\extendedInfo;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendResultList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\webhookList;

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
    public $logId;

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
        'alertTime' => 'AlertTime',
        'blackListDetail' => 'BlackListDetail',
        'blackListName' => 'BlackListName',
        'blackListUUID' => 'BlackListUUID',
        'contactALIIWWList' => 'ContactALIIWWList',
        'contactDingList' => 'ContactDingList',
        'contactGroups' => 'ContactGroups',
        'contactMailList' => 'ContactMailList',
        'contactOnCallList' => 'ContactOnCallList',
        'contactSMSList' => 'ContactSMSList',
        'dimensions' => 'Dimensions',
        'dingdingWebhookList' => 'DingdingWebhookList',
        'escalation' => 'Escalation',
        'eventName' => 'EventName',
        'extendedInfo' => 'ExtendedInfo',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'level' => 'Level',
        'levelChange' => 'LevelChange',
        'logId' => 'LogId',
        'message' => 'Message',
        'metricName' => 'MetricName',
        'namespace' => 'Namespace',
        'product' => 'Product',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'sendDetail' => 'SendDetail',
        'sendResultList' => 'SendResultList',
        'sendStatus' => 'SendStatus',
        'webhookList' => 'WebhookList',
    ];

    public function validate()
    {
        if (\is_array($this->contactALIIWWList)) {
            Model::validateArray($this->contactALIIWWList);
        }
        if (\is_array($this->contactDingList)) {
            Model::validateArray($this->contactDingList);
        }
        if (\is_array($this->contactGroups)) {
            Model::validateArray($this->contactGroups);
        }
        if (\is_array($this->contactMailList)) {
            Model::validateArray($this->contactMailList);
        }
        if (\is_array($this->contactOnCallList)) {
            Model::validateArray($this->contactOnCallList);
        }
        if (\is_array($this->contactSMSList)) {
            Model::validateArray($this->contactSMSList);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->dingdingWebhookList)) {
            Model::validateArray($this->dingdingWebhookList);
        }
        if (null !== $this->escalation) {
            $this->escalation->validate();
        }
        if (\is_array($this->extendedInfo)) {
            Model::validateArray($this->extendedInfo);
        }
        if (null !== $this->sendDetail) {
            $this->sendDetail->validate();
        }
        if (\is_array($this->sendResultList)) {
            Model::validateArray($this->sendResultList);
        }
        if (\is_array($this->webhookList)) {
            Model::validateArray($this->webhookList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->contactALIIWWList)) {
                $res['ContactALIIWWList'] = [];
                $n1 = 0;
                foreach ($this->contactALIIWWList as $item1) {
                    $res['ContactALIIWWList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactDingList) {
            if (\is_array($this->contactDingList)) {
                $res['ContactDingList'] = [];
                $n1 = 0;
                foreach ($this->contactDingList as $item1) {
                    $res['ContactDingList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactGroups) {
            if (\is_array($this->contactGroups)) {
                $res['ContactGroups'] = [];
                $n1 = 0;
                foreach ($this->contactGroups as $item1) {
                    $res['ContactGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactMailList) {
            if (\is_array($this->contactMailList)) {
                $res['ContactMailList'] = [];
                $n1 = 0;
                foreach ($this->contactMailList as $item1) {
                    $res['ContactMailList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactOnCallList) {
            if (\is_array($this->contactOnCallList)) {
                $res['ContactOnCallList'] = [];
                $n1 = 0;
                foreach ($this->contactOnCallList as $item1) {
                    $res['ContactOnCallList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contactSMSList) {
            if (\is_array($this->contactSMSList)) {
                $res['ContactSMSList'] = [];
                $n1 = 0;
                foreach ($this->contactSMSList as $item1) {
                    $res['ContactSMSList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dingdingWebhookList) {
            if (\is_array($this->dingdingWebhookList)) {
                $res['DingdingWebhookList'] = [];
                $n1 = 0;
                foreach ($this->dingdingWebhookList as $item1) {
                    $res['DingdingWebhookList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->escalation) {
            $res['Escalation'] = null !== $this->escalation ? $this->escalation->toArray($noStream) : $this->escalation;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->extendedInfo) {
            if (\is_array($this->extendedInfo)) {
                $res['ExtendedInfo'] = [];
                $n1 = 0;
                foreach ($this->extendedInfo as $item1) {
                    $res['ExtendedInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['SendDetail'] = null !== $this->sendDetail ? $this->sendDetail->toArray($noStream) : $this->sendDetail;
        }

        if (null !== $this->sendResultList) {
            if (\is_array($this->sendResultList)) {
                $res['SendResultList'] = [];
                $n1 = 0;
                foreach ($this->sendResultList as $item1) {
                    $res['SendResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }

        if (null !== $this->webhookList) {
            if (\is_array($this->webhookList)) {
                $res['WebhookList'] = [];
                $n1 = 0;
                foreach ($this->webhookList as $item1) {
                    $res['WebhookList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $model->contactALIIWWList = [];
                $n1 = 0;
                foreach ($map['ContactALIIWWList'] as $item1) {
                    $model->contactALIIWWList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContactDingList'])) {
            if (!empty($map['ContactDingList'])) {
                $model->contactDingList = [];
                $n1 = 0;
                foreach ($map['ContactDingList'] as $item1) {
                    $model->contactDingList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = [];
                $n1 = 0;
                foreach ($map['ContactGroups'] as $item1) {
                    $model->contactGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContactMailList'])) {
            if (!empty($map['ContactMailList'])) {
                $model->contactMailList = [];
                $n1 = 0;
                foreach ($map['ContactMailList'] as $item1) {
                    $model->contactMailList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContactOnCallList'])) {
            if (!empty($map['ContactOnCallList'])) {
                $model->contactOnCallList = [];
                $n1 = 0;
                foreach ($map['ContactOnCallList'] as $item1) {
                    $model->contactOnCallList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContactSMSList'])) {
            if (!empty($map['ContactSMSList'])) {
                $model->contactSMSList = [];
                $n1 = 0;
                foreach ($map['ContactSMSList'] as $item1) {
                    $model->contactSMSList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1] = dimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DingdingWebhookList'])) {
            if (!empty($map['DingdingWebhookList'])) {
                $model->dingdingWebhookList = [];
                $n1 = 0;
                foreach ($map['DingdingWebhookList'] as $item1) {
                    $model->dingdingWebhookList[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['ExtendedInfo'] as $item1) {
                    $model->extendedInfo[$n1] = extendedInfo::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SendResultList'] as $item1) {
                    $model->sendResultList[$n1] = sendResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }

        if (isset($map['WebhookList'])) {
            if (!empty($map['WebhookList'])) {
                $model->webhookList = [];
                $n1 = 0;
                foreach ($map['WebhookList'] as $item1) {
                    $model->webhookList[$n1] = webhookList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
