<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\approverList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\externalTravelerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\hotelShare;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\itineraryList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\itinerarySetList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\travelerList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 201710111505000464651
     *
     * @var string
     */
    public $applyShowId;

    /**
     * @var approverList[]
     */
    public $approverList;

    /**
     * @example 100000
     *
     * @var int
     */
    public $budget;

    /**
     * @example 1
     *
     * @var int
     */
    public $budgetMerge;

    /**
     * @example corpid
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @example dept1
     *
     * @var string
     */
    public $departId;

    /**
     * @example adv
     *
     * @var string
     */
    public $departName;

    /**
     * @var externalTravelerList[]
     */
    public $externalTravelerList;

    /**
     * @example 10000
     *
     * @var int
     */
    public $flightBudget;

    /**
     * @example 2018-09-19T14:03Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2018-09-19T14:03Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 100000
     *
     * @var int
     */
    public $hotelBudget;

    /**
     * @var hotelShare
     */
    public $hotelShare;

    /**
     * @example 3298
     *
     * @var int
     */
    public $id;

    /**
     * @var itineraryList[]
     */
    public $itineraryList;

    /**
     * @example 0
     *
     * @var int
     */
    public $itineraryRule;

    /**
     * @var itinerarySetList[]
     */
    public $itinerarySetList;

    /**
     * @example 0
     *
     * @var int
     */
    public $limitTraveler;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @example 1213
     *
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @example 1214254
     *
     * @var string
     */
    public $thirdpartId;

    /**
     * @example 1
     *
     * @var int
     */
    public $togetherBookRule;

    /**
     * @example 10000
     *
     * @var int
     */
    public $trainBudget;

    /**
     * @var travelerList[]
     */
    public $travelerList;

    /**
     * @var string
     */
    public $tripCause;

    /**
     * @example 2
     *
     * @var int
     */
    public $tripDay;

    /**
     * @var string
     */
    public $tripTitle;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;

    /**
     * @example abd123
     *
     * @var string
     */
    public $unionNo;

    /**
     * @example user1
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @example 10000
     *
     * @var int
     */
    public $vehicleBudget;
    protected $_name = [
        'applyShowId'          => 'apply_show_id',
        'approverList'         => 'approver_list',
        'budget'               => 'budget',
        'budgetMerge'          => 'budget_merge',
        'corpId'               => 'corp_id',
        'corpName'             => 'corp_name',
        'departId'             => 'depart_id',
        'departName'           => 'depart_name',
        'externalTravelerList' => 'external_traveler_list',
        'flightBudget'         => 'flight_budget',
        'gmtCreate'            => 'gmt_create',
        'gmtModified'          => 'gmt_modified',
        'hotelBudget'          => 'hotel_budget',
        'hotelShare'           => 'hotel_share',
        'id'                   => 'id',
        'itineraryList'        => 'itinerary_list',
        'itineraryRule'        => 'itinerary_rule',
        'itinerarySetList'     => 'itinerary_set_list',
        'limitTraveler'        => 'limit_traveler',
        'status'               => 'status',
        'statusDesc'           => 'status_desc',
        'thirdpartBusinessId'  => 'thirdpart_business_id',
        'thirdpartId'          => 'thirdpart_id',
        'togetherBookRule'     => 'together_book_rule',
        'trainBudget'          => 'train_budget',
        'travelerList'         => 'traveler_list',
        'tripCause'            => 'trip_cause',
        'tripDay'              => 'trip_day',
        'tripTitle'            => 'trip_title',
        'type'                 => 'type',
        'unionNo'              => 'union_no',
        'userId'               => 'user_id',
        'userName'             => 'user_name',
        'vehicleBudget'        => 'vehicle_budget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyShowId) {
            $res['apply_show_id'] = $this->applyShowId;
        }
        if (null !== $this->approverList) {
            $res['approver_list'] = [];
            if (null !== $this->approverList && \is_array($this->approverList)) {
                $n = 0;
                foreach ($this->approverList as $item) {
                    $res['approver_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->budget) {
            $res['budget'] = $this->budget;
        }
        if (null !== $this->budgetMerge) {
            $res['budget_merge'] = $this->budgetMerge;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }
        if (null !== $this->externalTravelerList) {
            $res['external_traveler_list'] = [];
            if (null !== $this->externalTravelerList && \is_array($this->externalTravelerList)) {
                $n = 0;
                foreach ($this->externalTravelerList as $item) {
                    $res['external_traveler_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flightBudget) {
            $res['flight_budget'] = $this->flightBudget;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->hotelBudget) {
            $res['hotel_budget'] = $this->hotelBudget;
        }
        if (null !== $this->hotelShare) {
            $res['hotel_share'] = null !== $this->hotelShare ? $this->hotelShare->toMap() : null;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->itineraryList) {
            $res['itinerary_list'] = [];
            if (null !== $this->itineraryList && \is_array($this->itineraryList)) {
                $n = 0;
                foreach ($this->itineraryList as $item) {
                    $res['itinerary_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itineraryRule) {
            $res['itinerary_rule'] = $this->itineraryRule;
        }
        if (null !== $this->itinerarySetList) {
            $res['itinerary_set_list'] = [];
            if (null !== $this->itinerarySetList && \is_array($this->itinerarySetList)) {
                $n = 0;
                foreach ($this->itinerarySetList as $item) {
                    $res['itinerary_set_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->limitTraveler) {
            $res['limit_traveler'] = $this->limitTraveler;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['status_desc'] = $this->statusDesc;
        }
        if (null !== $this->thirdpartBusinessId) {
            $res['thirdpart_business_id'] = $this->thirdpartBusinessId;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->togetherBookRule) {
            $res['together_book_rule'] = $this->togetherBookRule;
        }
        if (null !== $this->trainBudget) {
            $res['train_budget'] = $this->trainBudget;
        }
        if (null !== $this->travelerList) {
            $res['traveler_list'] = [];
            if (null !== $this->travelerList && \is_array($this->travelerList)) {
                $n = 0;
                foreach ($this->travelerList as $item) {
                    $res['traveler_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tripCause) {
            $res['trip_cause'] = $this->tripCause;
        }
        if (null !== $this->tripDay) {
            $res['trip_day'] = $this->tripDay;
        }
        if (null !== $this->tripTitle) {
            $res['trip_title'] = $this->tripTitle;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->unionNo) {
            $res['union_no'] = $this->unionNo;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->vehicleBudget) {
            $res['vehicle_budget'] = $this->vehicleBudget;
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
        if (isset($map['apply_show_id'])) {
            $model->applyShowId = $map['apply_show_id'];
        }
        if (isset($map['approver_list'])) {
            if (!empty($map['approver_list'])) {
                $model->approverList = [];
                $n                   = 0;
                foreach ($map['approver_list'] as $item) {
                    $model->approverList[$n++] = null !== $item ? approverList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['budget'])) {
            $model->budget = $map['budget'];
        }
        if (isset($map['budget_merge'])) {
            $model->budgetMerge = $map['budget_merge'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }
        if (isset($map['external_traveler_list'])) {
            if (!empty($map['external_traveler_list'])) {
                $model->externalTravelerList = [];
                $n                           = 0;
                foreach ($map['external_traveler_list'] as $item) {
                    $model->externalTravelerList[$n++] = null !== $item ? externalTravelerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['flight_budget'])) {
            $model->flightBudget = $map['flight_budget'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }
        if (isset($map['hotel_budget'])) {
            $model->hotelBudget = $map['hotel_budget'];
        }
        if (isset($map['hotel_share'])) {
            $model->hotelShare = hotelShare::fromMap($map['hotel_share']);
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['itinerary_list'])) {
            if (!empty($map['itinerary_list'])) {
                $model->itineraryList = [];
                $n                    = 0;
                foreach ($map['itinerary_list'] as $item) {
                    $model->itineraryList[$n++] = null !== $item ? itineraryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['itinerary_rule'])) {
            $model->itineraryRule = $map['itinerary_rule'];
        }
        if (isset($map['itinerary_set_list'])) {
            if (!empty($map['itinerary_set_list'])) {
                $model->itinerarySetList = [];
                $n                       = 0;
                foreach ($map['itinerary_set_list'] as $item) {
                    $model->itinerarySetList[$n++] = null !== $item ? itinerarySetList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['limit_traveler'])) {
            $model->limitTraveler = $map['limit_traveler'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['status_desc'])) {
            $model->statusDesc = $map['status_desc'];
        }
        if (isset($map['thirdpart_business_id'])) {
            $model->thirdpartBusinessId = $map['thirdpart_business_id'];
        }
        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if (isset($map['together_book_rule'])) {
            $model->togetherBookRule = $map['together_book_rule'];
        }
        if (isset($map['train_budget'])) {
            $model->trainBudget = $map['train_budget'];
        }
        if (isset($map['traveler_list'])) {
            if (!empty($map['traveler_list'])) {
                $model->travelerList = [];
                $n                   = 0;
                foreach ($map['traveler_list'] as $item) {
                    $model->travelerList[$n++] = null !== $item ? travelerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['trip_cause'])) {
            $model->tripCause = $map['trip_cause'];
        }
        if (isset($map['trip_day'])) {
            $model->tripDay = $map['trip_day'];
        }
        if (isset($map['trip_title'])) {
            $model->tripTitle = $map['trip_title'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['union_no'])) {
            $model->unionNo = $map['union_no'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }
        if (isset($map['vehicle_budget'])) {
            $model->vehicleBudget = $map['vehicle_budget'];
        }

        return $model;
    }
}
