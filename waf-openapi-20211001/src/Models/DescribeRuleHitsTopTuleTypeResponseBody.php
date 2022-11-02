<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeResponseBody\ruleHitsTopTuleType;
use AlibabaCloud\Tea\Model;

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
