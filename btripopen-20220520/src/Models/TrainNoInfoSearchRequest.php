<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TrainNoInfoSearchRequest extends Model
{
    /**
     * @var string
     */
    public $arrLocation;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $depLocation;

    /**
     * @var string
     */
    public $lineKey;

    /**
     * @var string
     */
    public $middleDate;

    /**
     * @var string
     */
    public $middleStation;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrLocation' => 'arr_location',
        'depDate' => 'dep_date',
        'depLocation' => 'dep_location',
        'lineKey' => 'line_key',
        'middleDate' => 'middle_date',
        'middleStation' => 'middle_station',
        'orderId' => 'order_id',
        'trainNo' => 'train_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrLocation) {
            $res['arr_location'] = $this->arrLocation;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->depLocation) {
            $res['dep_location'] = $this->depLocation;
        }

        if (null !== $this->lineKey) {
            $res['line_key'] = $this->lineKey;
        }

        if (null !== $this->middleDate) {
            $res['middle_date'] = $this->middleDate;
        }

        if (null !== $this->middleStation) {
            $res['middle_station'] = $this->middleStation;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
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
        if (isset($map['arr_location'])) {
            $model->arrLocation = $map['arr_location'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['dep_location'])) {
            $model->depLocation = $map['dep_location'];
        }

        if (isset($map['line_key'])) {
            $model->lineKey = $map['line_key'];
        }

        if (isset($map['middle_date'])) {
            $model->middleDate = $map['middle_date'];
        }

        if (isset($map['middle_station'])) {
            $model->middleStation = $map['middle_station'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}
