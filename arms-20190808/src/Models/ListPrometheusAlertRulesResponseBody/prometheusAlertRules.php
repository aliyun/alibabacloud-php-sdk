<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesResponseBody\prometheusAlertRules\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesResponseBody\prometheusAlertRules\labels;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesResponseBody\prometheusAlertRules\tags;
use AlibabaCloud\Tea\Model;

class prometheusAlertRules extends Model
{
    /**
     * @description The ID of the alert rule.
     *
     * @example 3888704
     *
     * @var int
     */
    public $alertId;

    /**
     * @description The name of the alert rule.
     *
     * @example Prometheus_Alert
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The annotations of the alert rule.
     *
     * @var annotations[]
     */
    public $annotations;

    /**
     * @description The ID of the cluster.
     *
     * @example c0bad479465464e1d8c1e641b0afb****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the notification policy. This parameter is returned if the NotifyType parameter is set to `DISPATCH_RULE`.
     *
     * @example 10282
     *
     * @var int
     */
    public $dispatchRuleId;

    /**
     * @description The duration of the alert. Valid values: 1 to 1440. Unit: minutes.
     *
     * @example 1m
     *
     * @var string
     */
    public $duration;

    /**
     * @description The expression of the alert rule.
     *
     * @example 100 * (sum(rate(container_cpu_usage_seconds_total[1m])) by (pod_name) / sum(label_replace(kube_pod_container_resource_limits_cpu_cores, \\"pod_name\\", \\"$1\\", \\"pod\\", \\"(.*)\\")) by (pod_name))>75
     *
     * @var string
     */
    public $expression;

    /**
     * @description The tags of the alert rule.
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description The alert message. Tags can be referenced in the {{$labels.xxx}} format.
     *
     * @example The CPU utilization of ${{$labels.pod_name}} exceeds 80%. Current value: {{$value}}%
     *
     * @var string
     */
    public $message;

    /**
     * @description The method that is used to send alert notifications. Valid values:
     *
     * - ALERT_MANAGER: Alert notifications are sent by Operation Center.
     * - DISPATCH_RULE: Alert notifications are
     *
     * @example ALERT_MANAGER
     *
     * @var string
     */
    public $notifyType;

    /**
     * @description Indicates whether the alert rule is enabled. Valid values:
     *
     * - 1: The alert rule is enabled.
     * - 0: The alert rule is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the alert rule.
     *
     * @example Custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'alertId' => 'AlertId',
        'alertName' => 'AlertName',
        'annotations' => 'Annotations',
        'clusterId' => 'ClusterId',
        'dispatchRuleId' => 'DispatchRuleId',
        'duration' => 'Duration',
        'expression' => 'Expression',
        'labels' => 'Labels',
        'message' => 'Message',
        'notifyType' => 'NotifyType',
        'status' => 'Status',
        'tags' => 'Tags',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dispatchRuleId) {
            $res['DispatchRuleId'] = $this->dispatchRuleId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prometheusAlertRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n = 0;
                foreach ($map['Annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DispatchRuleId'])) {
            $model->dispatchRuleId = $map['DispatchRuleId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
