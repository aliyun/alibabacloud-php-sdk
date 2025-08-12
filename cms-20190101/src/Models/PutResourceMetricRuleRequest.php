<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\compositeExpression;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\labels;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\prometheus;

class PutResourceMetricRuleRequest extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @var compositeExpression
     */
    public $compositeExpression;

    /**
     * @var string
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $effectiveInterval;

    /**
     * @var string
     */
    public $emailSubject;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var labels[]
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
    public $noEffectiveInterval;

    /**
     * @var string
     */
    public $period;

    /**
     * @var prometheus
     */
    public $prometheus;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'escalations' => 'Escalations',
        'compositeExpression' => 'CompositeExpression',
        'contactGroups' => 'ContactGroups',
        'effectiveInterval' => 'EffectiveInterval',
        'emailSubject' => 'EmailSubject',
        'interval' => 'Interval',
        'labels' => 'Labels',
        'metricName' => 'MetricName',
        'namespace' => 'Namespace',
        'noDataPolicy' => 'NoDataPolicy',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'period' => 'Period',
        'prometheus' => 'Prometheus',
        'resources' => 'Resources',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'silenceTime' => 'SilenceTime',
        'webhook' => 'Webhook',
    ];

    public function validate()
    {
        if (null !== $this->escalations) {
            $this->escalations->validate();
        }
        if (null !== $this->compositeExpression) {
            $this->compositeExpression->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->prometheus) {
            $this->prometheus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toArray($noStream) : $this->escalations;
        }

        if (null !== $this->compositeExpression) {
            $res['CompositeExpression'] = null !== $this->compositeExpression ? $this->compositeExpression->toArray($noStream) : $this->compositeExpression;
        }

        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }

        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }

        if (null !== $this->emailSubject) {
            $res['EmailSubject'] = $this->emailSubject;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->prometheus) {
            $res['Prometheus'] = null !== $this->prometheus ? $this->prometheus->toArray($noStream) : $this->prometheus;
        }

        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }

        if (isset($map['CompositeExpression'])) {
            $model->compositeExpression = compositeExpression::fromMap($map['CompositeExpression']);
        }

        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }

        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }

        if (isset($map['EmailSubject'])) {
            $model->emailSubject = $map['EmailSubject'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Prometheus'])) {
            $model->prometheus = prometheus::fromMap($map['Prometheus']);
        }

        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
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
