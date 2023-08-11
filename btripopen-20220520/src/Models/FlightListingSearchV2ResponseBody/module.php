<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var flightItemList[]
     */
    public $flightItemList;

    /**
     * @example 0
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
        'flightItemList' => 'flight_item_list',
        'searchMode'     => 'search_mode',
        'tripType'       => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightItemList) {
            $res['flight_item_list'] = [];
            if (null !== $this->flightItemList && \is_array($this->flightItemList)) {
                $n = 0;
                foreach ($this->flightItemList as $item) {
                    $res['flight_item_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['flight_item_list'])) {
            if (!empty($map['flight_item_list'])) {
                $model->flightItemList = [];
                $n                     = 0;
                foreach ($map['flight_item_list'] as $item) {
                    $model->flightItemList[$n++] = null !== $item ? flightItemList::fromMap($item) : $item;
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
