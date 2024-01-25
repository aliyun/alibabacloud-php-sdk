<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\QueryPriceResponseBody;

use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryPriceResponseBody\data\ecsPriceInfo;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryPriceResponseBody\data\softPriceInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var ecsPriceInfo
     */
    public $ecsPriceInfo;

    /**
     * @var softPriceInfo
     */
    public $softPriceInfo;

    /**
     * @var float
     */
    public $sumPrice;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'ecsPriceInfo'  => 'EcsPriceInfo',
        'softPriceInfo' => 'SoftPriceInfo',
        'sumPrice'      => 'SumPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->ecsPriceInfo) {
            $res['EcsPriceInfo'] = null !== $this->ecsPriceInfo ? $this->ecsPriceInfo->toMap() : null;
        }
        if (null !== $this->softPriceInfo) {
            $res['SoftPriceInfo'] = null !== $this->softPriceInfo ? $this->softPriceInfo->toMap() : null;
        }
        if (null !== $this->sumPrice) {
            $res['SumPrice'] = $this->sumPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['EcsPriceInfo'])) {
            $model->ecsPriceInfo = ecsPriceInfo::fromMap($map['EcsPriceInfo']);
        }
        if (isset($map['SoftPriceInfo'])) {
            $model->softPriceInfo = softPriceInfo::fromMap($map['SoftPriceInfo']);
        }
        if (isset($map['SumPrice'])) {
            $model->sumPrice = $map['SumPrice'];
        }

        return $model;
    }
}
