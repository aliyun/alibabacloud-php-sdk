<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumDailyBillsByItemResponseBody\data\itemSummaryBills\dailySumBills;

use AlibabaCloud\Dara\Model;

class itemBills extends Model
{
    /**
     * @var string
     */
    public $cost;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var float
     */
    public $percentage;
    protected $_name = [
        'cost' => 'cost',
        'currency' => 'currency',
        'itemName' => 'itemName',
        'percentage' => 'percentage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
        }

        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->itemName) {
            $res['itemName'] = $this->itemName;
        }

        if (null !== $this->percentage) {
            $res['percentage'] = $this->percentage;
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
        if (isset($map['cost'])) {
            $model->cost = $map['cost'];
        }

        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['itemName'])) {
            $model->itemName = $map['itemName'];
        }

        if (isset($map['percentage'])) {
            $model->percentage = $map['percentage'];
        }

        return $model;
    }
}
