<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module;

use AlibabaCloud\Dara\Model;

class itineraries extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @var string
     */
    public $arrDate;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $trafficWay;

    /**
     * @var string
     */
    public $tripWay;
    protected $_name = [
        'arrCity' => 'arr_city',
        'arrDate' => 'arr_date',
        'depCity' => 'dep_city',
        'depDate' => 'dep_date',
        'trafficWay' => 'traffic_way',
        'tripWay' => 'trip_way',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }

        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }

        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->trafficWay) {
            $res['traffic_way'] = $this->trafficWay;
        }

        if (null !== $this->tripWay) {
            $res['trip_way'] = $this->tripWay;
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
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }

        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }

        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['traffic_way'])) {
            $model->trafficWay = $map['traffic_way'];
        }

        if (isset($map['trip_way'])) {
            $model->tripWay = $map['trip_way'];
        }

        return $model;
    }
}
