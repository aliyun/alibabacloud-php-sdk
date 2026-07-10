<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\hotelOnSitePriceDetail\totalOnSitePrice;

class hotelOnSitePriceDetail extends Model
{
    /**
     * @var totalOnSitePrice
     */
    public $totalOnSitePrice;
    protected $_name = [
        'totalOnSitePrice' => 'total_on_site_price',
    ];

    public function validate()
    {
        if (null !== $this->totalOnSitePrice) {
            $this->totalOnSitePrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalOnSitePrice) {
            $res['total_on_site_price'] = null !== $this->totalOnSitePrice ? $this->totalOnSitePrice->toArray($noStream) : $this->totalOnSitePrice;
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
        if (isset($map['total_on_site_price'])) {
            $model->totalOnSitePrice = totalOnSitePrice::fromMap($map['total_on_site_price']);
        }

        return $model;
    }
}
