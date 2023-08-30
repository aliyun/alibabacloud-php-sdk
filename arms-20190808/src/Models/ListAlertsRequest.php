<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListAlertsRequest extends Model
{
    /**
     * @description The name of the alert rule.
     *
     * @example Test alert
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The ID of the notification policy.
     *
     * @example 12345
     *
     * @var int
     */
    public $dispatchRuleId;

    /**
     * @description The end time of the alert sending history that you want to query. Specify the time in the `YYYY-MM-DD HH:mm:ss` format.
     *
     * @example 2021-12-22 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The integration type.
     *
     *   ARMS
     *   CLOUD_MONITOR
     *   MSE
     *   ARMS_CLOUD_DIALTEST
     *   PROMETHEUS
     *   LOG_SERVICE
     *   CUSTOM
     *   ARMS_PROMETHEUS
     *   ARMS_APP_MON
     *   ARMS_FRONT_MON
     *   ARMS_CUSTOM
     *   XTRACE
     *   GRAFANA
     *   ZABBIX
     *   SKYWALKING
     *   EVENT_BRIDGE
     *   NAGIOS
     *   OPENFALCON
     *   ARMS_INSIGHTS
     *
     * @example ARMS_APP_MON
     *
     * @var string
     */
    public $integrationType;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The severity level of the alert. Valid values: P6, P5, P4, P3, P2, and P1. The preceding values are listed in ascending order of severity.
     *
     * @example P6
     *
     * @var string
     */
    public $severity;

    /**
     * @description Specifies whether to query the activities that correspond to alerts. Valid values:
     *
     *   `false` (default value): The activities are not queried.
     *   `true`: The activities in the last three days are queried.
     *
     * @example true
     *
     * @var bool
     */
    public $showActivities;

    /**
     * @description Specifies whether to query the events that correspond to alerts. Valid values:
     *
     *   `false` (default value): The events are not queried.
     *   `true`: The events are queried.
     *
     * @example true
     *
     * @var bool
     */
    public $showEvents;

    /**
     * @description The number of alerts to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The start time of the alert sending history that you want to query. Specify the time in the `YYYY-MM-DD HH:mm:ss` format.
     *
     * @example 2021-12-10 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the alert. Valid values:
     *
     *   0: The alert is pending.
     *   1: The alert is being handled.
     *   2: The alert is handled.
     *
     * @example 2
     *
     * @var int
     */
    public $state;
    protected $_name = [
        'alertName'       => 'AlertName',
        'dispatchRuleId'  => 'DispatchRuleId',
        'endTime'         => 'EndTime',
        'integrationType' => 'IntegrationType',
        'page'            => 'Page',
        'regionId'        => 'RegionId',
        'severity'        => 'Severity',
        'showActivities'  => 'ShowActivities',
        'showEvents'      => 'ShowEvents',
        'size'            => 'Size',
        'startTime'       => 'StartTime',
        'state'           => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->dispatchRuleId) {
            $res['DispatchRuleId'] = $this->dispatchRuleId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->showActivities) {
            $res['ShowActivities'] = $this->showActivities;
        }
        if (null !== $this->showEvents) {
            $res['ShowEvents'] = $this->showEvents;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['DispatchRuleId'])) {
            $model->dispatchRuleId = $map['DispatchRuleId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['ShowActivities'])) {
            $model->showActivities = $map['ShowActivities'];
        }
        if (isset($map['ShowEvents'])) {
            $model->showEvents = $map['ShowEvents'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
