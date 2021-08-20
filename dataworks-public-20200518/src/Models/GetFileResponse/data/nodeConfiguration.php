<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data\nodeConfiguration\inputList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data\nodeConfiguration\outputList;
use AlibabaCloud\Tea\Model;

class nodeConfiguration extends Model
{
    /**
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @var string
     */
    public $rerunMode;

    /**
     * @var bool
     */
    public $stop;

    /**
     * @var string
     */
    public $paraValue;

    /**
     * @var int
     */
    public $startEffectDate;

    /**
     * @var int
     */
    public $endEffectDate;

    /**
     * @var string
     */
    public $cronExpress;

    /**
     * @var string
     */
    public $cycleType;

    /**
     * @var string
     */
    public $dependentType;

    /**
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @var int
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var inputList[]
     */
    public $inputList;

    /**
     * @var outputList[]
     */
    public $outputList;
    protected $_name = [
        'autoRerunTimes'          => 'AutoRerunTimes',
        'autoRerunIntervalMillis' => 'AutoRerunIntervalMillis',
        'rerunMode'               => 'RerunMode',
        'stop'                    => 'Stop',
        'paraValue'               => 'ParaValue',
        'startEffectDate'         => 'StartEffectDate',
        'endEffectDate'           => 'EndEffectDate',
        'cronExpress'             => 'CronExpress',
        'cycleType'               => 'CycleType',
        'dependentType'           => 'DependentType',
        'dependentNodeIdList'     => 'DependentNodeIdList',
        'resourceGroupId'         => 'ResourceGroupId',
        'schedulerType'           => 'SchedulerType',
        'inputList'               => 'InputList',
        'outputList'              => 'OutputList',
    ];

    public function validate()
    {
        Model::validateRequired('autoRerunTimes', $this->autoRerunTimes, true);
        Model::validateRequired('autoRerunIntervalMillis', $this->autoRerunIntervalMillis, true);
        Model::validateRequired('rerunMode', $this->rerunMode, true);
        Model::validateRequired('stop', $this->stop, true);
        Model::validateRequired('paraValue', $this->paraValue, true);
        Model::validateRequired('startEffectDate', $this->startEffectDate, true);
        Model::validateRequired('endEffectDate', $this->endEffectDate, true);
        Model::validateRequired('cronExpress', $this->cronExpress, true);
        Model::validateRequired('cycleType', $this->cycleType, true);
        Model::validateRequired('dependentType', $this->dependentType, true);
        Model::validateRequired('dependentNodeIdList', $this->dependentNodeIdList, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('schedulerType', $this->schedulerType, true);
        Model::validateRequired('inputList', $this->inputList, true);
        Model::validateRequired('outputList', $this->outputList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRerunTimes) {
            $res['AutoRerunTimes'] = $this->autoRerunTimes;
        }
        if (null !== $this->autoRerunIntervalMillis) {
            $res['AutoRerunIntervalMillis'] = $this->autoRerunIntervalMillis;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->stop) {
            $res['Stop'] = $this->stop;
        }
        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
        }
        if (null !== $this->startEffectDate) {
            $res['StartEffectDate'] = $this->startEffectDate;
        }
        if (null !== $this->endEffectDate) {
            $res['EndEffectDate'] = $this->endEffectDate;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }
        if (null !== $this->dependentType) {
            $res['DependentType'] = $this->dependentType;
        }
        if (null !== $this->dependentNodeIdList) {
            $res['DependentNodeIdList'] = $this->dependentNodeIdList;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = [];
            if (null !== $this->inputList && \is_array($this->inputList)) {
                $n = 0;
                foreach ($this->inputList as $item) {
                    $res['InputList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputList) {
            $res['OutputList'] = [];
            if (null !== $this->outputList && \is_array($this->outputList)) {
                $n = 0;
                foreach ($this->outputList as $item) {
                    $res['OutputList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRerunTimes'])) {
            $model->autoRerunTimes = $map['AutoRerunTimes'];
        }
        if (isset($map['AutoRerunIntervalMillis'])) {
            $model->autoRerunIntervalMillis = $map['AutoRerunIntervalMillis'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['Stop'])) {
            $model->stop = $map['Stop'];
        }
        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }
        if (isset($map['StartEffectDate'])) {
            $model->startEffectDate = $map['StartEffectDate'];
        }
        if (isset($map['EndEffectDate'])) {
            $model->endEffectDate = $map['EndEffectDate'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }
        if (isset($map['DependentType'])) {
            $model->dependentType = $map['DependentType'];
        }
        if (isset($map['DependentNodeIdList'])) {
            $model->dependentNodeIdList = $map['DependentNodeIdList'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['InputList'])) {
            if (!empty($map['InputList'])) {
                $model->inputList = [];
                $n                = 0;
                foreach ($map['InputList'] as $item) {
                    $model->inputList[$n++] = null !== $item ? inputList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputList'])) {
            if (!empty($map['OutputList'])) {
                $model->outputList = [];
                $n                 = 0;
                foreach ($map['OutputList'] as $item) {
                    $model->outputList[$n++] = null !== $item ? outputList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
