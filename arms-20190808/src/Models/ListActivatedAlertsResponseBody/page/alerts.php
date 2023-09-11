<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponseBody\page;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponseBody\page\alerts\dispatchRules;
use AlibabaCloud\Tea\Model;

class alerts extends Model
{
    /**
     * @description The ID of the alert rule.
     *
     * @example 3888704
     *
     * @var string
     */
    public $alertId;

    /**
     * @description The name of the alert rule.
     *
     * @example Container CPU usage is greater than 80%
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The type of the alert.
     *
     * @example PROMETHEUS_MONITORING_ALERT_RULE
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The number of times that the alert event was received.
     *
     * @example 598
     *
     * @var int
     */
    public $count;

    /**
     * @description The timestamp when the alert rule was created.
     *
     * @example 1616466300000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The notification policies.
     *
     * @var dispatchRules[]
     */
    public $dispatchRules;

    /**
     * @description The timestamp when the alert was ended.
     *
     * @example 1616502540000
     *
     * @var int
     */
    public $endsAt;

    /**
     * @description The extended fields that indicate the following tags:
     *
     *   The tags that are carried in the metrics of the alert rule expression.
     *   The tags that are created based on the alert rule.
     *   The default tags of Application Real-Time Monitoring Service (ARMS).
     *
     * @var mixed[]
     */
    public $expandFields;

    /**
     * @description The name of the object that is associated with the alert.
     *
     * @example testphp2
     *
     * @var string
     */
    public $integrationName;

    /**
     * @description The type of the service integration that generated the alert.
     *
     * @example PROMETHEUS
     *
     * @var string
     */
    public $integrationType;

    /**
     * @description The type of the object that is associated with the alert.
     *
     * @example cluster
     *
     * @var string
     */
    public $involvedObjectKind;

    /**
     * @description The name of the service integration that generated the alert.
     *
     * @example Test integration-prometheus
     *
     * @var string
     */
    public $involvedObjectName;

    /**
     * @description The description of the alert.
     *
     * @example Alarm name: PodRestart_testphp2,\n Pod night-test-group-1-1-5f5d6f4d84-pszns is restart, Value: 133.33%, 1.33%
     *
     * @var string
     */
    public $message;

    /**
     * @description The level of the alert. Valid values:
     *
     *   `critical`
     *   `error`
     *   `warn`
     *   `page`
     *
     * @example critical
     *
     * @var string
     */
    public $severity;

    /**
     * @description The timestamp when the alert was generated.
     *
     * @example 1616466300000
     *
     * @var int
     */
    public $startsAt;

    /**
     * @description The status of the alert. Valid values:
     *
     *   `Active`
     *   `Inhibited`
     *   `Silenced`
     *   `Resolved`
     *
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'alertId'            => 'AlertId',
        'alertName'          => 'AlertName',
        'alertType'          => 'AlertType',
        'count'              => 'Count',
        'createTime'         => 'CreateTime',
        'dispatchRules'      => 'DispatchRules',
        'endsAt'             => 'EndsAt',
        'expandFields'       => 'ExpandFields',
        'integrationName'    => 'IntegrationName',
        'integrationType'    => 'IntegrationType',
        'involvedObjectKind' => 'InvolvedObjectKind',
        'involvedObjectName' => 'InvolvedObjectName',
        'message'            => 'Message',
        'severity'           => 'Severity',
        'startsAt'           => 'StartsAt',
        'status'             => 'Status',
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
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dispatchRules) {
            $res['DispatchRules'] = [];
            if (null !== $this->dispatchRules && \is_array($this->dispatchRules)) {
                $n = 0;
                foreach ($this->dispatchRules as $item) {
                    $res['DispatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endsAt) {
            $res['EndsAt'] = $this->endsAt;
        }
        if (null !== $this->expandFields) {
            $res['ExpandFields'] = $this->expandFields;
        }
        if (null !== $this->integrationName) {
            $res['IntegrationName'] = $this->integrationName;
        }
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->involvedObjectKind) {
            $res['InvolvedObjectKind'] = $this->involvedObjectKind;
        }
        if (null !== $this->involvedObjectName) {
            $res['InvolvedObjectName'] = $this->involvedObjectName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->startsAt) {
            $res['StartsAt'] = $this->startsAt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alerts
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
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DispatchRules'])) {
            if (!empty($map['DispatchRules'])) {
                $model->dispatchRules = [];
                $n                    = 0;
                foreach ($map['DispatchRules'] as $item) {
                    $model->dispatchRules[$n++] = null !== $item ? dispatchRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndsAt'])) {
            $model->endsAt = $map['EndsAt'];
        }
        if (isset($map['ExpandFields'])) {
            $model->expandFields = $map['ExpandFields'];
        }
        if (isset($map['IntegrationName'])) {
            $model->integrationName = $map['IntegrationName'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['InvolvedObjectKind'])) {
            $model->involvedObjectKind = $map['InvolvedObjectKind'];
        }
        if (isset($map['InvolvedObjectName'])) {
            $model->involvedObjectName = $map['InvolvedObjectName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['StartsAt'])) {
            $model->startsAt = $map['StartsAt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
