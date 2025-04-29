<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\segmentPriceList\searchPrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\segmentPriceList\segmentPosition;

class segmentPriceList extends Model
{
    /**
     * @var segmentPosition
     */
    public $segmentPosition;

    /**
     * @var searchPrice
     */
    public $searchPrice;
    protected $_name = [
        'segmentPosition' => 'segment_position',
        'searchPrice' => 'search_price',
    ];

    public function validate()
    {
        if (null !== $this->segmentPosition) {
            $this->segmentPosition->validate();
        }
        if (null !== $this->searchPrice) {
            $this->searchPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toArray($noStream) : $this->segmentPosition;
        }

        if (null !== $this->searchPrice) {
            $res['search_price'] = null !== $this->searchPrice ? $this->searchPrice->toArray($noStream) : $this->searchPrice;
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
        if (isset($map['segment_position'])) {
            $model->segmentPosition = segmentPosition::fromMap($map['segment_position']);
        }

        if (isset($map['search_price'])) {
            $model->searchPrice = searchPrice::fromMap($map['search_price']);
        }

        return $model;
    }
}
