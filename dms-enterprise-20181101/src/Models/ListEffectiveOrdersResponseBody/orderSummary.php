<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersResponseBody\orderSummary\orderList;

class orderSummary extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityType;

    /**
     * @var orderList[]
     */
    public $orderList;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var string
     */
    public $versionType;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'commodityType' => 'CommodityType',
        'orderList' => 'OrderList',
        'totalQuota' => 'TotalQuota',
        'versionType' => 'VersionType',
    ];

    public function validate()
    {
        if (\is_array($this->orderList)) {
            Model::validateArray($this->orderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }

        if (null !== $this->orderList) {
            if (\is_array($this->orderList)) {
                $res['OrderList'] = [];
                $n1 = 0;
                foreach ($this->orderList as $item1) {
                    $res['OrderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }

        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }

        if (isset($map['OrderList'])) {
            if (!empty($map['OrderList'])) {
                $model->orderList = [];
                $n1 = 0;
                foreach ($map['OrderList'] as $item1) {
                    $model->orderList[$n1++] = orderList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }

        return $model;
    }
}
