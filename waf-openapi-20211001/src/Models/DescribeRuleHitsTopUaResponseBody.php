<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUaResponseBody\ruleHitsTopUa;

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
        'requestId' => 'RequestId',
        'ruleHitsTopUa' => 'RuleHitsTopUa',
    ];

    public function validate()
    {
        if (\is_array($this->ruleHitsTopUa)) {
            Model::validateArray($this->ruleHitsTopUa);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleHitsTopUa) {
            if (\is_array($this->ruleHitsTopUa)) {
                $res['RuleHitsTopUa'] = [];
                $n1 = 0;
                foreach ($this->ruleHitsTopUa as $item1) {
                    $res['RuleHitsTopUa'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RuleHitsTopUa'])) {
            if (!empty($map['RuleHitsTopUa'])) {
                $model->ruleHitsTopUa = [];
                $n1 = 0;
                foreach ($map['RuleHitsTopUa'] as $item1) {
                    $model->ruleHitsTopUa[$n1++] = ruleHitsTopUa::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
