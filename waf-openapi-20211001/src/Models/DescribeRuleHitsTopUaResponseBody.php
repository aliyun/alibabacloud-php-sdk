<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUaResponseBody\ruleHitsTopUa;
use AlibabaCloud\Tea\Model;

class DescribeRuleHitsTopUaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleHitsTopUa[]
     */
    public $ruleHitsTopUa;
    protected $_name = [
        'requestId'     => 'RequestId',
        'ruleHitsTopUa' => 'RuleHitsTopUa',
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
        if (null !== $this->ruleHitsTopUa) {
            $res['RuleHitsTopUa'] = [];
            if (null !== $this->ruleHitsTopUa && \is_array($this->ruleHitsTopUa)) {
                $n = 0;
                foreach ($this->ruleHitsTopUa as $item) {
                    $res['RuleHitsTopUa'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitsTopUaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleHitsTopUa'])) {
            if (!empty($map['RuleHitsTopUa'])) {
                $model->ruleHitsTopUa = [];
                $n                    = 0;
                foreach ($map['RuleHitsTopUa'] as $item) {
                    $model->ruleHitsTopUa[$n++] = null !== $item ? ruleHitsTopUa::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
