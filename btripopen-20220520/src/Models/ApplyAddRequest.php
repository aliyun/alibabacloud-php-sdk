<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\externalTravelerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\externalTravelerStandard;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\hotelShare;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\itineraryList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\itinerarySetList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard;
use AlibabaCloud\Tea\Model;

class ApplyAddRequest extends Model
{
    /**
     * @example 4000
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
     * @var string
     */
    public $corpName;

    /**
     * @example departId01
     *
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @description 可将补充描述传入此字段，账单中将会体现此字段的值。可以用于企业的统计和对账
     *
     * @example {"cost_center":"成本中心"}
     *
     * @var string
     */
    public $extendField;

    /**
     * @var externalTravelerList[]
     */
    public $externalTravelerList;

    /**
     * @var externalTravelerStandard
     */
    public $externalTravelerStandard;

    /**
     * @example 1000
     *
     * @var int
     */
    public $flightBudget;

    /**
     * @example 1000
     *
     * @var int
     */
    public $hotelBudget;

    /**
     * @var hotelShare
     */
    public $hotelShare;

    /**
     * @var string
     */
    public $internationalFlightCabins;

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
     * @example 1
     *
     * @var int
     */
    public $limitTraveler;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subCorpId;

    /**
     * @example 12345
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @example 00714131
     *
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @var string
     */
    public $thirdpartDepartId;

    /**
     * @example 1
     *
     * @var int
     */
    public $togetherBookRule;

    /**
     * @example 1000
     *
     * @var int
     */
    public $trainBudget;

    /**
     * @var travelerList[]
     */
    public $travelerList;

    /**
     * @var travelerStandard[]
     */
    public $travelerStandard;

    /**
     * @var string
     */
    public $tripCause;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripDay;

    /**
     * @var string
     */
    public $tripTitle;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example union001
     *
     * @var string
     */
    public $unionNo;

    /**
     * @example thridpart12138
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @example 1000
     *
     * @var int
     */
    public $vehicleBudget;
    protected $_name = [
        'budget'                    => 'budget',
        'budgetMerge'               => 'budget_merge',
        'corpName'                  => 'corp_name',
        'departId'                  => 'depart_id',
        'departName'                => 'depart_name',
        'extendField'               => 'extend_field',
        'externalTravelerList'      => 'external_traveler_list',
        'externalTravelerStandard'  => 'external_traveler_standard',
        'flightBudget'              => 'flight_budget',
        'hotelBudget'               => 'hotel_budget',
        'hotelShare'                => 'hotel_share',
        'internationalFlightCabins' => 'international_flight_cabins',
        'itineraryList'             => 'itinerary_list',
        'itineraryRule'             => 'itinerary_rule',
        'itinerarySetList'          => 'itinerary_set_list',
        'limitTraveler'             => 'limit_traveler',
        'status'                    => 'status',
        'subCorpId'                 => 'sub_corp_id',
        'thirdpartApplyId'          => 'thirdpart_apply_id',
        'thirdpartBusinessId'       => 'thirdpart_business_id',
        'thirdpartDepartId'         => 'thirdpart_depart_id',
        'togetherBookRule'          => 'together_book_rule',
        'trainBudget'               => 'train_budget',
        'travelerList'              => 'traveler_list',
        'travelerStandard'          => 'traveler_standard',
        'tripCause'                 => 'trip_cause',
        'tripDay'                   => 'trip_day',
        'tripTitle'                 => 'trip_title',
        'type'                      => 'type',
        'unionNo'                   => 'union_no',
        'userId'                    => 'user_id',
        'userName'                  => 'user_name',
        'vehicleBudget'             => 'vehicle_budget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->budget) {
            $res['budget'] = $this->budget;
        }
        if (null !== $this->budgetMerge) {
            $res['budget_merge'] = $this->budgetMerge;
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
        if (null !== $this->extendField) {
            $res['extend_field'] = $this->extendField;
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
        if (null !== $this->externalTravelerStandard) {
            $res['external_traveler_standard'] = null !== $this->externalTravelerStandard ? $this->externalTravelerStandard->toMap() : null;
        }
        if (null !== $this->flightBudget) {
            $res['flight_budget'] = $this->flightBudget;
        }
        if (null !== $this->hotelBudget) {
            $res['hotel_budget'] = $this->hotelBudget;
        }
        if (null !== $this->hotelShare) {
            $res['hotel_share'] = null !== $this->hotelShare ? $this->hotelShare->toMap() : null;
        }
        if (null !== $this->internationalFlightCabins) {
            $res['international_flight_cabins'] = $this->internationalFlightCabins;
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
        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->thirdpartBusinessId) {
            $res['thirdpart_business_id'] = $this->thirdpartBusinessId;
        }
        if (null !== $this->thirdpartDepartId) {
            $res['thirdpart_depart_id'] = $this->thirdpartDepartId;
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
        if (null !== $this->travelerStandard) {
            $res['traveler_standard'] = [];
            if (null !== $this->travelerStandard && \is_array($this->travelerStandard)) {
                $n = 0;
                foreach ($this->travelerStandard as $item) {
                    $res['traveler_standard'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ApplyAddRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['budget'])) {
            $model->budget = $map['budget'];
        }
        if (isset($map['budget_merge'])) {
            $model->budgetMerge = $map['budget_merge'];
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
        if (isset($map['extend_field'])) {
            $model->extendField = $map['extend_field'];
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
        if (isset($map['external_traveler_standard'])) {
            $model->externalTravelerStandard = externalTravelerStandard::fromMap($map['external_traveler_standard']);
        }
        if (isset($map['flight_budget'])) {
            $model->flightBudget = $map['flight_budget'];
        }
        if (isset($map['hotel_budget'])) {
            $model->hotelBudget = $map['hotel_budget'];
        }
        if (isset($map['hotel_share'])) {
            $model->hotelShare = hotelShare::fromMap($map['hotel_share']);
        }
        if (isset($map['international_flight_cabins'])) {
            $model->internationalFlightCabins = $map['international_flight_cabins'];
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
        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
        }
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if (isset($map['thirdpart_business_id'])) {
            $model->thirdpartBusinessId = $map['thirdpart_business_id'];
        }
        if (isset($map['thirdpart_depart_id'])) {
            $model->thirdpartDepartId = $map['thirdpart_depart_id'];
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
        if (isset($map['traveler_standard'])) {
            if (!empty($map['traveler_standard'])) {
                $model->travelerStandard = [];
                $n                       = 0;
                foreach ($map['traveler_standard'] as $item) {
                    $model->travelerStandard[$n++] = null !== $item ? travelerStandard::fromMap($item) : $item;
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
