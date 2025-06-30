<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList;

use AlibabaCloud\Dara\Model;

class segmentList extends Model
{
    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $flightNo;

    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @var int
     */
    public $segmentIndex;

    /**
     * @var string
     */
    public $segmentKey;
    protected $_name = [
        'arrCityCode' => 'arr_city_code',
        'depCityCode' => 'dep_city_code',
        'depTime' => 'dep_time',
        'flightNo' => 'flight_no',
        'journeyIndex' => 'journey_index',
        'segmentIndex' => 'segment_index',
        'segmentKey' => 'segment_key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }

        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }

        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }

        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }

        if (null !== $this->segmentKey) {
            $res['segment_key'] = $this->segmentKey;
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
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }

        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }

        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }

        if (isset($map['segment_key'])) {
            $model->segmentKey = $map['segment_key'];
        }

        return $model;
    }
}
