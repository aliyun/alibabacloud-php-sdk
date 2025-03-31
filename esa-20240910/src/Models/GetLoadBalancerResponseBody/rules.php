<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponseBody\rules\fixedResponse;

class rules extends Model
{
    /**
     * @var fixedResponse
     */
    public $fixedResponse;

    /**
     * @var mixed
     */
    public $overrides;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $ruleEnable;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var bool
     */
    public $terminates;
    protected $_name = [
        'fixedResponse' => 'FixedResponse',
        'overrides' => 'Overrides',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'terminates' => 'Terminates',
    ];

    public function validate()
    {
        if (null !== $this->fixedResponse) {
            $this->fixedResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fixedResponse) {
            $res['FixedResponse'] = null !== $this->fixedResponse ? $this->fixedResponse->toArray($noStream) : $this->fixedResponse;
        }

        if (null !== $this->overrides) {
            $res['Overrides'] = $this->overrides;
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->terminates) {
            $res['Terminates'] = $this->terminates;
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
        if (isset($map['FixedResponse'])) {
            $model->fixedResponse = fixedResponse::fromMap($map['FixedResponse']);
        }

        if (isset($map['Overrides'])) {
            $model->overrides = $map['Overrides'];
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['Terminates'])) {
            $model->terminates = $map['Terminates'];
        }

        return $model;
    }
}
