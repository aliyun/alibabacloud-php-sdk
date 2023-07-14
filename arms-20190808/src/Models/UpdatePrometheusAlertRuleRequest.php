<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusAlertRuleRequest\tags;
use AlibabaCloud\Tea\Model;

class UpdatePrometheusAlertRuleRequest extends Model
{
    /**
     * @example 3888704
     *
     * @var int
     */
    public $alertId;

    /**
     * @example Prometheus_Alert
     *
     * @var string
     */
    public $alertName;

    /**
     * @example [{"Value": "xxx","Name": "description"}]
     *
     * @var string
     */
    public $annotations;

    /**
     * @example c0bad479465464e1d8c1e641b0afb****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 10282
     *
     * @var int
     */
    public $dispatchRuleId;

    /**
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @example 100 * (sum(rate(container_cpu_usage_seconds_total[1m])) by (pod_name) / sum(label_replace(kube_pod_container_resource_limits_cpu_cores, \"pod_name\", \"$1\", \"pod\", \"(.*)\")) by (pod_name))>75
     *
     * @var string
     */
    public $expression;

    /**
     * @example [{"Value": "critical","Name": "severity"}]
     *
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $message;

    /**
     * @example ALERT_MANAGER
     *
     * @var string
     */
    public $notifyType;

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
     * @var string
     */
    public $type;
    protected $_name = [
        'alertId'        => 'AlertId',
        'alertName'      => 'AlertName',
        'annotations'    => 'Annotations',
        'clusterId'      => 'ClusterId',
        'dispatchRuleId' => 'DispatchRuleId',
        'duration'       => 'Duration',
        'expression'     => 'Expression',
        'labels'         => 'Labels',
        'message'        => 'Message',
        'notifyType'     => 'NotifyType',
        'regionId'       => 'RegionId',
        'tags'           => 'Tags',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

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
            $res['Annotations'] = $this->annotations;
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
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrometheusAlertRuleRequest
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
            $model->annotations = $map['Annotations'];
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
            $model->labels = $map['Labels'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
