<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2Request\searchJourneys;
use AlibabaCloud\Tea\Model;

class FlightOtaSearchV2Request extends Model
{
    /**
     * @var int[]
     */
    public $cabinTypeList;

    /**
     * @example true
     *
     * @var bool
     */
    public $directOnly;

    /**
     * @description This parameter is required.
     *
     * @example cheshi
     *
     * @var string
     */
    public $isvName;

    /**
     * @example true
     *
     * @var bool
     */
    public $needShareFlight;

    /**
     * @description This parameter is required.
     *
     * @var searchJourneys[]
     */
    public $searchJourneys;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $searchMode;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'cabinTypeList'   => 'cabin_type_list',
        'directOnly'      => 'direct_only',
        'isvName'         => 'isv_name',
        'needShareFlight' => 'need_share_flight',
        'searchJourneys'  => 'search_journeys',
        'searchMode'      => 'search_mode',
        'tripType'        => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabinTypeList) {
            $res['cabin_type_list'] = $this->cabinTypeList;
        }
        if (null !== $this->directOnly) {
            $res['direct_only'] = $this->directOnly;
        }
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->needShareFlight) {
            $res['need_share_flight'] = $this->needShareFlight;
        }
        if (null !== $this->searchJourneys) {
            $res['search_journeys'] = [];
            if (null !== $this->searchJourneys && \is_array($this->searchJourneys)) {
                $n = 0;
                foreach ($this->searchJourneys as $item) {
                    $res['search_journeys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return FlightOtaSearchV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_type_list'])) {
            if (!empty($map['cabin_type_list'])) {
                $model->cabinTypeList = $map['cabin_type_list'];
            }
        }
        if (isset($map['direct_only'])) {
            $model->directOnly = $map['direct_only'];
        }
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['need_share_flight'])) {
            $model->needShareFlight = $map['need_share_flight'];
        }
        if (isset($map['search_journeys'])) {
            if (!empty($map['search_journeys'])) {
                $model->searchJourneys = [];
                $n                     = 0;
                foreach ($map['search_journeys'] as $item) {
                    $model->searchJourneys[$n++] = null !== $item ? searchJourneys::fromMap($item) : $item;
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
