<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeResponseBody;

use AlibabaCloud\Tea\Model;

class ruleHitsTopTuleType extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'count'    => 'Count',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitsTopTuleType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
