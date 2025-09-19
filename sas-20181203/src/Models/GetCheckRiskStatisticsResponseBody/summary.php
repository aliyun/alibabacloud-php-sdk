<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $handledCheckToday;

    /**
     * @var int
     */
    public $handledCheckTotal;

    /**
     * @var int
     */
    public $handledDays;

    /**
     * @var int
     */
    public $riskCheckCnt;

    /**
     * @var int
     */
    public $riskDays;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
