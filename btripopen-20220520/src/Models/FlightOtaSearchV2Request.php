<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchV2Request\searchJourneys;

class FlightOtaSearchV2Request extends Model
{
    /**
     * @var int[]
     */
    public $cabinTypeList;

    /**
     * @var bool
     */
    public $directOnly;

    /**
     * @var string
     */
    public $isvName;

    /**
     * @var bool
     */
    public $needShareFlight;

    /**
     * @var searchJourneys[]
     */
    public $searchJourneys;

    /**
     * @var int
     */
    public $searchMode;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'cabinTypeList' => 'cabin_type_list',
        'directOnly' => 'direct_only',
        'isvName' => 'isv_name',
        'needShareFlight' => 'need_share_flight',
        'searchJourneys' => 'search_journeys',
        'searchMode' => 'search_mode',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (\is_array($this->cabinTypeList)) {
            Model::validateArray($this->cabinTypeList);
        }
        if (\is_array($this->searchJourneys)) {
            Model::validateArray($this->searchJourneys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cabinTypeList) {
            if (\is_array($this->cabinTypeList)) {
                $res['cabin_type_list'] = [];
                $n1 = 0;
                foreach ($this->cabinTypeList as $item1) {
                    $res['cabin_type_list'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->searchJourneys)) {
                $res['search_journeys'] = [];
                $n1 = 0;
                foreach ($this->searchJourneys as $item1) {
                    $res['search_journeys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['cabin_type_list'])) {
            if (!empty($map['cabin_type_list'])) {
                $model->cabinTypeList = [];
                $n1 = 0;
                foreach ($map['cabin_type_list'] as $item1) {
                    $model->cabinTypeList[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['search_journeys'] as $item1) {
                    $model->searchJourneys[$n1++] = searchJourneys::fromMap($item1);
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
