<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnOrderCommodityCodeResponseBody extends Model
{
    /**
     * @description The commodity code that includes the organization unit.
     *
     * @example xxx
     *
     * @var string
     */
    public $orderCommodityCode;

    /**
     * @description The ID of the request.
     *
     * @example BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderCommodityCode' => 'OrderCommodityCode',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderCommodityCode) {
            $res['OrderCommodityCode'] = $this->orderCommodityCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnOrderCommodityCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderCommodityCode'])) {
            $model->orderCommodityCode = $map['OrderCommodityCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
