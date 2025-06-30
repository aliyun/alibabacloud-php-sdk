<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\approverList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\carRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\externalTravelerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\hotelShare;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\itineraryList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\itinerarySetList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\travelerList;

class module extends Model
{
    /**
     * @var string
     */
    public $applyShowId;

    /**
     * @var approverList[]
     */
    public $approverList;

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
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

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
     * @var int
     */
    public $flightBudget;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

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
    public $id;

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
    public $statusDesc;

    /**
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @var string
     */
    public $thirdpartId;

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
     * @var int
     */
    public $type;

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
        'applyShowId' => 'apply_show_id',
        'approverList' => 'approver_list',
        'budget' => 'budget',
        'budgetMerge' => 'budget_merge',
        'carRule' => 'car_rule',
        'corpId' => 'corp_id',
        'corpName' => 'corp_name',
        'departId' => 'depart_id',
        'departName' => 'depart_name',
        'extendField' => 'extend_field',
        'externalTravelerList' => 'external_traveler_list',
        'flightBudget' => 'flight_budget',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'hotelBudget' => 'hotel_budget',
        'hotelShare' => 'hotel_share',
        'id' => 'id',
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
        'statusDesc' => 'status_desc',
        'thirdpartBusinessId' => 'thirdpart_business_id',
        'thirdpartId' => 'thirdpart_id',
        'togetherBookRule' => 'together_book_rule',
        'trainBudget' => 'train_budget',
        'travelerList' => 'traveler_list',
        'tripCause' => 'trip_cause',
        'tripDay' => 'trip_day',
        'tripTitle' => 'trip_title',
        'type' => 'type',
        'unionNo' => 'union_no',
        'userId' => 'user_id',
        'userName' => 'user_name',
        'vehicleBudget' => 'vehicle_budget',
    ];

    public function validate()
    {
        if (\is_array($this->approverList)) {
            Model::validateArray($this->approverList);
        }
        if (null !== $this->carRule) {
            $this->carRule->validate();
        }
        if (\is_array($this->externalTravelerList)) {
            Model::validateArray($this->externalTravelerList);
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyShowId) {
            $res['apply_show_id'] = $this->applyShowId;
        }

        if (null !== $this->approverList) {
            if (\is_array($this->approverList)) {
                $res['approver_list'] = [];
                $n1 = 0;
                foreach ($this->approverList as $item1) {
                    $res['approver_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->budget) {
            $res['budget'] = $this->budget;
        }

        if (null !== $this->budgetMerge) {
            $res['budget_merge'] = $this->budgetMerge;
        }

        if (null !== $this->carRule) {
            $res['car_rule'] = null !== $this->carRule ? $this->carRule->toArray($noStream) : $this->carRule;
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
            $res['hotel_share'] = null !== $this->hotelShare ? $this->hotelShare->toArray($noStream) : $this->hotelShare;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
            if (\is_array($this->travelerList)) {
                $res['traveler_list'] = [];
                $n1 = 0;
                foreach ($this->travelerList as $item1) {
                    $res['traveler_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_show_id'])) {
            $model->applyShowId = $map['apply_show_id'];
        }

        if (isset($map['approver_list'])) {
            if (!empty($map['approver_list'])) {
                $model->approverList = [];
                $n1 = 0;
                foreach ($map['approver_list'] as $item1) {
                    $model->approverList[$n1] = approverList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['budget'])) {
            $model->budget = $map['budget'];
        }

        if (isset($map['budget_merge'])) {
            $model->budgetMerge = $map['budget_merge'];
        }

        if (isset($map['car_rule'])) {
            $model->carRule = carRule::fromMap($map['car_rule']);
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
                $n1 = 0;
                foreach ($map['traveler_list'] as $item1) {
                    $model->travelerList[$n1] = travelerList::fromMap($item1);
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
