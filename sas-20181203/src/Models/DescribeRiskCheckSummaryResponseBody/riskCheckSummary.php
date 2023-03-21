<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary\groups;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary\riskLevelCount;
use AlibabaCloud\Tea\Model;

class riskCheckSummary extends Model
{
    /**
     * @var int
     */
    public $affectedAssetCount;

    /**
     * @var int
     */
    public $disabledRiskCount;

    /**
     * @var int
     */
    public $enabledRiskCount;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var int
     */
    public $itemCount;

    /**
     * @var int
     */
    public $previousCount;

    /**
     * @var int
     */
    public $previousTime;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var riskLevelCount[]
     */
    public $riskLevelCount;

    /**
     * @var float
     */
    public $riskRate;
    protected $_name = [
        'affectedAssetCount' => 'AffectedAssetCount',
        'disabledRiskCount'  => 'DisabledRiskCount',
        'enabledRiskCount'   => 'EnabledRiskCount',
        'groups'             => 'Groups',
        'itemCount'          => 'ItemCount',
        'previousCount'      => 'PreviousCount',
        'previousTime'       => 'PreviousTime',
        'riskCount'          => 'RiskCount',
        'riskLevelCount'     => 'RiskLevelCount',
        'riskRate'           => 'RiskRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectedAssetCount) {
            $res['AffectedAssetCount'] = $this->affectedAssetCount;
        }
        if (null !== $this->disabledRiskCount) {
            $res['DisabledRiskCount'] = $this->disabledRiskCount;
        }
        if (null !== $this->enabledRiskCount) {
            $res['EnabledRiskCount'] = $this->enabledRiskCount;
        }
        if (null !== $this->groups) {
            $res['Groups'] = [];
            if (null !== $this->groups && \is_array($this->groups)) {
                $n = 0;
                foreach ($this->groups as $item) {
                    $res['Groups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemCount) {
            $res['ItemCount'] = $this->itemCount;
        }
        if (null !== $this->previousCount) {
            $res['PreviousCount'] = $this->previousCount;
        }
        if (null !== $this->previousTime) {
            $res['PreviousTime'] = $this->previousTime;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->riskLevelCount) {
            $res['RiskLevelCount'] = [];
            if (null !== $this->riskLevelCount && \is_array($this->riskLevelCount)) {
                $n = 0;
                foreach ($this->riskLevelCount as $item) {
                    $res['RiskLevelCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskRate) {
            $res['RiskRate'] = $this->riskRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskCheckSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectedAssetCount'])) {
            $model->affectedAssetCount = $map['AffectedAssetCount'];
        }
        if (isset($map['DisabledRiskCount'])) {
            $model->disabledRiskCount = $map['DisabledRiskCount'];
        }
        if (isset($map['EnabledRiskCount'])) {
            $model->enabledRiskCount = $map['EnabledRiskCount'];
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n             = 0;
                foreach ($map['Groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ItemCount'])) {
            $model->itemCount = $map['ItemCount'];
        }
        if (isset($map['PreviousCount'])) {
            $model->previousCount = $map['PreviousCount'];
        }
        if (isset($map['PreviousTime'])) {
            $model->previousTime = $map['PreviousTime'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['RiskLevelCount'])) {
            if (!empty($map['RiskLevelCount'])) {
                $model->riskLevelCount = [];
                $n                     = 0;
                foreach ($map['RiskLevelCount'] as $item) {
                    $model->riskLevelCount[$n++] = null !== $item ? riskLevelCount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskRate'])) {
            $model->riskRate = $map['RiskRate'];
        }

        return $model;
    }
}
