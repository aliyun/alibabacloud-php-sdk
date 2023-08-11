<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\bestPriceItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\flightJourneyInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\itemList;
use AlibabaCloud\Tea\Model;

class flightItemList extends Model
{
    /**
     * @var bestPriceItem
     */
    public $bestPriceItem;

    /**
     * @var flightJourneyInfos[]
     */
    public $flightJourneyInfos;

    /**
     * @var itemList[]
     */
    public $itemList;
    protected $_name = [
        'bestPriceItem'      => 'best_price_item',
        'flightJourneyInfos' => 'flight_journey_infos',
        'itemList'           => 'item_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bestPriceItem) {
            $res['best_price_item'] = null !== $this->bestPriceItem ? $this->bestPriceItem->toMap() : null;
        }
        if (null !== $this->flightJourneyInfos) {
            $res['flight_journey_infos'] = [];
            if (null !== $this->flightJourneyInfos && \is_array($this->flightJourneyInfos)) {
                $n = 0;
                foreach ($this->flightJourneyInfos as $item) {
                    $res['flight_journey_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemList) {
            $res['item_list'] = [];
            if (null !== $this->itemList && \is_array($this->itemList)) {
                $n = 0;
                foreach ($this->itemList as $item) {
                    $res['item_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['best_price_item'])) {
            $model->bestPriceItem = bestPriceItem::fromMap($map['best_price_item']);
        }
        if (isset($map['flight_journey_infos'])) {
            if (!empty($map['flight_journey_infos'])) {
                $model->flightJourneyInfos = [];
                $n                         = 0;
                foreach ($map['flight_journey_infos'] as $item) {
                    $model->flightJourneyInfos[$n++] = null !== $item ? flightJourneyInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['item_list'])) {
            if (!empty($map['item_list'])) {
                $model->itemList = [];
                $n               = 0;
                foreach ($map['item_list'] as $item) {
                    $model->itemList[$n++] = null !== $item ? itemList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
