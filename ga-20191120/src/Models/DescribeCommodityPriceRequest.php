<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest\orders;

class DescribeCommodityPriceRequest extends Model
{
    /**
     * @var orders[]
     */
    public $orders;

    /**
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'orders' => 'Orders',
        'promotionOptionNo' => 'PromotionOptionNo',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->orders)) {
            Model::validateArray($this->orders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orders) {
            if (\is_array($this->orders)) {
                $res['Orders'] = [];
                $n1 = 0;
                foreach ($this->orders as $item1) {
                    $res['Orders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Orders'])) {
            if (!empty($map['Orders'])) {
                $model->orders = [];
                $n1 = 0;
                foreach ($map['Orders'] as $item1) {
                    $model->orders[$n1] = orders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
