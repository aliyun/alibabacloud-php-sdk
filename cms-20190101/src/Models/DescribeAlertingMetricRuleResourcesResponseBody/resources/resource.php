<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The dimensions that specify the resources whose monitoring data you want to query.
     *
     * @example {\"region\":\"cn-huhehaote\",\"queue\":\"test-0128\",\"userId\":\"120886317861****\"}
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description Indicates whether the alert rule is enabled. Valid values:
     *
     *   true: The alert rule is enabled.
     *   false: The alert rule is disabled.
     *
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The alert rule based on which the alert is triggered.
     *
     * @var escalation
     */
    public $escalation;

    /**
     * @description The ID of the application group.
     *
     * > If the alert rule is associated with an application group, the ID of the application group is returned in this parameter.
     * @example 7671****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The timestamp when the last alert was triggered for the resource based on the alert rule.
     *
     * Unit: milliseconds.
     * @example 1622427900000
     *
     * @var string
     */
    public $lastAlertTime;

    /**
     * @description The timestamp when the alert rule was last modified.
     *
     * Unit: milliseconds.
     * @example 1622827900000
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description The severity level and notification methods of the alert. Valid values:
     *
     *   4: Alert notifications are sent by using emails and DingTalk chatbots.
     *   OK: No alert is generated.
     *
     * @example 3
     *
     * @var int
     */
    public $level;

    /**
     * @description The metric name.
     *
     * @example ActiveMessages
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The metric value that triggered the alert based on the alert rule. The value is a JSON string.
     *
     * @example {\"timestamp\":1623727500000,\"Sum\":926,\"value\":463,\"Maximum\":463,\"Minimum\":463,\"Average\":463,\"SampleCount\":2,\"userId\":\"120886317861****\",\"region\":\"cn-huhehaote\",\"queue\":\"test-0128\"}
     *
     * @var string
     */
    public $metricValues;

    /**
     * @description The namespace of the cloud service.
     *
     * @example acs_mns_new
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The type of the cloud service.
     *
     * @example mns
     *
     * @var string
     */
    public $productCategory;

    /**
     * @description The resources that are monitored.
     *
     * @example userId=120886317861****,region=cn-huhehaote,queue=test-0128
     *
     * @var string
     */
    public $resource;

    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an alert is triggered.
     *
     * @example 3
     *
     * @var string
     */
    public $retryTimes;

    /**
     * @description The ID of the alert rule.
     *
     * @example putNewAlarm_user_7e78d765-0e3e-4671-ba6d-7ce39108****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @example test123456789
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The timestamp when the resource was associated with the alert rule.
     *
     * Unit: milliseconds.
     * @example 1622427900000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The method used to calculate metric values that trigger alerts.
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The alert threshold.
     *
     * @example 10
     *
     * @var string
     */
    public $threshold;
    protected $_name = [
        'dimensions'      => 'Dimensions',
        'enable'          => 'Enable',
        'escalation'      => 'Escalation',
        'groupId'         => 'GroupId',
        'lastAlertTime'   => 'LastAlertTime',
        'lastModifyTime'  => 'LastModifyTime',
        'level'           => 'Level',
        'metricName'      => 'MetricName',
        'metricValues'    => 'MetricValues',
        'namespace'       => 'Namespace',
        'productCategory' => 'ProductCategory',
        'resource'        => 'Resource',
        'retryTimes'      => 'RetryTimes',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'startTime'       => 'StartTime',
        'statistics'      => 'Statistics',
        'threshold'       => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->escalation) {
            $res['Escalation'] = null !== $this->escalation ? $this->escalation->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lastAlertTime) {
            $res['LastAlertTime'] = $this->lastAlertTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricValues) {
            $res['MetricValues'] = $this->metricValues;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->productCategory) {
            $res['ProductCategory'] = $this->productCategory;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
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
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Escalation'])) {
            $model->escalation = escalation::fromMap($map['Escalation']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LastAlertTime'])) {
            $model->lastAlertTime = $map['LastAlertTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricValues'])) {
            $model->metricValues = $map['MetricValues'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ProductCategory'])) {
            $model->productCategory = $map['ProductCategory'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
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
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
