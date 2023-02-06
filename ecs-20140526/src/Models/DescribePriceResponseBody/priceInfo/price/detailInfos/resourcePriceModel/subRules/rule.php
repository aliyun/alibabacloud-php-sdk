<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price\detailInfos\resourcePriceModel\subRules;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The description of the pricing rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the pricing rule.
     *
     * @example 587
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'description' => 'Description',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
