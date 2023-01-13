<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListEffectiveOrdersResponseBody\orderSummary\orderList;
use AlibabaCloud\Tea\Model;

class orderSummary extends Model
{
    /**
     * @description The commodity code of DMS.
     *
     *   dms_pre_public_cn: DMS that uses the subscription billing method
     *   dms_post_public_cn: DMS that uses the pay-as-you-go billing method
     *
     * @example dms_pre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The type of the service.
     *
     *   **VersionType**: DMS that supports control modes
     *   **SensitiveDataProtection**: DMS that supports sensitive data protection
     *
     * @example VersionType
     *
     * @var string
     */
    public $commodityType;

    /**
     * @description Details about the orders.
     *
     * @var orderList[]
     */
    public $orderList;

    /**
     * @description The sum of the number of instances that you can use DMS to manage in all orders.
     *
     * @example 12
     *
     * @var int
     */
    public $totalQuota;

    /**
     * @description The control mode of DMS. Valid values:
     *
     *   **stand**: Stable Change
     *   **safety**: Security Collaboration
     *
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
