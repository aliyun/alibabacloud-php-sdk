<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $retryTimes;

    /**
     * @var string
     */
    public $metricValues;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $productCategory;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $lastAlertTime;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var escalation
     */
    public $escalation;
    protected $_name = [
        'metricName'      => 'MetricName',
        'retryTimes'      => 'RetryTimes',
        'metricValues'    => 'MetricValues',
        'namespace'       => 'Namespace',
        'ruleName'        => 'RuleName',
        'ruleId'          => 'RuleId',
        'productCategory' => 'ProductCategory',
        'startTime'       => 'StartTime',
        'resource'        => 'Resource',
        'lastModifyTime'  => 'LastModifyTime',
        'groupId'         => 'GroupId',
        'dimensions'      => 'Dimensions',
        'lastAlertTime'   => 'LastAlertTime',
        'level'           => 'Level',
        'threshold'       => 'Threshold',
        'statistics'      => 'Statistics',
        'enable'          => 'Enable',
        'escalation'      => 'Escalation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
        }
        if (null !== $this->metricValues) {
            $res['MetricValues'] = $this->metricValues;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->productCategory) {
            $res['ProductCategory'] = $this->productCategory;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->lastAlertTime) {
            $res['LastAlertTime'] = $this->lastAlertTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->escalation) {
            $res['Escalation'] = null !== $this->escalation ? $this->escalation->toMap() : null;
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }
        if (isset($map['MetricValues'])) {
            $model->metricValues = $map['MetricValues'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ProductCategory'])) {
            $model->productCategory = $map['ProductCategory'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['LastAlertTime'])) {
            $model->lastAlertTime = $map['LastAlertTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Escalation'])) {
            $model->escalation = escalation::fromMap($map['Escalation']);
        }

        return $model;
    }
}
