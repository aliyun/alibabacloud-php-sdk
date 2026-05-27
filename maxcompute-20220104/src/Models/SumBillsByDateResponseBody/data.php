<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumBillsByDateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\SumBillsByDateResponseBody\data\itemBills;

class data extends Model
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
    public $dateTime;

    /**
     * @var itemBills[]
     */
    public $itemBills;
    protected $_name = [
        'cost' => 'cost',
        'currency' => 'currency',
        'dateTime' => 'dateTime',
        'itemBills' => 'itemBills',
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
        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
        }

        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->dateTime) {
            $res['dateTime'] = $this->dateTime;
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

        if (isset($map['dateTime'])) {
            $model->dateTime = $map['dateTime'];
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

        return $model;
    }
}
