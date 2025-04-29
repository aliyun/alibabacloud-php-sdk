<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class insuranceInfoList extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $insuranceNo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'amount' => 'amount',
        'insuranceNo' => 'insurance_no',
        'name' => 'name',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->insuranceNo) {
            $res['insurance_no'] = $this->insuranceNo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['insurance_no'])) {
            $model->insuranceNo = $map['insurance_no'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
