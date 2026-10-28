<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaUtilizationReportResponseBody\quotas;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaUtilizationReportResponseBody\quotas\flowControlAlgo\period;

class flowControlAlgo extends Model
{
    /**
     * @var string
     */
    public $algoType;

    /**
     * @var period
     */
    public $period;

    /**
     * @var int
     */
    public $refillInterval;

    /**
     * @var int
     */
    public $tokensPerRefill;

    /**
     * @var float
     */
    public $totalQuota;
    protected $_name = [
        'algoType' => 'AlgoType',
        'period' => 'Period',
        'refillInterval' => 'RefillInterval',
        'tokensPerRefill' => 'TokensPerRefill',
        'totalQuota' => 'TotalQuota',
    ];

    public function validate()
    {
        if (null !== $this->period) {
            $this->period->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algoType) {
            $res['AlgoType'] = $this->algoType;
        }

        if (null !== $this->period) {
            $res['Period'] = null !== $this->period ? $this->period->toArray($noStream) : $this->period;
        }

        if (null !== $this->refillInterval) {
            $res['RefillInterval'] = $this->refillInterval;
        }

        if (null !== $this->tokensPerRefill) {
            $res['TokensPerRefill'] = $this->tokensPerRefill;
        }

        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
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
        if (isset($map['AlgoType'])) {
            $model->algoType = $map['AlgoType'];
        }

        if (isset($map['Period'])) {
            $model->period = period::fromMap($map['Period']);
        }

        if (isset($map['RefillInterval'])) {
            $model->refillInterval = $map['RefillInterval'];
        }

        if (isset($map['TokensPerRefill'])) {
            $model->tokensPerRefill = $map['TokensPerRefill'];
        }

        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }

        return $model;
    }
}
