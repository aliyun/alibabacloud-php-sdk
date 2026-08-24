<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateVirusScanTaskRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $highRiskOperation;

    /**
     * @var string
     */
    public $lowRiskOperation;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var int
     */
    public $maxCpuUsage;

    /**
     * @var string
     */
    public $midRiskOperation;

    /**
     * @var string
     */
    public $performanceMode;

    /**
     * @var string
     */
    public $scanMode;

    /**
     * @var string[]
     */
    public $scanPath;

    /**
     * @var string[]
     */
    public $scanTargets;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'endTime' => 'EndTime',
        'highRiskOperation' => 'HighRiskOperation',
        'lowRiskOperation' => 'LowRiskOperation',
        'matchMode' => 'MatchMode',
        'maxCpuUsage' => 'MaxCpuUsage',
        'midRiskOperation' => 'MidRiskOperation',
        'performanceMode' => 'PerformanceMode',
        'scanMode' => 'ScanMode',
        'scanPath' => 'ScanPath',
        'scanTargets' => 'ScanTargets',
        'taskDescription' => 'TaskDescription',
        'userGroupIds' => 'UserGroupIds',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        if (\is_array($this->scanPath)) {
            Model::validateArray($this->scanPath);
        }
        if (\is_array($this->scanTargets)) {
            Model::validateArray($this->scanTargets);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->highRiskOperation) {
            $res['HighRiskOperation'] = $this->highRiskOperation;
        }

        if (null !== $this->lowRiskOperation) {
            $res['LowRiskOperation'] = $this->lowRiskOperation;
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->maxCpuUsage) {
            $res['MaxCpuUsage'] = $this->maxCpuUsage;
        }

        if (null !== $this->midRiskOperation) {
            $res['MidRiskOperation'] = $this->midRiskOperation;
        }

        if (null !== $this->performanceMode) {
            $res['PerformanceMode'] = $this->performanceMode;
        }

        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
        }

        if (null !== $this->scanPath) {
            if (\is_array($this->scanPath)) {
                $res['ScanPath'] = [];
                $n1 = 0;
                foreach ($this->scanPath as $item1) {
                    $res['ScanPath'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scanTargets) {
            if (\is_array($this->scanTargets)) {
                $res['ScanTargets'] = [];
                $n1 = 0;
                foreach ($this->scanTargets as $item1) {
                    $res['ScanTargets'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskDescription) {
            $res['TaskDescription'] = $this->taskDescription;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whitelist) {
            if (\is_array($this->whitelist)) {
                $res['Whitelist'] = [];
                $n1 = 0;
                foreach ($this->whitelist as $item1) {
                    $res['Whitelist'][$n1] = $item1;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['HighRiskOperation'])) {
            $model->highRiskOperation = $map['HighRiskOperation'];
        }

        if (isset($map['LowRiskOperation'])) {
            $model->lowRiskOperation = $map['LowRiskOperation'];
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['MaxCpuUsage'])) {
            $model->maxCpuUsage = $map['MaxCpuUsage'];
        }

        if (isset($map['MidRiskOperation'])) {
            $model->midRiskOperation = $map['MidRiskOperation'];
        }

        if (isset($map['PerformanceMode'])) {
            $model->performanceMode = $map['PerformanceMode'];
        }

        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }

        if (isset($map['ScanPath'])) {
            if (!empty($map['ScanPath'])) {
                $model->scanPath = [];
                $n1 = 0;
                foreach ($map['ScanPath'] as $item1) {
                    $model->scanPath[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScanTargets'])) {
            if (!empty($map['ScanTargets'])) {
                $model->scanTargets = [];
                $n1 = 0;
                foreach ($map['ScanTargets'] as $item1) {
                    $model->scanTargets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskDescription'])) {
            $model->taskDescription = $map['TaskDescription'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Whitelist'])) {
            if (!empty($map['Whitelist'])) {
                $model->whitelist = [];
                $n1 = 0;
                foreach ($map['Whitelist'] as $item1) {
                    $model->whitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
