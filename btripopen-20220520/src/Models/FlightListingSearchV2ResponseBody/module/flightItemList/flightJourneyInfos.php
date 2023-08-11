<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchV2ResponseBody\module\flightItemList\flightJourneyInfos\flightSegmentInfos;
use AlibabaCloud\Tea\Model;

class flightJourneyInfos extends Model
{
    /**
     * @example HGH
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @example 2023-08-13 09:45
     *
     * @var string
     */
    public $arrTime;

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
     * @example 2023-08-13 07:25
     *
     * @var string
     */
    public $depTime;

    /**
     * @example 140
     *
     * @var int
     */
    public $duration;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @var flightSegmentInfos[]
     */
    public $flightSegmentInfos;

    /**
     * @example 0
     *
     * @var int
     */
    public $journeyIndex;

    /**
     * @example 0
     *
     * @var int
     */
    public $transferTime;
    protected $_name = [
        'arrCityCode'        => 'arr_city_code',
        'arrCityName'        => 'arr_city_name',
        'arrTime'            => 'arr_time',
        'depCityCode'        => 'dep_city_code',
        'depCityName'        => 'dep_city_name',
        'depTime'            => 'dep_time',
        'duration'           => 'duration',
        'extensions'         => 'extensions',
        'flightSegmentInfos' => 'flight_segment_infos',
        'journeyIndex'       => 'journey_index',
        'transferTime'       => 'transfer_time',
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
        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
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
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->extensions) {
            $res['extensions'] = $this->extensions;
        }
        if (null !== $this->flightSegmentInfos) {
            $res['flight_segment_infos'] = [];
            if (null !== $this->flightSegmentInfos && \is_array($this->flightSegmentInfos)) {
                $n = 0;
                foreach ($this->flightSegmentInfos as $item) {
                    $res['flight_segment_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }
        if (null !== $this->transferTime) {
            $res['transfer_time'] = $this->transferTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightJourneyInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['extensions'])) {
            $model->extensions = $map['extensions'];
        }
        if (isset($map['flight_segment_infos'])) {
            if (!empty($map['flight_segment_infos'])) {
                $model->flightSegmentInfos = [];
                $n                         = 0;
                foreach ($map['flight_segment_infos'] as $item) {
                    $model->flightSegmentInfos[$n++] = null !== $item ? flightSegmentInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }
        if (isset($map['transfer_time'])) {
            $model->transferTime = $map['transfer_time'];
        }

        return $model;
    }
}
