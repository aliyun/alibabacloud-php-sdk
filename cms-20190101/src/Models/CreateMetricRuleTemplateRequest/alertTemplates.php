<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleTemplateRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleTemplateRequest\alertTemplates\escalations;
use AlibabaCloud\Tea\Model;

class alertTemplates extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * To obtain the abbreviation of an Alibaba Cloud service name, call the [DescribeProjectMeta](~~114916~~) operation. The `metricCategory` tag in the `Labels` response parameter indicates the abbreviation of the Alibaba Cloud service name.
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The name of the metric. Valid values of N: 1 to 200.
     *
     * >  For more information, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~28619~~).
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service. Valid values of N: 1 to 200.
     *
     * >  For more information, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~28619~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The aggregation period of monitoring data. Unit: seconds.
     *
     * Valid values of N: 1 to 200.
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
     * @description The name of the alert rule. Valid values of N: 1 to 200.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The extended field selectors. Valid values of N: 1 to 200.
     *
     * @example {"disk":"/"}
     *
     * @var string
     */
    public $selector;

    /**
     * @description The callback URL to which a POST request is sent when an alert is triggered based on the alert rule.
     *
     * @example http://ww.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'escalations' => 'Escalations',
        'category'    => 'Category',
        'metricName'  => 'MetricName',
        'namespace'   => 'Namespace',
        'period'      => 'Period',
        'ruleName'    => 'RuleName',
        'selector'    => 'Selector',
        'webhook'     => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
     * @return alertTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
