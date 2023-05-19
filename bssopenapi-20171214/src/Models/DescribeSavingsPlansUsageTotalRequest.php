<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeSavingsPlansUsageTotalRequest extends Model
{
    /**
     * @description The total amount of the savings plan.
     *
     * @example Queries the usage summary of savings plans.
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @description The usage summary.
     *
     * @example The pay-as-you-go cost.
     *
     * @var string
     */
    public $endPeriod;

    /**
     * @description The amount that is saved.
     *
     * @example The total usage.
     *
     * @var string
     */
    public $periodType;

    /**
     * @description The usage.
     *
     * @example The period.
     *
     * The value is in the format of yyyyMMddHH.
     * @var string
     */
    public $startPeriod;
    protected $_name = [
        'billOwnerId' => 'BillOwnerId',
        'endPeriod'   => 'EndPeriod',
        'periodType'  => 'PeriodType',
        'startPeriod' => 'StartPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
        }
        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSavingsPlansUsageTotalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }
        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }

        return $model;
    }
}
