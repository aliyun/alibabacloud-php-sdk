<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates\escalations;
use AlibabaCloud\Tea\Model;

class alertTemplates extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @description The abbreviation of the cloud service name.
     *
     * For more information about how to obtain the abbreviation of a cloud service name, see `metricCategory` in the response parameter `Labels` of the [DescribeProjectMeta](~~114916~~) operation.
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The metric name.
     *
     * For information about how to obtain metrics, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~163515~~).
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
     * @description The statistical period of the monitoring data.
     *
     * > If the value is set to 300 seconds, the monitoring data is collected every 300 seconds. If the monitoring data is reported every 1 minute, the alert system calculates the average, maximum, and minimum values of the monitoring data of 5 minutes and checks whether the aggregated values exceed the threshold. To prevent unexpected alerts, we recommend that you set this parameter together with other parameters.
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
     * @description The name of the alert rule.
     *
     * Valid values of N: 1 to 200.
     * @example rule1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The dimension of the alert. It is an extended field.
     *
     * > For more information about the values of extended fields, see [DescribeMetricRuleTemplateAttribute](~~114979~~).
     * @example {"disk":"/"}
     *
     * @var string
     */
    public $selector;

    /**
     * @description The callback URL.
     *
     * The callback URL must be accessible over the Internet. CloudMonitor pushes an alert notification to the specified callback URL by sending an HTTP POST request. Only the HTTP protocol is supported.
     * @example https://apiwebhook.hipac.cn/api/v1/alarm/aly/eregfeeferrtbnmkdszp
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
