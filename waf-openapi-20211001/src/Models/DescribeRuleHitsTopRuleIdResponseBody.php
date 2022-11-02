<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopRuleIdResponseBody\ruleHitsTopRuleId;
use AlibabaCloud\Tea\Model;

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
        'requestId'         => 'RequestId',
        'ruleHitsTopRuleId' => 'RuleHitsTopRuleId',
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
        if (null !== $this->ruleHitsTopRuleId) {
            $res['RuleHitsTopRuleId'] = [];
            if (null !== $this->ruleHitsTopRuleId && \is_array($this->ruleHitsTopRuleId)) {
                $n = 0;
                foreach ($this->ruleHitsTopRuleId as $item) {
                    $res['RuleHitsTopRuleId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitsTopRuleIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleHitsTopRuleId'])) {
            if (!empty($map['RuleHitsTopRuleId'])) {
                $model->ruleHitsTopRuleId = [];
                $n                        = 0;
                foreach ($map['RuleHitsTopRuleId'] as $item) {
                    $model->ruleHitsTopRuleId[$n++] = null !== $item ? ruleHitsTopRuleId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
