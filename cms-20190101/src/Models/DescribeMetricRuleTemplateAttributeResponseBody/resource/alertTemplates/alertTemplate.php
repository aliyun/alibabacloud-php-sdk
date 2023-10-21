<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\labels;
use AlibabaCloud\Tea\Model;

class alertTemplate extends Model
{
    /**
     * @description The abbreviation of the cloud service name.
     *
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The threshold and the alert level.
     *
     * @var escalations
     */
    public $escalations;

    /**
     * @description 报警模板标签。
     *
     * @var labels
     */
    public $labels;

    /**
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The processing method of alerts when no monitoring data is found. Valid values:
     *
     *   KEEP_LAST_STATE (default value): No operation is performed.
     *   INSUFFICIENT_DATA: An alert whose content is "Insufficient data" is triggered.
     *   OK: The alert rule has no active alerts.
     *
     * @example KEEP_LAST_STATE
     *
     * @var string
     */
    public $noDataPolicy;

    /**
     * @description The name of the alert rule.
     *
     * @example ECS_Rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The dimension of the alert. It is an extended field.
     *
     * @example {"disk":"/"}
     *
     * @var string
     */
    public $selector;

    /**
     * @description The callback URL to which a request is sent when an alert is triggered.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'category'     => 'Category',
        'escalations'  => 'Escalations',
        'labels'       => 'Labels',
        'metricName'   => 'MetricName',
        'namespace'    => 'Namespace',
        'noDataPolicy' => 'NoDataPolicy',
        'ruleName'     => 'RuleName',
        'selector'     => 'Selector',
        'webhook'      => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }
        if (null !== $this->labels) {
            $res['Labels'] = null !== $this->labels ? $this->labels->toMap() : null;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->noDataPolicy) {
            $res['NoDataPolicy'] = $this->noDataPolicy;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['Labels'])) {
            $model->labels = labels::fromMap($map['Labels']);
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NoDataPolicy'])) {
            $model->noDataPolicy = $map['NoDataPolicy'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
