<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2Request;

use AlibabaCloud\Tea\Model;

class selectedSegments extends Model
{
    /**
     * @example XIL
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @example BJS
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @example 2023-09-17 18:15:00
     *
     * @var string
     */
    public $depDateTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $journeySeq;

    /**
     * @example CA8625
     *
     * @var string
     */
    public $marketingFlightNo;

    /**
     * @example MU8625
     *
     * @var string
     */
    public $operatingFlightNo;

    /**
     * @example 0
     *
     * @var int
     */
    public $segmentSeq;
    protected $_name = [
        'arrCityCode'       => 'arr_city_code',
        'depCityCode'       => 'dep_city_code',
        'depDateTime'       => 'dep_date_time',
        'journeySeq'        => 'journey_seq',
        'marketingFlightNo' => 'marketing_flight_no',
        'operatingFlightNo' => 'operating_flight_no',
        'segmentSeq'        => 'segment_seq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depDateTime) {
            $res['dep_date_time'] = $this->depDateTime;
        }
        if (null !== $this->journeySeq) {
            $res['journey_seq'] = $this->journeySeq;
        }
        if (null !== $this->marketingFlightNo) {
            $res['marketing_flight_no'] = $this->marketingFlightNo;
        }
        if (null !== $this->operatingFlightNo) {
            $res['operating_flight_no'] = $this->operatingFlightNo;
        }
        if (null !== $this->segmentSeq) {
            $res['segment_seq'] = $this->segmentSeq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectedSegments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_date_time'])) {
            $model->depDateTime = $map['dep_date_time'];
        }
        if (isset($map['journey_seq'])) {
            $model->journeySeq = $map['journey_seq'];
        }
        if (isset($map['marketing_flight_no'])) {
            $model->marketingFlightNo = $map['marketing_flight_no'];
        }
        if (isset($map['operating_flight_no'])) {
            $model->operatingFlightNo = $map['operating_flight_no'];
        }
        if (isset($map['segment_seq'])) {
            $model->segmentSeq = $map['segment_seq'];
        }

        return $model;
    }
}
