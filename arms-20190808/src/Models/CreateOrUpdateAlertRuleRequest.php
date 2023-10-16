<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleRequest\markTags;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateAlertRuleRequest extends Model
{
    /**
     * @description The alert check type of the Prometheus alert rule. Valid values:
     *
     *   STATIC: a static threshold value. If you set the parameter to STATIC, you must specify the **MetricsKey** parameter. For more information, see the **Correspondence between AlertGroup and MetricsKey for Prometheus Service** table.
     *   CUSTOM: a custom PromQL statement. If you set the parameter to CUSTOM, you must specify the **PromQL**, **Duration**, and **Message** parameters to create a Prometheus alert rule.
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
     *   If you do not specify this parameter, a new alert rule is created.
     *   If you specify this parameter, the specified alert rule is modified.
     *
     * @example 546xxx
     *
     * @var int
     */
    public $alertId;

    /**
     * @description The name of the alert rule.
     *
     * @example Alert Rule Demo
     *
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $alertPiplines;

    /**
     * @description The content of the Application Monitoring or Browser Monitoring alert rule. The following code provides an example of the **AlertRuleContent** parameter. For more information about the meaning of each field, see the supplementary description.
     *
     * ```
     *
     * > The conditional fields vary depending on the values of the **MetricsType** and **AlertRuleItems.MetricKey** parameters. For more information about the types of metrics supported by Application Monitoring and Browser Monitoring and the alert rule fields corresponding to each metric, see the supplementary description.
     * @example { "Condition": "OR", "AlertRuleItems": [ { "Operator": "CURRENT_LTE",  "MetricKey": "appstat.jvm.threadcount",  "Value": 1000,  "Aggregate": "AVG",   "N": 1  }  ]  }
     *
     * @var string
     */
    public $alertRuleContent;

    /**
     * @description The status of the alert rule. Valid values:
     *
     *   RUNNING (default)
     *   STOPPED
     *
     * @example RUNNING
     *
     * @var string
     */
    public $alertStatus;

    /**
     * @description The type of the alert rule. Valid values:
     *
     *   APPLICATION_MONITORING_ALERT_RULE: alert rule for Application Monitoring
     *   BROWSER_MONITORING_ALERT_RULE: alert rule for Browser Monitoring
     *   PROMETHEUS_MONITORING_ALERT_RULE: alert rule for Prometheus Service
     *
     * Valid values:
     *
     *   PROMETHEUS_MONITORING_ALERT_RULE
     *   APPLICATION_MONITORING_ALERT_RULE
     *   BROWSER_MONITORING_ALERT_RULE
     *   prometheus monitoring alert
     *   application monitoring alert
     *   browser monitoring alert
     *
     * @example APPLICATION_MONITORING_ALERT_RULE
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The annotations of the Prometheus alert rule.
     *
     * @example \[ { "Value": "PolarDB slow queries", "Name": "\_aliyun_display_name" }
     *
     * @var string
     */
    public $annotations;

    /**
     * @description Specifies whether to apply the alert rule to new applications that are created in Application Monitoring or Browser Monitoring. Valid values:
     *
     *   `true`: enables the health check feature.
     *   `false`: disables the automatic backup feature.
     *
     * @example false
     *
     * @var bool
     */
    public $autoAddNewApplication;

    /**
     * @description The ID of the monitored cluster.
     *
     * @example ceba9b9ea5b924dd0b6726d2de6******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dataConfig;

    /**
     * @description The duration of the Prometheus alert rule. Unit: minutes.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The filter conditions of the Application Monitoring or Browser Monitoring alert rule. The following code shows the format of matching rules:
     *
     * ]
     *
     * Valid values of **FilterOpt**:
     *
     *   STATIC: matches the value of the specified dimension.
     *   ALL: matches the values of all dimensions.
     *   DISABLE: aggregates the values of all dimensions.
     *
     * @example {"DimFilters": [             {               "FilterOpt": "ALL",               "FilterValues": [],               "FilterKey": "rootIp"             }           ]         }
     *
     * @var string
     */
    public $filters;

    /**
     * @description The tags of the Prometheus alert rule.
     *
     * @example [  { "Value": "cms_polardb",             "Name": "_aliyun_cloud_product"           }         ]
     *
     * @var string
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
     * @var markTags[]
     */
    public $markTags;

    /**
     * @description The alert message of the Prometheus alert rule.
     *
     * @example Namespace: {{$labels.namespace}} / Pod: {{$labels.pod_name}} / Container: {{$labels.container}} Memory usage exceeds 80%. Current value: {{ printf \\\\\"%.2f\\\\\" $value }}%
     *
     * @var string
     */
    public $message;

    /**
     * @description The alert metrics. If you set the **AlertCheckType** parameter to **STATIC** when you create a Prometheus alert rule, you must specify the **MetricsKey** parameter.
     *
     * > Alert metrics vary depending on the value of the **AlertGroup** parameter. For more information about the correspondence between **AlertGroup** and **MetricsKey**, see the supplementary description.
     * @example pop.status.error
     *
     * @var string
     */
    public $metricsKey;

    /**
     * @description The metric type of the Application Monitoring or Browser Monitoring alert rule. For more information, see the following table.
     *
     * @example jvm
     *
     * @var string
     */
    public $metricsType;

    /**
     * @var string
     */
    public $notice;

    /**
     * @example NORMAL_MODE
     *
     * @var string
     */
    public $notifyMode;

    /**
     * @description The notification policy.
     *
     *   If you set this parameter to null, no notification policy is specified. After you create an alert rule, you can create a notification policy and specify match rules and match conditions. For example, you can specify the name of the alert rule as the match condition. When the alert rule is triggered, an alert event is generated and an alert notification is sent to the contacts or contact groups that are specified in the notification policy.
     *   To specify a notification policy, set this parameter to the ID of the notification policy. Application Real-Time Monitoring Service (ARMS) automatically adds a match rule to the notification policy and specifies the ID of the alert rule as the match condition. The name of the alert rule is also displayed. This way, the alert events that are generated based on the alert rule can be matched by the specified notification policy.
     *
     * @example 569xxx
     *
     * @var string
     */
    public $notifyStrategy;

    /**
     * @description The process ID (PID) that is associated with the Application Monitoring or Browser Monitoring alert rule.
     *
     * @example ["b590lhguqs@40d8deedfa9******"]
     *
     * @var string
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
    protected $_name = [
        'alertCheckType'        => 'AlertCheckType',
        'alertGroup'            => 'AlertGroup',
        'alertId'               => 'AlertId',
        'alertName'             => 'AlertName',
        'alertPiplines'         => 'AlertPiplines',
        'alertRuleContent'      => 'AlertRuleContent',
        'alertStatus'           => 'AlertStatus',
        'alertType'             => 'AlertType',
        'annotations'           => 'Annotations',
        'autoAddNewApplication' => 'AutoAddNewApplication',
        'clusterId'             => 'ClusterId',
        'dataConfig'            => 'DataConfig',
        'duration'              => 'Duration',
        'filters'               => 'Filters',
        'labels'                => 'Labels',
        'level'                 => 'Level',
        'markTags'              => 'MarkTags',
        'message'               => 'Message',
        'metricsKey'            => 'MetricsKey',
        'metricsType'           => 'MetricsType',
        'notice'                => 'Notice',
        'notifyMode'            => 'NotifyMode',
        'notifyStrategy'        => 'NotifyStrategy',
        'pids'                  => 'Pids',
        'promQL'                => 'PromQL',
        'regionId'              => 'RegionId',
        'tags'                  => 'Tags',
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
        if (null !== $this->alertPiplines) {
            $res['AlertPiplines'] = $this->alertPiplines;
        }
        if (null !== $this->alertRuleContent) {
            $res['AlertRuleContent'] = $this->alertRuleContent;
        }
        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->autoAddNewApplication) {
            $res['AutoAddNewApplication'] = $this->autoAddNewApplication;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataConfig) {
            $res['DataConfig'] = $this->dataConfig;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->markTags) {
            $res['MarkTags'] = [];
            if (null !== $this->markTags && \is_array($this->markTags)) {
                $n = 0;
                foreach ($this->markTags as $item) {
                    $res['MarkTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->metricsKey) {
            $res['MetricsKey'] = $this->metricsKey;
        }
        if (null !== $this->metricsType) {
            $res['MetricsType'] = $this->metricsType;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->notifyMode) {
            $res['NotifyMode'] = $this->notifyMode;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateAlertRuleRequest
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
        if (isset($map['AlertPiplines'])) {
            $model->alertPiplines = $map['AlertPiplines'];
        }
        if (isset($map['AlertRuleContent'])) {
            $model->alertRuleContent = $map['AlertRuleContent'];
        }
        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['AutoAddNewApplication'])) {
            $model->autoAddNewApplication = $map['AutoAddNewApplication'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataConfig'])) {
            $model->dataConfig = $map['DataConfig'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MarkTags'])) {
            if (!empty($map['MarkTags'])) {
                $model->markTags = [];
                $n               = 0;
                foreach ($map['MarkTags'] as $item) {
                    $model->markTags[$n++] = null !== $item ? markTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MetricsKey'])) {
            $model->metricsKey = $map['MetricsKey'];
        }
        if (isset($map['MetricsType'])) {
            $model->metricsType = $map['MetricsType'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['NotifyMode'])) {
            $model->notifyMode = $map['NotifyMode'];
        }
        if (isset($map['NotifyStrategy'])) {
            $model->notifyStrategy = $map['NotifyStrategy'];
        }
        if (isset($map['Pids'])) {
            $model->pids = $map['Pids'];
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

        return $model;
    }
}
