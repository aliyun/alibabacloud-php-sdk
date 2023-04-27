<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeResponseBody\ruleHitsTopTuleType;
use AlibabaCloud\Tea\Model;

class DescribeRuleHitsTopTuleTypeResponseBody extends Model
{
    /**
     * @description The number of requests that match the rules of the protection module.
     *
     * @example 45E377CE-0B04-578E-B653-EEA63CFE8DE0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of rules. For details, see the description of **RuleType** in [DescribeRuleHitsTopRuleId](~~DescribeRuleHitsTopRuleId~~).
     *
     * @var ruleHitsTopTuleType[]
     */
    public $ruleHitsTopTuleType;
    protected $_name = [
        'requestId'           => 'RequestId',
        'ruleHitsTopTuleType' => 'RuleHitsTopTuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleHitsTopTuleType) {
            $res['RuleHitsTopTuleType'] = [];
            if (null !== $this->ruleHitsTopTuleType && \is_array($this->ruleHitsTopTuleType)) {
                $n = 0;
                foreach ($this->ruleHitsTopTuleType as $item) {
                    $res['RuleHitsTopTuleType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitsTopTuleTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleHitsTopTuleType'])) {
            if (!empty($map['RuleHitsTopTuleType'])) {
                $model->ruleHitsTopTuleType = [];
                $n                          = 0;
                foreach ($map['RuleHitsTopTuleType'] as $item) {
                    $model->ruleHitsTopTuleType[$n++] = null !== $item ? ruleHitsTopTuleType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
