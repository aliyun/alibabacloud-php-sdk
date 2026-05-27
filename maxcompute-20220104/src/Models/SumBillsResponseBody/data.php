<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumBillsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumBillsResponseBody\data\itemBills;

class data extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var itemBills[]
     */
    public $itemBills;

    /**
     * @var string
     */
    public $totalCost;
    protected $_name = [
        'currency' => 'currency',
        'itemBills' => 'itemBills',
        'totalCost' => 'totalCost',
    ];

    public function validate()
    {
        if (\is_array($this->itemBills)) {
            Model::validateArray($this->itemBills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->itemBills) {
            if (\is_array($this->itemBills)) {
                $res['itemBills'] = [];
                $n1 = 0;
                foreach ($this->itemBills as $item1) {
                    $res['itemBills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['itemBills'])) {
            if (!empty($map['itemBills'])) {
                $model->itemBills = [];
                $n1 = 0;
                foreach ($map['itemBills'] as $item1) {
                    $model->itemBills[$n1] = itemBills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCost'])) {
            $model->totalCost = $map['totalCost'];
        }

        return $model;
    }
}
