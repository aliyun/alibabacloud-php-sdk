<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeSavingsPlansCoverageTotalRequest extends Model
{
    /**
     * @var string
     */
    public $startPeriod;

    /**
     * @var string
     */
    public $endPeriod;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var int
     */
    public $billOwnerId;
    protected $_name = [
        'startPeriod' => 'StartPeriod',
        'endPeriod'   => 'EndPeriod',
        'periodType'  => 'PeriodType',
        'billOwnerId' => 'BillOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }
        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSavingsPlansCoverageTotalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }
        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }

        return $model;
    }
}
