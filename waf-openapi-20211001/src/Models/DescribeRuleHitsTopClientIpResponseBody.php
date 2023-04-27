<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopClientIpResponseBody\ruleHitsTopClientIp;
use AlibabaCloud\Tea\Model;

class DescribeRuleHitsTopClientIpResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 9F0F9AD6-62E2-50BB-A3E5-30FFB9410262
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The array of the top 10 IP addresses from which attacks are initiated.
     *
     * @var ruleHitsTopClientIp[]
     */
    public $ruleHitsTopClientIp;
    protected $_name = [
        'requestId'           => 'RequestId',
        'ruleHitsTopClientIp' => 'RuleHitsTopClientIp',
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
        if (null !== $this->ruleHitsTopClientIp) {
            $res['RuleHitsTopClientIp'] = [];
            if (null !== $this->ruleHitsTopClientIp && \is_array($this->ruleHitsTopClientIp)) {
                $n = 0;
                foreach ($this->ruleHitsTopClientIp as $item) {
                    $res['RuleHitsTopClientIp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitsTopClientIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleHitsTopClientIp'])) {
            if (!empty($map['RuleHitsTopClientIp'])) {
                $model->ruleHitsTopClientIp = [];
                $n                          = 0;
                foreach ($map['RuleHitsTopClientIp'] as $item) {
                    $model->ruleHitsTopClientIp[$n++] = null !== $item ? ruleHitsTopClientIp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
