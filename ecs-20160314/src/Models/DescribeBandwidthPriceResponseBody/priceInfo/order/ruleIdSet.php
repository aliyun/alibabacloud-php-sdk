<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeBandwidthPriceResponseBody\priceInfo\order;

use AlibabaCloud\Tea\Model;

class ruleIdSet extends Model
{
    /**
     * @var string[]
     */
    public $ruleId;
    protected $_name = [
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleIdSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            if (!empty($map['RuleId'])) {
                $model->ruleId = $map['RuleId'];
            }
        }

        return $model;
    }
}
