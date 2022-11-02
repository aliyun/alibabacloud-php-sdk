<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopRuleIdResponseBody;

use AlibabaCloud\Tea\Model;

class ruleHitsTopRuleId extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'count'    => 'Count',
        'resource' => 'Resource',
        'ruleId'   => 'RuleId',
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
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitsTopRuleId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
