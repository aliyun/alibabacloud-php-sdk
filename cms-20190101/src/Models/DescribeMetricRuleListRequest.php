<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricRuleListRequest extends Model
{
    /**
     * @description The status of the alert rule. Valid values:
     *
     *   OK: The alert rule has no active alerts.
     *   ALARM: The alert rule has active alerts.
     *   INSUFFICIENT_DATA: No data is available.
     *
     * @example OK
     *
     * @var string
     */
    public $alertState;

    /**
     * @description The dimensions of the alert rule. The dimensions specify the resources for which you want to query monitoring data.
     *
     * Set the value to a set of key-value pairs, for example, `userId:120886317861****` or `i-2ze2d6j5uhg20x47****`.
     * @example {"instanceId":"i-2ze2d6j5uhg20x47****"}
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description Specifies whether to query enabled or disabled alert rules. Valid values:
     *
     *   true: queries enabled alert rules.
     *   false: queries disabled alert rules.
     *
     * @example true
     *
     * @var bool
     */
    public $enableState;

    /**
     * @description The ID of the application group.
     *
     * For information about how to obtain the ID of an application group, see [DescribeMonitorGroups](~~115032~~).
     * @example 7301****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the metric.
     *
     * For information about how to obtain the name of a metric, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~163515~~).
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * For information about how to obtain the namespace of a cloud service, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~163515~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The page number of the page to return.
     *
     * Minimum value: 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries to return on each page.
     *
     * Minimum value: 1. Default value: 10.
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
     * @description The ID of the alert rule. You can specify up to 20 IDs at a time. Separate multiple IDs with commas (,).
     *
     * @example applyTemplate344cfd42-0f32-4fd6-805a-88d7908a****
     *
     * @var string
     */
    public $ruleIds;

    /**
     * @description The name of the alert rule.
     *
     * This parameter supports fuzzy match.
     * @example Rule_01
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'alertState'  => 'AlertState',
        'dimensions'  => 'Dimensions',
        'enableState' => 'EnableState',
        'groupId'     => 'GroupId',
        'metricName'  => 'MetricName',
        'namespace'   => 'Namespace',
        'page'        => 'Page',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'ruleIds'     => 'RuleIds',
        'ruleName'    => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertState) {
            $res['AlertState'] = $this->alertState;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
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
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRuleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
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
        if (isset($map['RuleIds'])) {
            $model->ruleIds = $map['RuleIds'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
