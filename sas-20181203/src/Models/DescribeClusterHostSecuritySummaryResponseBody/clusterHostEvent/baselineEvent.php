<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterHostSecuritySummaryResponseBody\clusterHostEvent;

use AlibabaCloud\Tea\Model;

class baselineEvent extends Model
{
    /**
     * @description The number of baselines.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The risk level of the baseline. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example medium
     *
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'count'     => 'Count',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
