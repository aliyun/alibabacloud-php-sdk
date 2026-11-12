<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price\detailInfos;

use AlibabaCloud\Dara\Model;

class promotions extends Model
{
    /**
     * @var float
     */
    public $discountOff;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'discountOff' => 'DiscountOff',
        'name' => 'Name',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discountOff) {
            $res['DiscountOff'] = $this->discountOff;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['DiscountOff'])) {
            $model->discountOff = $map['DiscountOff'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
