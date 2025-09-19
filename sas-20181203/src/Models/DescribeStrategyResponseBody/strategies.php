<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponseBody\strategies\configTargets;

class strategies extends Model
{
    /**
     * @var configTargets[]
     */
    public $configTargets;

    /**
     * @var string
     */
    public $customType;

    /**
     * @var int
     */
    public $cycleDays;

    /**
     * @var int
     */
    public $cycleStartTime;

    /**
     * @var int
     */
    public $ecsCount;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $execStatus;

    /**
     * @var string
     */
    public $executionType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $passRate;

    /**
     * @var string
     */
    public $percent;

    /**
     * @var int
     */
    public $processRate;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $userModifyTime;
    protected $_name = [
        'configTargets' => 'ConfigTargets',
        'customType' => 'CustomType',
        'cycleDays' => 'CycleDays',
        'cycleStartTime' => 'CycleStartTime',
        'ecsCount' => 'EcsCount',
        'endTime' => 'EndTime',
        'execStatus' => 'ExecStatus',
        'executionType' => 'ExecutionType',
        'id' => 'Id',
        'name' => 'Name',
        'passRate' => 'PassRate',
        'percent' => 'Percent',
        'processRate' => 'ProcessRate',
        'riskCount' => 'RiskCount',
        'startTime' => 'StartTime',
        'type' => 'Type',
        'userModifyTime' => 'UserModifyTime',
    ];

    public function validate()
    {
        if (\is_array($this->configTargets)) {
            Model::validateArray($this->configTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configTargets) {
            if (\is_array($this->configTargets)) {
                $res['ConfigTargets'] = [];
                $n1 = 0;
                foreach ($this->configTargets as $item1) {
                    $res['ConfigTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->executionType) {
            $res['ExecutionType'] = $this->executionType;
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

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
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

        if (null !== $this->userModifyTime) {
            $res['UserModifyTime'] = $this->userModifyTime;
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
        if (isset($map['ConfigTargets'])) {
            if (!empty($map['ConfigTargets'])) {
                $model->configTargets = [];
                $n1 = 0;
                foreach ($map['ConfigTargets'] as $item1) {
                    $model->configTargets[$n1] = configTargets::fromMap($item1);
                    ++$n1;
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

        if (isset($map['ExecutionType'])) {
            $model->executionType = $map['ExecutionType'];
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

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
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

        if (isset($map['UserModifyTime'])) {
            $model->userModifyTime = $map['UserModifyTime'];
        }

        return $model;
    }
}
