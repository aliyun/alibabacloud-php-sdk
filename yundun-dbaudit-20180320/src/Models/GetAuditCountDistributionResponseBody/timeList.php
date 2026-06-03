<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountDistributionResponseBody;

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
    public $riskCount;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $sqlCount;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'endDate' => 'EndDate',
        'riskCount' => 'RiskCount',
        'sessionCount' => 'SessionCount',
        'sqlCount' => 'SqlCount',
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

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
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

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }

        return $model;
    }
}
