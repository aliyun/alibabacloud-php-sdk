<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeCommodityRequest extends Model
{
    /**
     * @description The commodity code.
     *
     * Valid values on the China site (aliyun.com):
     *
     *   **ga_gapluspre_public_cn**: GA instance.
     *   **ga_plusbwppre_public_cn**: basic bandwidth plan.
     *
     * Valid values on the international site (alibabacloud.com):
     *
     *   **ga_pluspre_public_intl**: GA instance.
     *   **ga_bwppreintl_public_intl:** basic bandwidth plan.
     *
     * This parameter is required.
     * @example ga_gapluspre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The type of the order. Valid values:
     *
     *   **BUY**: purchase order.
     *   **RENEW**: renewal order.
     *   **UPGRADE**: upgrade order.
     *
     * This parameter is required.
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The ID of the region where the Global Accelerator (GA) instance is deployed. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'orderType'     => 'OrderType',
        'regionId'      => 'RegionId',
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
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommodityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
