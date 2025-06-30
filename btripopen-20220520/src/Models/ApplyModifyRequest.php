<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\carRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\defaultStandard;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\externalTravelerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\externalTravelerStandard;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\hotelShare;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\itineraryList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\itinerarySetList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard;

class ApplyModifyRequest extends Model
{
    /**
     * @var int
     */
    public $budget;

    /**
     * @var int
     */
    public $budgetMerge;

    /**
     * @var carRule
     */
    public $carRule;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var defaultStandard
     */
    public $defaultStandard;

    /**
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
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
     * @var int
     */
    public $flightBudget;

    /**
     * @var int
     */
    public $hotelBudget;

    /**
     * @var hotelShare
     */
    public $hotelShare;

    /**
     * @var int
     */
    public $intlFlightBudget;

    /**
     * @var int
     */
    public $intlHotelBudget;

    /**
     * @var itineraryList[]
     */
    public $itineraryList;

    /**
     * @var int
     */
    public $itineraryRule;

    /**
     * @var itinerarySetList[]
     */
    public $itinerarySetList;

    /**
     * @var int
     */
    public $limitTraveler;

    /**
     * @var int
     */
    public $mealBudget;

    /**
     * @var string
     */
    public $paymentDepartmentId;

    /**
     * @var string
     */
    public $paymentDepartmentName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subCorpId;

    /**
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @var string
     */
    public $thirdpartDepartId;

    /**
     * @var int
     */
    public $togetherBookRule;

    /**
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
     * @var int
     */
    public $tripDay;

    /**
     * @var string
     */
    public $tripTitle;

    /**
     * @var string
     */
    public $unionNo;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $vehicleBudget;
    protected $_name = [
        'budget' => 'budget',
        'budgetMerge' => 'budget_merge',
        'carRule' => 'car_rule',
        'corpName' => 'corp_name',
        'defaultStandard' => 'default_standard',
        'departId' => 'depart_id',
        'departName' => 'depart_name',
        'extendField' => 'extend_field',
        'externalTravelerList' => 'external_traveler_list',
        'externalTravelerStandard' => 'external_traveler_standard',
        'flightBudget' => 'flight_budget',
        'hotelBudget' => 'hotel_budget',
        'hotelShare' => 'hotel_share',
        'intlFlightBudget' => 'intl_flight_budget',
        'intlHotelBudget' => 'intl_hotel_budget',
        'itineraryList' => 'itinerary_list',
        'itineraryRule' => 'itinerary_rule',
        'itinerarySetList' => 'itinerary_set_list',
        'limitTraveler' => 'limit_traveler',
        'mealBudget' => 'meal_budget',
        'paymentDepartmentId' => 'payment_department_id',
        'paymentDepartmentName' => 'payment_department_name',
        'status' => 'status',
        'subCorpId' => 'sub_corp_id',
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'thirdpartBusinessId' => 'thirdpart_business_id',
        'thirdpartDepartId' => 'thirdpart_depart_id',
        'togetherBookRule' => 'together_book_rule',
        'trainBudget' => 'train_budget',
        'travelerList' => 'traveler_list',
        'travelerStandard' => 'traveler_standard',
        'tripCause' => 'trip_cause',
        'tripDay' => 'trip_day',
        'tripTitle' => 'trip_title',
        'unionNo' => 'union_no',
        'userId' => 'user_id',
        'userName' => 'user_name',
        'vehicleBudget' => 'vehicle_budget',
    ];

    public function validate()
    {
        if (null !== $this->carRule) {
            $this->carRule->validate();
        }
        if (null !== $this->defaultStandard) {
            $this->defaultStandard->validate();
        }
        if (\is_array($this->externalTravelerList)) {
            Model::validateArray($this->externalTravelerList);
        }
        if (null !== $this->externalTravelerStandard) {
            $this->externalTravelerStandard->validate();
        }
        if (null !== $this->hotelShare) {
            $this->hotelShare->validate();
        }
        if (\is_array($this->itineraryList)) {
            Model::validateArray($this->itineraryList);
        }
        if (\is_array($this->itinerarySetList)) {
            Model::validateArray($this->itinerarySetList);
        }
        if (\is_array($this->travelerList)) {
            Model::validateArray($this->travelerList);
        }
        if (\is_array($this->travelerStandard)) {
            Model::validateArray($this->travelerStandard);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->budget) {
            $res['budget'] = $this->budget;
        }

        if (null !== $this->budgetMerge) {
            $res['budget_merge'] = $this->budgetMerge;
        }

        if (null !== $this->carRule) {
            $res['car_rule'] = null !== $this->carRule ? $this->carRule->toArray($noStream) : $this->carRule;
        }

        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }

