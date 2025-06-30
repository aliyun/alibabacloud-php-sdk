<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList;

class module extends Model
{
    /**
     * @var flightItemList[]
     */
    public $flightItemList;

    /**
     * @var int
     */
    public $searchMode;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'flightItemList' => 'flight_item_list',
        'searchMode' => 'search_mode',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (\is_array($this->flightItemList)) {
            Model::validateArray($this->flightItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightItemList) {
            if (\is_array($this->flightItemList)) {
                $res['flight_item_list'] = [];
                $n1 = 0;
                foreach ($this->flightItemList as $item1) {
                    $res['flight_item_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['flight_item_list'])) {
            if (!empty($map['flight_item_list'])) {
                $model->flightItemList = [];
                $n1 = 0;
                foreach ($map['flight_item_list'] as $item1) {
                    $model->flightItemList[$n1] = flightItemList::fromMap($item1);
                    ++$n1;
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
