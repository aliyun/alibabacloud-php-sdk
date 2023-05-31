<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponseBody\strategies\configTargets;
use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @description An array consisting of the assets to which the baseline check policy is applied.
     *
     * @var configTargets[]
     */
    public $configTargets;

    /**
     * @description The type of the baseline check policy. Valid values:
     *
     *   **common**: standard baseline check policy
     *   **custom**: custom baseline check policy
     *
     * @example custom
     *
     * @var string
     */
    public $customType;

    /**
     * @description The cycle of the baseline check. Valid values:
     *
     *   **1**: every 2 days
     *   **3**: every 4 days
     *   **7**: every 8 days
     *   30: every 31 days
     *
     * @example 1
     *
     * @var int
     */
    public $cycleDays;

    /**
     * @description The time when the baseline check starts. Valid values:
     *
     *   **0**: The baseline check starts within the time range from 00:00 to 06:00.
     *   **6**: The baseline check starts within the time range from 06:00 to 12:00.
     *   **12**: The baseline check starts within the time range from 12:00 to 18:00.
     *   **18**: The baseline check starts within the time range from 18:00 to 24:00.
     *
     * @example 0
     *
     * @var int
     */
    public $cycleStartTime;

    /**
     * @description The number of the assets to which the baseline check policy is applied.
     *
     * @example 50
     *
     * @var int
     */
    public $ecsCount;

    /**
     * @description The time when the baseline check based on the baseline check policy ends.
     *
     * @example 03:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The status of the baseline check policy. Valid values:
     *
     *   **1**: disabled
     *   **2**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $execStatus;

    /**
     * @description The ID of the baseline check policy.
     *
     * @example 8164248
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the baseline check policy.
     *
     * @example text2
     *
     * @var string
     */
    public $name;

    /**
     * @description The proportion of risk items to all baseline check items in the baseline check result.
     *
     * @example 0
     *
     * @var int
     */
    public $passRate;

    /**
     * @description The number of the assets on which the baseline check is complete.
     *
     * @example 20
     *
     * @var int
     */
    public $processRate;

    /**
     * @description The number of baseline check items in the baseline check policy.
     *
     * @example 23
     *
     * @var int
     */
    public $riskCount;

    /**
     * @description The time when the baseline check based on the baseline check policy starts.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The source of the baseline check policy. Valid values:
     *
     *   **1**: built-in policy, which indicates that the baseline check policy is provided and performed by Security Center by default.
     *   **2**: user-defined policy, which can be a standard or custom baseline check policy.
     *
     * @example 2
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'configTargets'  => 'ConfigTargets',
        'customType'     => 'CustomType',
        'cycleDays'      => 'CycleDays',
        'cycleStartTime' => 'CycleStartTime',
        'ecsCount'       => 'EcsCount',
        'endTime'        => 'EndTime',
        'execStatus'     => 'ExecStatus',
        'id'             => 'Id',
        'name'           => 'Name',
        'passRate'       => 'PassRate',
        'processRate'    => 'ProcessRate',
        'riskCount'      => 'RiskCount',
        'startTime'      => 'StartTime',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configTargets) {
            $res['ConfigTargets'] = [];
            if (null !== $this->configTargets && \is_array($this->configTargets)) {
                $n = 0;
                foreach ($this->configTargets as $item) {
                    $res['ConfigTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->execStatus) {
            $res['ExecStatus'] = $this->execStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->passRate) {
            $res['PassRate'] = $this->passRate;
        }
        if (null !== $this->processRate) {
            $res['ProcessRate'] = $this->processRate;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigTargets'])) {
            if (!empty($map['ConfigTargets'])) {
                $model->configTargets = [];
                $n                    = 0;
                foreach ($map['ConfigTargets'] as $item) {
                    $model->configTargets[$n++] = null !== $item ? configTargets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
        if (isset($map['CycleDays'])) {
            $model->cycleDays = $map['CycleDays'];
        }
        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecStatus'])) {
            $model->execStatus = $map['ExecStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PassRate'])) {
            $model->passRate = $map['PassRate'];
        }
        if (isset($map['ProcessRate'])) {
            $model->processRate = $map['ProcessRate'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