        if (null !== $this->defaultStandard) {
            $res['default_standard'] = null !== $this->defaultStandard ? $this->defaultStandard->toArray($noStream) : $this->defaultStandard;
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
            if (\is_array($this->externalTravelerList)) {
                $res['external_traveler_list'] = [];
                $n1 = 0;
                foreach ($this->externalTravelerList as $item1) {
                    $res['external_traveler_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->externalTravelerStandard) {
            $res['external_traveler_standard'] = null !== $this->externalTravelerStandard ? $this->externalTravelerStandard->toArray($noStream) : $this->externalTravelerStandard;
        }

        if (null !== $this->flightBudget) {
            $res['flight_budget'] = $this->flightBudget;
        }

        if (null !== $this->hotelBudget) {
            $res['hotel_budget'] = $this->hotelBudget;
        }

        if (null !== $this->hotelShare) {
            $res['hotel_share'] = null !== $this->hotelShare ? $this->hotelShare->toArray($noStream) : $this->hotelShare;
        }

        if (null !== $this->intlFlightBudget) {
            $res['intl_flight_budget'] = $this->intlFlightBudget;
        }

        if (null !== $this->intlHotelBudget) {
            $res['intl_hotel_budget'] = $this->intlHotelBudget;
        }

        if (null !== $this->itineraryList) {
            if (\is_array($this->itineraryList)) {
                $res['itinerary_list'] = [];
                $n1 = 0;
                foreach ($this->itineraryList as $item1) {
                    $res['itinerary_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itineraryRule) {
            $res['itinerary_rule'] = $this->itineraryRule;
        }

        if (null !== $this->itinerarySetList) {
            if (\is_array($this->itinerarySetList)) {
                $res['itinerary_set_list'] = [];
                $n1 = 0;
                foreach ($this->itinerarySetList as $item1) {
                    $res['itinerary_set_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->limitTraveler) {
            $res['limit_traveler'] = $this->limitTraveler;
        }

        if (null !== $this->mealBudget) {
            $res['meal_budget'] = $this->mealBudget;
        }

        if (null !== $this->paymentDepartmentId) {
            $res['payment_department_id'] = $this->paymentDepartmentId;
        }

        if (null !== $this->paymentDepartmentName) {
            $res['payment_department_name'] = $this->paymentDepartmentName;
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
            if (\is_array($this->travelerList)) {
                $res['traveler_list'] = [];
                $n1 = 0;
                foreach ($this->travelerList as $item1) {
                    $res['traveler_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->travelerStandard) {
            if (\is_array($this->travelerStandard)) {
                $res['traveler_standard'] = [];
                $n1 = 0;
                foreach ($this->travelerStandard as $item1) {
                    $res['traveler_standard'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['budget'])) {
            $model->budget = $map['budget'];
        }

        if (isset($map['budget_merge'])) {
            $model->budgetMerge = $map['budget_merge'];
        }

        if (isset($map['car_rule'])) {
            $model->carRule = carRule::fromMap($map['car_rule']);
        }

        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }

        if (isset($map['default_standard'])) {
            $model->defaultStandard = defaultStandard::fromMap($map['default_standard']);
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
                $n1 = 0;
                foreach ($map['external_traveler_list'] as $item1) {
                    $model->externalTravelerList[$n1] = externalTravelerList::fromMap($item1);
                    ++$n1;
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

        if (isset($map['intl_flight_budget'])) {
            $model->intlFlightBudget = $map['intl_flight_budget'];
        }

        if (isset($map['intl_hotel_budget'])) {
            $model->intlHotelBudget = $map['intl_hotel_budget'];
        }

        if (isset($map['itinerary_list'])) {
            if (!empty($map['itinerary_list'])) {
                $model->itineraryList = [];
                $n1 = 0;
                foreach ($map['itinerary_list'] as $item1) {
                    $model->itineraryList[$n1] = itineraryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['itinerary_rule'])) {
            $model->itineraryRule = $map['itinerary_rule'];
        }

        if (isset($map['itinerary_set_list'])) {
            if (!empty($map['itinerary_set_list'])) {
                $model->itinerarySetList = [];
                $n1 = 0;
                foreach ($map['itinerary_set_list'] as $item1) {
                    $model->itinerarySetList[$n1] = itinerarySetList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['limit_traveler'])) {
            $model->limitTraveler = $map['limit_traveler'];
        }

        if (isset($map['meal_budget'])) {
            $model->mealBudget = $map['meal_budget'];
        }

        if (isset($map['payment_department_id'])) {
            $model->paymentDepartmentId = $map['payment_department_id'];
        }

        if (isset($map['payment_department_name'])) {
            $model->paymentDepartmentName = $map['payment_department_name'];
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
                $n1 = 0;
                foreach ($map['traveler_list'] as $item1) {
                    $model->travelerList[$n1] = travelerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['traveler_standard'])) {
            if (!empty($map['traveler_standard'])) {
                $model->travelerStandard = [];
                $n1 = 0;
                foreach ($map['traveler_standard'] as $item1) {
                    $model->travelerStandard[$n1] = travelerStandard::fromMap($item1);
                    ++$n1;
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
