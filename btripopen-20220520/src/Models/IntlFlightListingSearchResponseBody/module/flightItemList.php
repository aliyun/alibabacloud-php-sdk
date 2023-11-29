<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody\module\flightItemList\bestPriceItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody\module\flightItemList\flightJourneyInfos;
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
    protected $_name = [
        'bestPriceItem'      => 'best_price_item',
        'flightJourneyInfos' => 'flight_journey_infos',
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

        return $model;
    }
}
