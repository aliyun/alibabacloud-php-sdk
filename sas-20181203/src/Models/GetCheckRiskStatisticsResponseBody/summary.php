<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @description Check items handled today.
     *
     * @example 0
     *
     * @var int
     */
    public $handledCheckToday;

    /**
     * @description A risk item exists.
     *
     * @example 3
     *
     * @var int
     */
    public $handledCheckTotal;

    /**
     * @description Total days since check items were handled.
     *
     * @example 365
     *
     * @var int
     */
    public $handledDays;

    /**
     * @description Check items that failed to pass the check.
     *
     * @example 1
     *
     * @var int
     */
    public $riskCheckCnt;

    /**
     * @description Days since check items failed.
     *
     * @example 30
     *
     * @var int
     */
    public $riskDays;

    /**
     * @description Risks to be handled.
     *
     * @example 5
     *
     * @var int
     */
    public $riskWarningCnt;
    protected $_name = [
        'handledCheckToday' => 'HandledCheckToday',
        'handledCheckTotal' => 'HandledCheckTotal',
        'handledDays' => 'HandledDays',
        'riskCheckCnt' => 'RiskCheckCnt',
        'riskDays' => 'RiskDays',
        'riskWarningCnt' => 'RiskWarningCnt',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->handledCheckToday) {
            $res['HandledCheckToday'] = $this->handledCheckToday;
        }
        if (null !== $this->handledCheckTotal) {
            $res['HandledCheckTotal'] = $this->handledCheckTotal;
        }
        if (null !== $this->handledDays) {
            $res['HandledDays'] = $this->handledDays;
        }
        if (null !== $this->riskCheckCnt) {
            $res['RiskCheckCnt'] = $this->riskCheckCnt;
        }
        if (null !== $this->riskDays) {
            $res['RiskDays'] = $this->riskDays;
        }
        if (null !== $this->riskWarningCnt) {
            $res['RiskWarningCnt'] = $this->riskWarningCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HandledCheckToday'])) {
            $model->handledCheckToday = $map['HandledCheckToday'];
        }
        if (isset($map['HandledCheckTotal'])) {
            $model->handledCheckTotal = $map['HandledCheckTotal'];
        }
        if (isset($map['HandledDays'])) {
            $model->handledDays = $map['HandledDays'];
        }
        if (isset($map['RiskCheckCnt'])) {
            $model->riskCheckCnt = $map['RiskCheckCnt'];
        }
        if (isset($map['RiskDays'])) {
            $model->riskDays = $map['RiskDays'];
        }
        if (isset($map['RiskWarningCnt'])) {
            $model->riskWarningCnt = $map['RiskWarningCnt'];
        }

        return $model;
    }
}
