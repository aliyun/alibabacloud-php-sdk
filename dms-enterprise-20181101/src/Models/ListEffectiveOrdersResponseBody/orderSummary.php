<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersResponseBody\orderSummary\orderList;
use AlibabaCloud\Tea\Model;

class orderSummary extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @example VersionType
     *
     * @var string
     */
    public $commodityType;

    /**
     * @var orderList[]
     */
    public $orderList;

    /**
     * @example 12
     *
     * @var int
     */
    public $totalQuota;

    /**
     * @example safety
     *
     * @var string
     */
    public $versionType;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'commodityType' => 'CommodityType',
        'orderList'     => 'OrderList',
        'totalQuota'    => 'TotalQuota',
        'versionType'   => 'VersionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }
        if (null !== $this->orderList) {
            $res['OrderList'] = [];
            if (null !== $this->orderList && \is_array($this->orderList)) {
                $n = 0;
                foreach ($this->orderList as $item) {
                    $res['OrderList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return orderSummary
     */
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
                $n                = 0;
                foreach ($map['OrderList'] as $item) {
                    $model->orderList[$n++] = null !== $item ? orderList::fromMap($item) : $item;
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
