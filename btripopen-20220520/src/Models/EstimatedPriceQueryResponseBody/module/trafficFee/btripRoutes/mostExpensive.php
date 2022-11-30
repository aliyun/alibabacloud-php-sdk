<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee\btripRoutes;

use AlibabaCloud\Tea\Model;

class mostExpensive extends Model
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
     * @var int
     */
    public $fee;

    /**
     * @var string
     */
    public $seatGrade;

    /**
     * @var string
     */
    public $vehicleNo;
    protected $_name = [
        'arrTime'   => 'arr_time',
        'depTime'   => 'dep_time',
        'fee'       => 'fee',
        'seatGrade' => 'seat_grade',
        'vehicleNo' => 'vehicle_no',
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
        if (null !== $this->fee) {
            $res['fee'] = $this->fee;
        }
        if (null !== $this->seatGrade) {
            $res['seat_grade'] = $this->seatGrade;
        }
        if (null !== $this->vehicleNo) {
            $res['vehicle_no'] = $this->vehicleNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mostExpensive
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
        if (isset($map['fee'])) {
            $model->fee = $map['fee'];
        }
        if (isset($map['seat_grade'])) {
            $model->seatGrade = $map['seat_grade'];
        }
        if (isset($map['vehicle_no'])) {
            $model->vehicleNo = $map['vehicle_no'];
        }

        return $model;
    }
}
