<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\labels;

class alertTemplate extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @var labels
     */
    public $labels;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $noDataPolicy;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $selector;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'category' => 'Category',
        'escalations' => 'Escalations',
        'labels' => 'Labels',
        'metricName' => 'MetricName',
        'namespace' => 'Namespace',
        'noDataPolicy' => 'NoDataPolicy',
        'ruleName' => 'RuleName',
        'selector' => 'Selector',
        'silenceTime' => 'SilenceTime',
        'webhook' => 'Webhook',
    ];

    public function validate()
    {
        if (null !== $this->escalations) {
            $this->escalations->validate();
        }
        if (null !== $this->labels) {
            $this->labels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toArray($noStream) : $this->escalations;
        }

        if (null !== $this->labels) {
            $res['Labels'] = null !== $this->labels ? $this->labels->toArray($noStream) : $this->labels;
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

        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }

        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }

        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
