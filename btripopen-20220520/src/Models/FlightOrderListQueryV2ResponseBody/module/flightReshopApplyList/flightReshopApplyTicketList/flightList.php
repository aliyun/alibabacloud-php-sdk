<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\flightReshopApplyList\flightReshopApplyTicketList;

use AlibabaCloud\Dara\Model;

class flightList extends Model
{
    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $cabinClassName;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $flightNo;
    protected $_name = [
        'arrTime' => 'arr_time',
        'cabin' => 'cabin',
        'cabinClass' => 'cabin_class',
        'cabinClassName' => 'cabin_class_name',
        'depTime' => 'dep_time',
        'flightNo' => 'flight_no',
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

        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }

        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }

        if (null !== $this->cabinClassName) {
            $res['cabin_class_name'] = $this->cabinClassName;
        }

        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }

        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
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

        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }

        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }

        if (isset($map['cabin_class_name'])) {
            $model->cabinClassName = $map['cabin_class_name'];
        }

        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }

        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }

        return $model;
    }
}
