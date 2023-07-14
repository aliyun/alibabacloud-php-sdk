<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\alertRuleContent;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\filters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\labels;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule\tags;
use AlibabaCloud\Tea\Model;

class alertRule extends Model
{
    /**
     * @description The alert check type of the Prometheus alert rule. Valid values:
     *
     *   STATIC: a static threshold value.
     *   CUSTOM: a custom PromQL statement.
     *
     * @example STATIC
     *
     * @var string
     */
    public $alertCheckType;

    /**
     * @description The alert contact group ID of the Prometheus alert rule. Valid values:
     *
     *   \-1: custom PromQL
     *   1: Kubernetes load
     *   15: Kubernetes node
     *
     * @example -1
     *
     * @var int
     */
    public $alertGroup;

    /**
     * @description The ID of the alert rule.
     *
     * @example 5510445
     *
     * @var float
     */
    public $alertId;

    /**
     * @description The name of the alert rule.
     *
     * @example arms-test
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The content of the Application Monitoring or Browser Monitoring alert rule.
     *
     * @var alertRuleContent
     */
    public $alertRuleContent;

    /**
     * @description The status of the alert rule. Valid values:
     *
     *   RUNNING
     *   STOPPED
     *   PAUSED
     *
     * > The **PAUSED** status indicates that the alert rule was abnormal and was paused by the system. The alert rule might be paused because it was not unique or the associated cluster was deleted.
     * @example RUNNING
     *
     * @var string
     */
    public $alertStatus;

    /**
     * @description The type of the alert rule.
     *
     *   APPLICATION_MONITORING_ALERT_RULE: an alert rule of Application Monitoring
     *   BROWSER_MONITORING_ALERT_RULE: an alert rule of Browser Monitoring
     *   PROMETHEUS_MONITORING_ALERT_RULE: an alert rule of Prometheus Service
     *
     * @example APPLICATION_MONITORING_ALERT_RULE
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The annotations of the Prometheus alert rule.
     *
     * @var annotations[]
     */
    public $annotations;

    /**
     * @description Indicates whether the alert rule was applied to new applications that were created in Application Monitoring or Browser Monitoring. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example false
     *
     * @var bool
     */
    public $autoAddNewApplication;

    /**
     * @description The cluster ID of the Prometheus alert rule.
     *
     * @example ceba9b9ea5b924dd0b6726d2de6******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The timestamp generated when the alert rule was created. Unit: seconds.
     *
     * @example 1641438611000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The duration of the Prometheus alert rule. Unit: minutes.
     *
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description The extended fields.
     *
     * @example {\\"alarmContext\\":\\"{\\\\\"content\\\\\":\\\\Alert name: $Alert name\\\\\\nFilter condition: $Filter condition\\\\\\nAlert time: $Alert time\\\\\\nAlert content: $Alert content\\\\\\nNote: The alert persists before you receive an email that reminds you to clear the alert. You will be reminded of the alert again 24 hours later. \\\\\",\\\\\"subTitle\\\\\":\\\\\"\\\\\"}\\",\\"alertWays\\":\\"\[0,1]\\",\\"contactGroupIds\\":\\"381,5075\\",\\"notice\\":\\"{\\\\\"endTime\\\\\":1480607940000,\\\\\"noticeEndTime\\\\\":1480607940000,\\\\\"noticeStartTime\\\\\":1480521600000,\\\\\"startTime\\\\\":1480521600000}\\"}
     *
     * @var string
     */
    public $extend;

    /**
     * @description The filter conditions of the Application Monitoring or Browser Monitoring alert rule.
     *
     * @var filters
     */
    public $filters;

    /**
     * @description The tags of the Prometheus alert rule.
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description The severity level of the Prometheus alert rule.
     *
     *   P1: Alert notifications are sent for major issues that affect the availability of core business, have a huge impact, and may lead to serious consequences.
     *   P2: Alert notifications are sent for service errors that affect the system availability with relatively limited impact.
     *   P3: Alert notifications are sent for issues that may cause service errors or negative effects, or alert notifications for services that are relatively less important.
     *   P4: Alert notifications are sent for low-priority issues that do not affect your business.
     *   Default: Alert notifications are sent regardless of alert levels.
     *
     * @example P2
     *
     * @var string
     */
    public $level;

    /**
     * @description The alert message of the Prometheus alert rule.
     *
     * @example Namespace: {{$labels.namespace}} / Pod: {{$labels.pod_name}} / Container: {{$labels.container}} Memory usage exceeds 80%. Current value: {{ printf \\\\\"%.2f\\\\\" $value }}%
     *
     * @var string
     */
    public $message;

    /**
     * @description The metric type of the Application Monitoring or Browser Monitoring alert rule.
     *
     * @example JVM
     *
     * @var string
     */
    public $metricsType;

    /**
     * @description The name of the notification policy.
     *
     * @example ALERT_MANAGER
     *
     * @var string
     */
    public $notifyStrategy;

    /**
     * @description The process ID (PID) that was associated with the Application Monitoring or Browser Monitoring alert rule.
     *
     * @var string[]
     */
    public $pids;

    /**
     * @description The PromQL statement of the Prometheus alert rule.
     *
     * @example node_memory_MemAvailable_bytes{} / node_memory_MemTotal_bytes{} * 100
     *
     * @var string
     */
    public $promQL;

    /**
     * @description The region ID.
     *
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
     * @description The timestamp generated when the alert rule was updated. Unit: seconds.
     *
     * @example 1641438611000
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
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
     * @return alertRule
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
