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
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $webhook;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $selector;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'escalations' => 'Escalations',
        'metricName'  => 'MetricName',
        'webhook'     => 'Webhook',
        'namespace'   => 'Namespace',
        'ruleName'    => 'RuleName',
        'period'      => 'Period',
        'selector'    => 'Selector',
        'category'    => 'Category',
    ];

    public function validate()
    {
        Model::validateRequired('escalations', $this->escalations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
