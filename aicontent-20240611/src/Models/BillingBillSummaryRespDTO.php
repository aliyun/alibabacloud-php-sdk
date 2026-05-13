<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BillingBillSummaryRespDTO extends Model
{
    /**
     * @var BillingBillSummaryPointDTO[]
     */
    public $points;

    /**
     * @var float
     */
    public $totalAmount;
    protected $_name = [
        'points' => 'points',
        'totalAmount' => 'totalAmount',
    ];

    public function validate()
    {
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->points) {
            if (\is_array($this->points)) {
                $res['points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['points'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalAmount) {
            $res['totalAmount'] = $this->totalAmount;
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
        if (isset($map['points'])) {
            if (!empty($map['points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['points'] as $item1) {
                    $model->points[$n1] = BillingBillSummaryPointDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalAmount'])) {
            $model->totalAmount = $map['totalAmount'];
        }

        return $model;
    }
}
