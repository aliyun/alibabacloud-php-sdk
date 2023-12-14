<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayStockResponseBody\stocks;

use AlibabaCloud\Tea\Model;

class stock extends Model
{
    /**
     * @example {"Basic":true,"Advanced":false,"Enhanced":false,"Standard":true}
     *
     * @var string
     */
    public $stockInfo;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'stockInfo' => 'StockInfo',
        'zoneId'    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stockInfo) {
            $res['StockInfo'] = $this->stockInfo;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StockInfo'])) {
            $model->stockInfo = $map['StockInfo'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
