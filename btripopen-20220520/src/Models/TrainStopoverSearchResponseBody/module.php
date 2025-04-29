<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainStopoverSearchResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $stationName;

    /**
     * @var string
     */
    public $stationNo;

    /**
     * @var string
     */
    public $stationType;

    /**
     * @var string
     */
    public $stopOverTime;
    protected $_name = [
        'arrTime' => 'arr_time',
        'depTime' => 'dep_time',
        'stationName' => 'station_name',
        'stationNo' => 'station_no',
        'stationType' => 'station_type',
        'stopOverTime' => 'stop_over_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
