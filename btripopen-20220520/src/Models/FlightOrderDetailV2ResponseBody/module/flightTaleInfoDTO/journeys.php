<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\flightTaleInfoDTO\journeys\segmentList;
use AlibabaCloud\Tea\Model;

class journeys extends Model
{
    /**
     * @example 85
     *
     * @var int
     */
    public $allFlyDuration;

    /**
     * @example 85
     *
     * @var int
     */
    public $allFlyDurationAfterChange;

    /**
     * @var int
     */
    public $applyId;

    /**
     * @example XIL
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @example 2023-07-20 08:25:00
     *
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $baggageDetails;

    /**
     * @example BJS
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @example 2023-07-20 07:00:00
     *
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $flightStatus;

    /**
     * @description iata_no
     *
     * @example iata_no
     *
     * @var string
     */
    public $iataNo;

    /**
     * @var bool
     */
    public $isReshopJourney;

    /**
     * @var bool
     */
    public $isTransfer;

    /**
     * @var string
     */
    public $journeyTitle;

    /**
     * @var string
     */
    public $refundChangeDetails;

    /**
     * @var segmentList[]
     */
    public $segmentList;
    protected $_name = [
        'allFlyDuration'            => 'all_fly_duration',
        'allFlyDurationAfterChange' => 'all_fly_duration_after_change',
        'applyId'                   => 'apply_id',
        'arrCityCode'               => 'arr_city_code',
        'arrCityName'               => 'arr_city_name',
        'arrTime'                   => 'arr_time',
        'baggageDetails'            => 'baggage_details',
        'depCityCode'               => 'dep_city_code',
        'depCityName'               => 'dep_city_name',
        'depTime'                   => 'dep_time',
        'flightStatus'              => 'flight_status',
        'iataNo'                    => 'iata_no',
        'isReshopJourney'           => 'is_reshop_journey',
        'isTransfer'                => 'is_transfer',
        'journeyTitle'              => 'journey_title',
        'refundChangeDetails'       => 'refund_change_details',
        'segmentList'               => 'segment_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allFlyDuration) {
            $res['all_fly_duration'] = $this->allFlyDuration;
        }
        if (null !== $this->allFlyDurationAfterChange) {
            $res['all_fly_duration_after_change'] = $this->allFlyDurationAfterChange;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->baggageDetails) {
            $res['baggage_details'] = $this->baggageDetails;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->flightStatus) {
            $res['flight_status'] = $this->flightStatus;
        }
        if (null !== $this->iataNo) {
            $res['iata_no'] = $this->iataNo;
        }
        if (null !== $this->isReshopJourney) {
            $res['is_reshop_journey'] = $this->isReshopJourney;
        }
        if (null !== $this->isTransfer) {
            $res['is_transfer'] = $this->isTransfer;
        }
        if (null !== $this->journeyTitle) {
            $res['journey_title'] = $this->journeyTitle;
        }
        if (null !== $this->refundChangeDetails) {
            $res['refund_change_details'] = $this->refundChangeDetails;
        }
        if (null !== $this->segmentList) {
            $res['segment_list'] = [];
            if (null !== $this->segmentList && \is_array($this->segmentList)) {
                $n = 0;
                foreach ($this->segmentList as $item) {
                    $res['segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return journeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all_fly_duration'])) {
            $model->allFlyDuration = $map['all_fly_duration'];
        }
        if (isset($map['all_fly_duration_after_change'])) {
            $model->allFlyDurationAfterChange = $map['all_fly_duration_after_change'];
        }
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['baggage_details'])) {
            $model->baggageDetails = $map['baggage_details'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['flight_status'])) {
            $model->flightStatus = $map['flight_status'];
        }
        if (isset($map['iata_no'])) {
            $model->iataNo = $map['iata_no'];
        }
        if (isset($map['is_reshop_journey'])) {
            $model->isReshopJourney = $map['is_reshop_journey'];
        }
        if (isset($map['is_transfer'])) {
            $model->isTransfer = $map['is_transfer'];
        }
        if (isset($map['journey_title'])) {
            $model->journeyTitle = $map['journey_title'];
        }
        if (isset($map['refund_change_details'])) {
            $model->refundChangeDetails = $map['refund_change_details'];
        }
        if (isset($map['segment_list'])) {
            if (!empty($map['segment_list'])) {
                $model->segmentList = [];
                $n                  = 0;
                foreach ($map['segment_list'] as $item) {
                    $model->segmentList[$n++] = null !== $item ? segmentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
