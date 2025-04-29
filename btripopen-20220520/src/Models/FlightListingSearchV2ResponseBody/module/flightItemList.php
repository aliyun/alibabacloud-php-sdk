<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\bestPriceItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\flightJourneyInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\itemList;

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
        'bestPriceItem' => 'best_price_item',
        'flightJourneyInfos' => 'flight_journey_infos',
        'itemList' => 'item_list',
    ];

    public function validate()
    {
        if (null !== $this->bestPriceItem) {
            $this->bestPriceItem->validate();
        }
        if (\is_array($this->flightJourneyInfos)) {
            Model::validateArray($this->flightJourneyInfos);
        }
        if (\is_array($this->itemList)) {
            Model::validateArray($this->itemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bestPriceItem) {
            $res['best_price_item'] = null !== $this->bestPriceItem ? $this->bestPriceItem->toArray($noStream) : $this->bestPriceItem;
        }

        if (null !== $this->flightJourneyInfos) {
            if (\is_array($this->flightJourneyInfos)) {
                $res['flight_journey_infos'] = [];
                $n1 = 0;
                foreach ($this->flightJourneyInfos as $item1) {
                    $res['flight_journey_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->itemList) {
            if (\is_array($this->itemList)) {
                $res['item_list'] = [];
                $n1 = 0;
                foreach ($this->itemList as $item1) {
                    $res['item_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['best_price_item'])) {
            $model->bestPriceItem = bestPriceItem::fromMap($map['best_price_item']);
        }

        if (isset($map['flight_journey_infos'])) {
            if (!empty($map['flight_journey_infos'])) {
                $model->flightJourneyInfos = [];
                $n1 = 0;
                foreach ($map['flight_journey_infos'] as $item1) {
                    $model->flightJourneyInfos[$n1++] = flightJourneyInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['item_list'])) {
            if (!empty($map['item_list'])) {
                $model->itemList = [];
                $n1 = 0;
                foreach ($map['item_list'] as $item1) {
                    $model->itemList[$n1++] = itemList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
