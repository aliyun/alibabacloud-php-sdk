<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price;

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
     * @var int[]
     */
    public $ruleIds;
    protected $_name = [
        'discountOff' => 'DiscountOff',
        'name' => 'Name',
        'ruleIds' => 'RuleIds',
    ];

    public function validate()
    {
        if (\is_array($this->ruleIds)) {
            Model::validateArray($this->ruleIds);
        }
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

        if (null !== $this->ruleIds) {
            if (\is_array($this->ruleIds)) {
                $res['RuleIds'] = [];
                $n1 = 0;
                foreach ($this->ruleIds as $item1) {
                    $res['RuleIds'][$n1] = $item1;
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
        if (isset($map['DiscountOff'])) {
            $model->discountOff = $map['DiscountOff'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = [];
                $n1 = 0;
                foreach ($map['RuleIds'] as $item1) {
                    $model->ruleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
