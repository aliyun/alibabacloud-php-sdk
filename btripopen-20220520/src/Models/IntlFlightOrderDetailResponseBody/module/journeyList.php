<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\flightSegmentInfos;

class journeyList extends Model
{
    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var flightSegmentInfos[]
     */
    public $flightSegmentInfos;

    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @var int
     */
    public $transferTime;
    protected $_name = [
        'arrCityCode' => 'arr_city_code',
        'arrCityName' => 'arr_city_name',
        'arrTime' => 'arr_time',
        'depCityCode' => 'dep_city_code',
        'depCityName' => 'dep_city_name',
        'depTime' => 'dep_time',
        'duration' => 'duration',
        'flightSegmentInfos' => 'flight_segment_infos',
        'journeyIndex' => 'journey_index',
        'transferTime' => 'transfer_time',
    ];

    public function validate()
    {
        if (\is_array($this->flightSegmentInfos)) {
            Model::validateArray($this->flightSegmentInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->flightSegmentInfos) {
            if (\is_array($this->flightSegmentInfos)) {
                $res['flight_segment_infos'] = [];
                $n1 = 0;
                foreach ($this->flightSegmentInfos as $item1) {
                    $res['flight_segment_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['flight_segment_infos'])) {
            if (!empty($map['flight_segment_infos'])) {
                $model->flightSegmentInfos = [];
                $n1 = 0;
                foreach ($map['flight_segment_infos'] as $item1) {
                    $model->flightSegmentInfos[$n1] = flightSegmentInfos::fromMap($item1);
                    ++$n1;
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
