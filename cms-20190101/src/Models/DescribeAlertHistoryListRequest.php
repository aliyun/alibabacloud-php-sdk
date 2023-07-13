<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertHistoryListRequest extends Model
{
    /**
     * @description The order of alerts. Valid values:
     *
     *   true (default value): reverse chronological order
     *   false: chronological order
     *
     * @example true
     *
     * @var bool
     */
    public $ascending;

    /**
     * @description The end timestamp of the historical alerts that you want to query.
     *
     * Unit: milliseconds.
     * @example 1640608200000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the application group.
     *
     * For information about how to obtain the ID of an application group, see [DescribeMonitorGroups](~~115032~~).
     * @example 7671****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The metric that is used to monitor the cloud service.
     *
     * For information about how to query the name of a metric, see [Appendix 1: Metrics](~~163515~~).
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * For information about how to query the namespace of a cloud service, see [Appendix 1: Metrics](~~163515~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the alert rule.
     *
     * For information about how to obtain the ID of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     * @example applyTemplate61dc81b5-d357-4cf6-a9b7-9f83c1d5****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * For information about how to query the name of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     * @example ECS_Rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The start timestamp of the historical alerts that you want to query.
     *
     * Unit: milliseconds.
     * @example 1640237400000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the alert. Valid values:
     *
     *   ALARM (default value): Alerts are triggered.
     *   OK: No alerts are triggered.
     *
     * @example ALARM
     *
     * @var string
     */
    public $state;

    /**
     * @description Specifies whether alerts are muted. Valid values:
     *
     *   2 (default value): Alerts are muted and are not triggered within the mute period, even if the condition specified in the alert rule is met.
     *   0: Alerts are triggered or cleared.
     *   1: The alert rule is ineffective.
     *
     * @example 2
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ascending'  => 'Ascending',
        'endTime'    => 'EndTime',
        'groupId'    => 'GroupId',
        'metricName' => 'MetricName',
        'namespace'  => 'Namespace',
        'page'       => 'Page',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'ruleId'     => 'RuleId',
        'ruleName'   => 'RuleName',
        'startTime'  => 'StartTime',
        'state'      => 'State',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ascending) {
            $res['Ascending'] = $this->ascending;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertHistoryListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ascending'])) {
            $model->ascending = $map['Ascending'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
