<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopRuleIdResponseBody\ruleHitsTopRuleId;

class DescribeRuleHitsTopRuleIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleHitsTopRuleId[]
     */
    public $ruleHitsTopRuleId;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleHitsTopRuleId' => 'RuleHitsTopRuleId',
    ];

    public function validate()
    {
        if (\is_array($this->ruleHitsTopRuleId)) {
            Model::validateArray($this->ruleHitsTopRuleId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleHitsTopRuleId) {
            if (\is_array($this->ruleHitsTopRuleId)) {
                $res['RuleHitsTopRuleId'] = [];
                $n1 = 0;
                foreach ($this->ruleHitsTopRuleId as $item1) {
                    $res['RuleHitsTopRuleId'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleHitsTopRuleId'])) {
            if (!empty($map['RuleHitsTopRuleId'])) {
                $model->ruleHitsTopRuleId = [];
                $n1 = 0;
                foreach ($map['RuleHitsTopRuleId'] as $item1) {
                    $model->ruleHitsTopRuleId[$n1++] = ruleHitsTopRuleId::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
