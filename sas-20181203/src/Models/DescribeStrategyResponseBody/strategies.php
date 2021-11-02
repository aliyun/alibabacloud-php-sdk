<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponseBody\strategies\configTargets;
use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $execStatus;

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
     * @var int
     */
    public $processRate;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'configTargets'  => 'ConfigTargets',
        'customType'     => 'CustomType',
        'cycleDays'      => 'CycleDays',
        'cycleStartTime' => 'CycleStartTime',
        'ecsCount'       => 'EcsCount',
        'execStatus'     => 'ExecStatus',
        'id'             => 'Id',
        'name'           => 'Name',
        'passRate'       => 'PassRate',
        'processRate'    => 'ProcessRate',
        'riskCount'      => 'RiskCount',
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
