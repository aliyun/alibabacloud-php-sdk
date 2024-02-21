<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceResponseBody\priceInfo;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example 买满1年，立享官网价格8.5折优惠。
     *
     * @var string
     */
    public $description;

    /**
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
     * @return rules
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
