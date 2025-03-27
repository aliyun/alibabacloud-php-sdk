<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeResponseBody\ruleHitsTopTuleType;

class DescribeRuleHitsTopTuleTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleHitsTopTuleType[]
     */
    public $ruleHitsTopTuleType;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleHitsTopTuleType' => 'RuleHitsTopTuleType',
    ];

    public function validate()
    {
        if (\is_array($this->ruleHitsTopTuleType)) {
            Model::validateArray($this->ruleHitsTopTuleType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleHitsTopTuleType) {
            if (\is_array($this->ruleHitsTopTuleType)) {
                $res['RuleHitsTopTuleType'] = [];
                $n1 = 0;
                foreach ($this->ruleHitsTopTuleType as $item1) {
                    $res['RuleHitsTopTuleType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RuleHitsTopTuleType'])) {
            if (!empty($map['RuleHitsTopTuleType'])) {
                $model->ruleHitsTopTuleType = [];
                $n1 = 0;
                foreach ($map['RuleHitsTopTuleType'] as $item1) {
                    $model->ruleHitsTopTuleType[$n1++] = ruleHitsTopTuleType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
