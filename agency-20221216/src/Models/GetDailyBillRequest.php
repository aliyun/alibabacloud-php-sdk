<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class GetDailyBillRequest extends Model
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
     * @description BillType. Value Range:</br>
     *
     * - DailyInstanceBillV2
     * @example DailyInstanceBillV2
     *
     * @var string
     */
    public $billType;

    /**
     * @description Billing date. Format YYYY-MM-DD
     *
     * @example 2022-11-24
     *
     * @var string
     */
    public $date;
    protected $_name = [
        'billOwner' => 'BillOwner',
        'billType'  => 'BillType',
        'date'      => 'Date',
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
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDailyBillRequest
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
