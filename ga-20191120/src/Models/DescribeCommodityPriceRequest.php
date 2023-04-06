<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceRequest\orders;
use AlibabaCloud\Tea\Model;

class DescribeCommodityPriceRequest extends Model
{
    /**
     * @description The commodity orders.
     *
     * @var orders[]
     */
    public $orders;

    /**
     * @description The coupon code.
     *
     * >  This parameter is unavailable on the China site (aliyun.com).
     * @example 50003298014****
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @description The ID of the region where the Global Accelerator (GA) instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'orders'            => 'Orders',
        'promotionOptionNo' => 'PromotionOptionNo',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orders) {
            $res['Orders'] = [];
            if (null !== $this->orders && \is_array($this->orders)) {
                $n = 0;
                foreach ($this->orders as $item) {
                    $res['Orders'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeCommodityPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Orders'])) {
            if (!empty($map['Orders'])) {
                $model->orders = [];
                $n             = 0;
                foreach ($map['Orders'] as $item) {
                    $model->orders[$n++] = null !== $item ? orders::fromMap($item) : $item;
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
