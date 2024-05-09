<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStopoverSearchResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $arrTime;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $stationName;

    /**
     * @example 0
     *
     * @var string
     */
    public $stationNo;

    /**
     * @example 0
     *
     * @var string
     */
    public $stationType;

    /**
     * @example 22
     *
     * @var string
     */
    public $stopOverTime;
    protected $_name = [
        'arrTime'      => 'arr_time',
        'depTime'      => 'dep_time',
        'stationName'  => 'station_name',
        'stationNo'    => 'station_no',
        'stationType'  => 'station_type',
        'stopOverTime' => 'stop_over_time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->stationName) {
            $res['station_name'] = $this->stationName;
        }
        if (null !== $this->stationNo) {
            $res['station_no'] = $this->stationNo;
        }
        if (null !== $this->stationType) {
            $res['station_type'] = $this->stationType;
        }
        if (null !== $this->stopOverTime) {
            $res['stop_over_time'] = $this->stopOverTime;
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
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['station_name'])) {
            $model->stationName = $map['station_name'];
        }
        if (isset($map['station_no'])) {
            $model->stationNo = $map['station_no'];
        }
        if (isset($map['station_type'])) {
            $model->stationType = $map['station_type'];
        }
        if (isset($map['stop_over_time'])) {
            $model->stopOverTime = $map['stop_over_time'];
        }

        return $model;
    }
}
