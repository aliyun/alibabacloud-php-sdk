<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetResourceRuleResponseBody\ruleItems;

class GetResourceRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $metricOperationType;

    /**
     * @var string
     */
    public $metricPullInfo;

    /**
     * @var string
     */
    public $metricPullPeriod;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceRuleId;

    /**
     * @var string
     */
    public $ruleComputingDefinition;

    /**
     * @var ruleItems[]
     */
    public $ruleItems;
    protected $_name = [
        'description' => 'Description',
        'metricOperationType' => 'MetricOperationType',
        'metricPullInfo' => 'MetricPullInfo',
        'metricPullPeriod' => 'MetricPullPeriod',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'resourceRuleId' => 'ResourceRuleId',
        'ruleComputingDefinition' => 'RuleComputingDefinition',
        'ruleItems' => 'RuleItems',
    ];

    public function validate()
    {
        if (\is_array($this->ruleItems)) {
            Model::validateArray($this->ruleItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->metricOperationType) {
            $res['MetricOperationType'] = $this->metricOperationType;
        }

        if (null !== $this->metricPullInfo) {
            $res['MetricPullInfo'] = $this->metricPullInfo;
        }

        if (null !== $this->metricPullPeriod) {
            $res['MetricPullPeriod'] = $this->metricPullPeriod;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceRuleId) {
            $res['ResourceRuleId'] = $this->resourceRuleId;
        }

        if (null !== $this->ruleComputingDefinition) {
            $res['RuleComputingDefinition'] = $this->ruleComputingDefinition;
        }

        if (null !== $this->ruleItems) {
            if (\is_array($this->ruleItems)) {
                $res['RuleItems'] = [];
                $n1 = 0;
                foreach ($this->ruleItems as $item1) {
                    $res['RuleItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MetricOperationType'])) {
            $model->metricOperationType = $map['MetricOperationType'];
        }

        if (isset($map['MetricPullInfo'])) {
            $model->metricPullInfo = $map['MetricPullInfo'];
        }

        if (isset($map['MetricPullPeriod'])) {
            $model->metricPullPeriod = $map['MetricPullPeriod'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceRuleId'])) {
            $model->resourceRuleId = $map['ResourceRuleId'];
        }

        if (isset($map['RuleComputingDefinition'])) {
            $model->ruleComputingDefinition = $map['RuleComputingDefinition'];
        }

        if (isset($map['RuleItems'])) {
            if (!empty($map['RuleItems'])) {
                $model->ruleItems = [];
                $n1 = 0;
                foreach ($map['RuleItems'] as $item1) {
                    $model->ruleItems[$n1] = ruleItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
