<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class DryRunConfigRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $complianceType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ruleConditionContext;
    protected $_name = [
        'complianceType' => 'ComplianceType',
        'requestId' => 'RequestId',
        'ruleConditionContext' => 'RuleConditionContext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleConditionContext) {
            $res['RuleConditionContext'] = $this->ruleConditionContext;
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
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleConditionContext'])) {
            $model->ruleConditionContext = $map['RuleConditionContext'];
        }

        return $model;
    }
}
