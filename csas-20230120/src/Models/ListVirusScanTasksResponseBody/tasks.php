<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTasksResponseBody\tasks\customMatchGroup;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTasksResponseBody\tasks\matchTargetInfos;

class tasks extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var customMatchGroup[]
     */
    public $customMatchGroup;

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
     * @var matchTargetInfos[]
     */
    public $matchTargetInfos;

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
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string[]
     */
    public $whitelist;
    protected $_name = [
        'createTime' => 'CreateTime',
        'customMatchGroup' => 'CustomMatchGroup',
        'endTime' => 'EndTime',
        'highRiskOperation' => 'HighRiskOperation',
        'lowRiskOperation' => 'LowRiskOperation',
        'matchMode' => 'MatchMode',
        'matchTargetInfos' => 'MatchTargetInfos',
        'maxCpuUsage' => 'MaxCpuUsage',
        'midRiskOperation' => 'MidRiskOperation',
        'performanceMode' => 'PerformanceMode',
        'scanMode' => 'ScanMode',
        'scanPath' => 'ScanPath',
        'scanTargets' => 'ScanTargets',
        'status' => 'Status',
        'taskDescription' => 'TaskDescription',
        'taskId' => 'TaskId',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        if (\is_array($this->customMatchGroup)) {
            Model::validateArray($this->customMatchGroup);
        }
        if (\is_array($this->matchTargetInfos)) {
            Model::validateArray($this->matchTargetInfos);
        }
        if (\is_array($this->scanPath)) {
            Model::validateArray($this->scanPath);
        }
        if (\is_array($this->scanTargets)) {
            Model::validateArray($this->scanTargets);
        }
        if (\is_array($this->whitelist)) {
            Model::validateArray($this->whitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customMatchGroup) {
            if (\is_array($this->customMatchGroup)) {
                $res['CustomMatchGroup'] = [];
                $n1 = 0;
                foreach ($this->customMatchGroup as $item1) {
                    $res['CustomMatchGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

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

        if (null !== $this->matchTargetInfos) {
            if (\is_array($this->matchTargetInfos)) {
                $res['MatchTargetInfos'] = [];
                $n1 = 0;
                foreach ($this->matchTargetInfos as $item1) {
                    $res['MatchTargetInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskDescription) {
            $res['TaskDescription'] = $this->taskDescription;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CustomMatchGroup'])) {
            if (!empty($map['CustomMatchGroup'])) {
                $model->customMatchGroup = [];
                $n1 = 0;
                foreach ($map['CustomMatchGroup'] as $item1) {
                    $model->customMatchGroup[$n1] = customMatchGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

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

        if (isset($map['MatchTargetInfos'])) {
            if (!empty($map['MatchTargetInfos'])) {
                $model->matchTargetInfos = [];
                $n1 = 0;
                foreach ($map['MatchTargetInfos'] as $item1) {
                    $model->matchTargetInfos[$n1] = matchTargetInfos::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskDescription'])) {
            $model->taskDescription = $map['TaskDescription'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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
