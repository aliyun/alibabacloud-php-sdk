<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody\module\flightJourneyInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2ResponseBody\module\itemList;

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
     * @var int
     */
    public $searchMode;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'flightJourneyInfos' => 'flight_journey_infos',
        'itemList' => 'item_list',
        'searchMode' => 'search_mode',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
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

        if (null !== $this->searchMode) {
            $res['search_mode'] = $this->searchMode;
        }

        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
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

        if (isset($map['search_mode'])) {
            $model->searchMode = $map['search_mode'];
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
