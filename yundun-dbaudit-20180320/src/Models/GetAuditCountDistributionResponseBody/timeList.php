<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountDistributionResponseBody;

use AlibabaCloud\Tea\Model;

class timeList extends Model
{
    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $riskCount;
    protected $_name = [
        'sessionCount' => 'SessionCount',
        'beginDate'    => 'BeginDate',
        'sqlCount'     => 'SqlCount',
        'endDate'      => 'EndDate',
        'riskCount'    => 'RiskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
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
        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        return $model;
    }
}
