<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainStopoverSearchRequest extends Model
{
    /**
     * @var string
     */
    public $arrStation;

    /**
     * @var string
     */
    public $depStation;

    /**
     * @example 2024-05-08
     *
     * @var string
     */
    public $trainDate;

    /**
     * @example k2345
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStation' => 'arr_station',
        'depStation' => 'dep_station',
        'trainDate'  => 'train_date',
        'trainNo'    => 'train_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrStation) {
            $res['arr_station'] = $this->arrStation;
        }
        if (null !== $this->depStation) {
            $res['dep_station'] = $this->depStation;
        }
        if (null !== $this->trainDate) {
            $res['train_date'] = $this->trainDate;
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainStopoverSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_station'])) {
            $model->arrStation = $map['arr_station'];
        }
        if (isset($map['dep_station'])) {
            $model->depStation = $map['dep_station'];
        }
        if (isset($map['train_date'])) {
            $model->trainDate = $map['train_date'];
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}
