<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskLevelDistributionResponseBody;

use AlibabaCloud\Dara\Model;

class timeList extends Model
{
    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $highRiskCount;

    /**
     * @var int
     */
    public $lowRiskCount;

    /**
     * @var int
     */
    public $middleRiskCount;

    /**
     * @var int
     */
    public $riskCount;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'endDate' => 'EndDate',
        'highRiskCount' => 'HighRiskCount',
        'lowRiskCount' => 'LowRiskCount',
        'middleRiskCount' => 'MiddleRiskCount',
        'riskCount' => 'RiskCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->highRiskCount) {
            $res['HighRiskCount'] = $this->highRiskCount;
        }

        if (null !== $this->lowRiskCount) {
            $res['LowRiskCount'] = $this->lowRiskCount;
        }

        if (null !== $this->middleRiskCount) {
            $res['MiddleRiskCount'] = $this->middleRiskCount;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
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
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['HighRiskCount'])) {
            $model->highRiskCount = $map['HighRiskCount'];
        }

        if (isset($map['LowRiskCount'])) {
            $model->lowRiskCount = $map['LowRiskCount'];
        }

        if (isset($map['MiddleRiskCount'])) {
            $model->middleRiskCount = $map['MiddleRiskCount'];
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        return $model;
    }
}
