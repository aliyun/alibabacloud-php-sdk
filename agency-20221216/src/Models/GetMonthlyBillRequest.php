<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class GetMonthlyBillRequest extends Model
{
    /**
     * @var string
     */
    public $billOwner;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var string
     */
    public $month;
    protected $_name = [
        'billOwner' => 'BillOwner',
        'billType' => 'BillType',
        'month' => 'Month',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billOwner) {
            $res['BillOwner'] = $this->billOwner;
        }

        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }

        if (null !== $this->month) {
            $res['Month'] = $this->month;
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
        if (isset($map['BillOwner'])) {
            $model->billOwner = $map['BillOwner'];
        }

        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }

        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }

        return $model;
    }
}
