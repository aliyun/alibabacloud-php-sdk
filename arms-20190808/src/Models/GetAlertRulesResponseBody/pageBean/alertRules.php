<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\alertRuleContent;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\filters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\labels;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules\tags;
use AlibabaCloud\Tea\Model;

class alertRules extends Model
{
    /**
     * @example STATIC
     *
     * @var string
     */
    public $alertCheckType;

    /**
     * @example 1
     *
     * @var int
     */
    public $alertGroup;

    /**
     * @example 5730***
     *
     * @var float
     */
    public $alertId;

    /**
     * @example arms-test
     *
     * @var string
     */
    public $alertName;

    /**
     * @var alertRuleContent
     */
    public $alertRuleContent;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $alertStatus;

    /**
     * @example APPLICATION_MONITORING_ALERT_RULE
     *
     * @var string
     */
    public $alertType;

    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoAddNewApplication;

    /**
     * @example ceba9b9ea5b924dd0b6726d2de6******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1640333981000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var filters
     */
    public $filters;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @example P2
     *
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $message;

    /**
     * @example JVM
     *
     * @var string
     */
    public $metricsType;

    /**
     * @example ALERT_MANAGER
     *
     * @var string
     */
    public $notifyStrategy;

    /**
     * @var string[]
     */
    public $pids;

    /**
     * @example node_memory_MemAvailable_bytes{} / node_memory_MemTotal_bytes{} * 100
     *
     * @var string
     */
    public $promQL;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 1640333981000
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @example 1131971649******
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'alertCheckType'        => 'AlertCheckType',
        'alertGroup'            => 'AlertGroup',
        'alertId'               => 'AlertId',
        'alertName'             => 'AlertName',
        'alertRuleContent'      => 'AlertRuleContent',
        'alertStatus'           => 'AlertStatus',
        'alertType'             => 'AlertType',
        'annotations'           => 'Annotations',
        'autoAddNewApplication' => 'AutoAddNewApplication',
        'clusterId'             => 'ClusterId',
        'createdTime'           => 'CreatedTime',
        'duration'              => 'Duration',
        'extend'                => 'Extend',
        'filters'               => 'Filters',
        'labels'                => 'Labels',
        'level'                 => 'Level',
        'message'               => 'Message',
        'metricsType'           => 'MetricsType',
        'notifyStrategy'        => 'NotifyStrategy',
        'pids'                  => 'Pids',
        'promQL'                => 'PromQL',
        'regionId'              => 'RegionId',
        'tags'                  => 'Tags',
        'updatedTime'           => 'UpdatedTime',
        'userId'                => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertCheckType) {
            $res['AlertCheckType'] = $this->alertCheckType;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->alertRuleContent) {
            $res['AlertRuleContent'] = null !== $this->alertRuleContent ? $this->alertRuleContent->toMap() : null;
        }
        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                $n = 0;
                foreach ($this->annotations as $item) {
                    $res['Annotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoAddNewApplication) {
            $res['AutoAddNewApplication'] = $this->autoAddNewApplication;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->filters) {
            $res['Filters'] = null !== $this->filters ? $this->filters->toMap() : null;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->metricsType) {
            $res['MetricsType'] = $this->metricsType;
        }
        if (null !== $this->notifyStrategy) {
            $res['NotifyStrategy'] = $this->notifyStrategy;
        }
        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }
        if (null !== $this->promQL) {
            $res['PromQL'] = $this->promQL;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertCheckType'])) {
            $model->alertCheckType = $map['AlertCheckType'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['AlertRuleContent'])) {
            $model->alertRuleContent = alertRuleContent::fromMap($map['AlertRuleContent']);
        }
        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['Annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoAddNewApplication'])) {
            $model->autoAddNewApplication = $map['AutoAddNewApplication'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['Filters'])) {
            $model->filters = filters::fromMap($map['Filters']);
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MetricsType'])) {
            $model->metricsType = $map['MetricsType'];
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }
        if (isset($map['Pids'])) {
            if (!empty($map['Pids'])) {
                $model->pids = $map['Pids'];
            }
        }
        if (isset($map['PromQL'])) {
            $model->promQL = $map['PromQL'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
