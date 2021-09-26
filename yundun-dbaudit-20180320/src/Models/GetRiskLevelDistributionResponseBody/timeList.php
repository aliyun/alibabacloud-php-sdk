<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskLevelDistributionResponseBody;

use AlibabaCloud\Tea\Model;

class timeList extends Model
{
    /**
     * @var int
     */
    public $middleRiskCount;

    /**
     * @var int
     */
    public $highRiskCount;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var int
     */
    public $lowRiskCount;
    protected $_name = [
        'middleRiskCount' => 'MiddleRiskCount',
        'highRiskCount'   => 'HighRiskCount',
        'endDate'         => 'EndDate',
        'beginDate'       => 'BeginDate',
        'riskCount'       => 'RiskCount',
        'lowRiskCount'    => 'LowRiskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->middleRiskCount) {
            $res['MiddleRiskCount'] = $this->middleRiskCount;
        }
        if (null !== $this->highRiskCount) {
            $res['HighRiskCount'] = $this->highRiskCount;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->lowRiskCount) {
            $res['LowRiskCount'] = $this->lowRiskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MiddleRiskCount'])) {
            $model->middleRiskCount = $map['MiddleRiskCount'];
        }
        if (isset($map['HighRiskCount'])) {
            $model->highRiskCount = $map['HighRiskCount'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['LowRiskCount'])) {
            $model->lowRiskCount = $map['LowRiskCount'];
        }

        return $model;
    }
}
