<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopClientIpResponseBody\ruleHitsTopClientIp;

class DescribeRuleHitsTopClientIpResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleHitsTopClientIp[]
     */
    public $ruleHitsTopClientIp;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleHitsTopClientIp' => 'RuleHitsTopClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->ruleHitsTopClientIp)) {
            Model::validateArray($this->ruleHitsTopClientIp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleHitsTopClientIp) {
            if (\is_array($this->ruleHitsTopClientIp)) {
                $res['RuleHitsTopClientIp'] = [];
                $n1 = 0;
                foreach ($this->ruleHitsTopClientIp as $item1) {
                    $res['RuleHitsTopClientIp'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleHitsTopClientIp'])) {
            if (!empty($map['RuleHitsTopClientIp'])) {
                $model->ruleHitsTopClientIp = [];
                $n1 = 0;
                foreach ($map['RuleHitsTopClientIp'] as $item1) {
                    $model->ruleHitsTopClientIp[$n1] = ruleHitsTopClientIp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
