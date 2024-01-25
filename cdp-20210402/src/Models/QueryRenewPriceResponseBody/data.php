<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\QueryRenewPriceResponseBody;

use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryRenewPriceResponseBody\data\cdpSoftPriceInfo;
use AlibabaCloud\SDK\Cdp\V20210402\Models\QueryRenewPriceResponseBody\data\ecsPriceInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var cdpSoftPriceInfo
     */
    public $cdpSoftPriceInfo;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var ecsPriceInfo
     */
    public $ecsPriceInfo;

    /**
     * @var float
     */
    public $sumPrice;
    protected $_name = [
        'cdpSoftPriceInfo' => 'CdpSoftPriceInfo',
        'discountPrice'    => 'DiscountPrice',
        'ecsPriceInfo'     => 'EcsPriceInfo',
        'sumPrice'         => 'SumPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdpSoftPriceInfo) {
            $res['CdpSoftPriceInfo'] = null !== $this->cdpSoftPriceInfo ? $this->cdpSoftPriceInfo->toMap() : null;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->ecsPriceInfo) {
            $res['EcsPriceInfo'] = null !== $this->ecsPriceInfo ? $this->ecsPriceInfo->toMap() : null;
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
        if (isset($map['CdpSoftPriceInfo'])) {
            $model->cdpSoftPriceInfo = cdpSoftPriceInfo::fromMap($map['CdpSoftPriceInfo']);
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['EcsPriceInfo'])) {
            $model->ecsPriceInfo = ecsPriceInfo::fromMap($map['EcsPriceInfo']);
        }
        if (isset($map['SumPrice'])) {
            $model->sumPrice = $map['SumPrice'];
        }

        return $model;
    }
}
