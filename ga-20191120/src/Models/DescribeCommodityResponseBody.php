<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody\components;
use AlibabaCloud\Tea\Model;

class DescribeCommodityResponseBody extends Model
{
    /**
     * @description The commodity code.
     *
     * Examples for the China site (aliyun.com):
     *
     *   **ga_gapluspre_public_cn**: GA instance.
     *   **ga_plusbwppre_public_cn**: basic bandwidth plan.
     *
     * Examples for the international site (alibabacloud.com):
     *
     *   **ga_pluspre_public_intl**: GA instance.
     *   **ga_bwppreintl_public_intl**: basic bandwidth plan.
     *
     * @example ga_gapluspre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The name of the commodity.
     *
     * @example Global Accelerator_Instance Type (Subscription)
     *
     * @var string
     */
    public $commodityName;

    /**
     * @description The information about the commodity modules.
     *
     * The returned information varies based on the commodity.
     * @var components[]
     */
    public $components;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'components'    => 'Components',
        'requestId'     => 'RequestId',
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
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommodityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
