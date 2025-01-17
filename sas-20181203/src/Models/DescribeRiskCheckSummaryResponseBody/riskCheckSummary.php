<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary\groups;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary\riskLevelCount;

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
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (\is_array($this->riskLevelCount)) {
            Model::validateArray($this->riskLevelCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1            = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->riskLevelCount)) {
                $res['RiskLevelCount'] = [];
                $n1                    = 0;
                foreach ($this->riskLevelCount as $item1) {
                    $res['RiskLevelCount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskRate) {
            $res['RiskRate'] = $this->riskRate;
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
                $n1            = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1++] = groups::fromMap($item1);
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
                $n1                    = 0;
                foreach ($map['RiskLevelCount'] as $item1) {
                    $model->riskLevelCount[$n1++] = riskLevelCount::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskRate'])) {
            $model->riskRate = $map['RiskRate'];
        }

        return $model;
    }
}
