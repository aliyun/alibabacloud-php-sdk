<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\riskRule\day30MaxHitRule;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\riskRule\maxHitRule;
use AlibabaCloud\Tea\Model;

class riskRule extends Model
{
    /**
     * @var int
     */
    public $day30RiskCount;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var maxHitRule
     */
    public $maxHitRule;

    /**
     * @var day30MaxHitRule
     */
    public $day30MaxHitRule;
    protected $_name = [
        'day30RiskCount'  => 'Day30RiskCount',
        'riskCount'       => 'RiskCount',
        'maxHitRule'      => 'MaxHitRule',
        'day30MaxHitRule' => 'Day30MaxHitRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day30RiskCount) {
            $res['Day30RiskCount'] = $this->day30RiskCount;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->maxHitRule) {
            $res['MaxHitRule'] = null !== $this->maxHitRule ? $this->maxHitRule->toMap() : null;
        }
        if (null !== $this->day30MaxHitRule) {
            $res['Day30MaxHitRule'] = null !== $this->day30MaxHitRule ? $this->day30MaxHitRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day30RiskCount'])) {
            $model->day30RiskCount = $map['Day30RiskCount'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['MaxHitRule'])) {
            $model->maxHitRule = maxHitRule::fromMap($map['MaxHitRule']);
        }
        if (isset($map['Day30MaxHitRule'])) {
            $model->day30MaxHitRule = day30MaxHitRule::fromMap($map['Day30MaxHitRule']);
        }

        return $model;
    }
}
