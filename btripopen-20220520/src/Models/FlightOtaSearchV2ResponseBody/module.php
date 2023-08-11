<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody\module\flightJourneyInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody\module\itemList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var flightJourneyInfos[]
     */
    public $flightJourneyInfos;

    /**
     * @var itemList[]
     */
    public $itemList;

    /**
     * @example 2
     *
     * @var int
     */
    public $searchMode;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'flightJourneyInfos' => 'flight_journey_infos',
        'itemList'           => 'item_list',
        'searchMode'         => 'search_mode',
        'tripType'           => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->searchMode) {
            $res['search_mode'] = $this->searchMode;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['search_mode'])) {
            $model->searchMode = $map['search_mode'];
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
