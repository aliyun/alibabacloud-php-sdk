<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class GetMonthlyBillRequest extends Model
{
    /**
     * @description Bill Owner type. Value Range:</br>
     * 2: Sub account</br>
     * @example 1
     *
     * @var string
     */
    public $billOwner;

    /**
     * @description Value Range:
     *
     * - MarginReportV2
     * @example MonthlyInvoice
     *
     * @var string
     */
    public $billType;

    /**
     * @description Billing Month, Format is YYYY-MM
     *
     * @example 2022-11
     *
     * @var string
     */
    public $month;
    protected $_name = [
        'billOwner' => 'BillOwner',
        'billType'  => 'BillType',
        'month'     => 'Month',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetMonthlyBillRequest
     */
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
