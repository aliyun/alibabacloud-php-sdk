<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetRiskStatsResponseBody\riskStats;

class GetRiskStatsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskStats[]
     */
    public $riskStats;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskStats' => 'RiskStats',
    ];

    public function validate()
    {
        if (\is_array($this->riskStats)) {
            Model::validateArray($this->riskStats);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskStats) {
            if (\is_array($this->riskStats)) {
                $res['RiskStats'] = [];
                $n1 = 0;
                foreach ($this->riskStats as $item1) {
                    $res['RiskStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskStats'])) {
            if (!empty($map['RiskStats'])) {
                $model->riskStats = [];
                $n1 = 0;
                foreach ($map['RiskStats'] as $item1) {
                    $model->riskStats[$n1] = riskStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
