<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumDailyBillsByItemResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumDailyBillsByItemResponseBody\data\itemSummaryBills\dailySumBills;

class itemSummaryBills extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var dailySumBills[]
     */
    public $dailySumBills;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var float
     */
    public $percentage;

    /**
     * @var string
     */
    public $specCode;

    /**
     * @var string
     */
    public $totalCost;
    protected $_name = [
        'currency' => 'currency',
        'dailySumBills' => 'dailySumBills',
        'itemName' => 'itemName',
        'percentage' => 'percentage',
        'specCode' => 'specCode',
        'totalCost' => 'totalCost',
    ];

    public function validate()
    {
        if (\is_array($this->dailySumBills)) {
            Model::validateArray($this->dailySumBills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->dailySumBills) {
            if (\is_array($this->dailySumBills)) {
                $res['dailySumBills'] = [];
                $n1 = 0;
                foreach ($this->dailySumBills as $item1) {
                    $res['dailySumBills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemName) {
            $res['itemName'] = $this->itemName;
        }

        if (null !== $this->percentage) {
            $res['percentage'] = $this->percentage;
        }

        if (null !== $this->specCode) {
            $res['specCode'] = $this->specCode;
        }

        if (null !== $this->totalCost) {
            $res['totalCost'] = $this->totalCost;
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
        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['dailySumBills'])) {
            if (!empty($map['dailySumBills'])) {
                $model->dailySumBills = [];
                $n1 = 0;
                foreach ($map['dailySumBills'] as $item1) {
                    $model->dailySumBills[$n1] = dailySumBills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['itemName'])) {
            $model->itemName = $map['itemName'];
        }

        if (isset($map['percentage'])) {
            $model->percentage = $map['percentage'];
        }

        if (isset($map['specCode'])) {
            $model->specCode = $map['specCode'];
        }

        if (isset($map['totalCost'])) {
            $model->totalCost = $map['totalCost'];
        }

        return $model;
    }
}
