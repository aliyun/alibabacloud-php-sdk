<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration\inputList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration\inputParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration\outputList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration\outputParameters;

class nodeConfiguration extends Model
{
    /**
     * @var string
     */
    public $applyScheduleImmediately;
    /**
     * @var int
     */
    public $autoRerunIntervalMillis;
    /**
     * @var int
     */
    public $autoRerunTimes;
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
    public $dependentNodeIdList;
    /**
     * @var string
     */
    public $dependentType;
    /**
     * @var int
     */
    public $endEffectDate;
    /**
     * @var string
     */
    public $ignoreParentSkipRunningProperty;
    /**
     * @var inputList[]
     */
    public $inputList;
    /**
     * @var inputParameters[]
     */
    public $inputParameters;
    /**
     * @var outputList[]
     */
    public $outputList;
    /**
     * @var outputParameters[]
     */
    public $outputParameters;
    /**
     * @var string
     */
    public $paraValue;
    /**
     * @var string
     */
    public $rerunMode;
    /**
     * @var int
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $schedulerType;
    /**
     * @var int
     */
    public $startEffectDate;
    /**
     * @var bool
     */
    public $startImmediately;
    /**
     * @var bool
     */
    public $stop;
    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'applyScheduleImmediately'        => 'ApplyScheduleImmediately',
        'autoRerunIntervalMillis'         => 'AutoRerunIntervalMillis',
        'autoRerunTimes'                  => 'AutoRerunTimes',
        'cronExpress'                     => 'CronExpress',
        'cycleType'                       => 'CycleType',
        'dependentNodeIdList'             => 'DependentNodeIdList',
        'dependentType'                   => 'DependentType',
        'endEffectDate'                   => 'EndEffectDate',
        'ignoreParentSkipRunningProperty' => 'IgnoreParentSkipRunningProperty',
        'inputList'                       => 'InputList',
        'inputParameters'                 => 'InputParameters',
        'outputList'                      => 'OutputList',
        'outputParameters'                => 'OutputParameters',
        'paraValue'                       => 'ParaValue',
        'rerunMode'                       => 'RerunMode',
        'resourceGroupId'                 => 'ResourceGroupId',
        'schedulerType'                   => 'SchedulerType',
        'startEffectDate'                 => 'StartEffectDate',
        'startImmediately'                => 'StartImmediately',
        'stop'                            => 'Stop',
        'timeout'                         => 'Timeout',
    ];

    public function validate()
    {
        if (\is_array($this->inputList)) {
            Model::validateArray($this->inputList);
        }
        if (\is_array($this->inputParameters)) {
            Model::validateArray($this->inputParameters);
        }
        if (\is_array($this->outputList)) {
            Model::validateArray($this->outputList);
        }
        if (\is_array($this->outputParameters)) {
            Model::validateArray($this->outputParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyScheduleImmediately) {
            $res['ApplyScheduleImmediately'] = $this->applyScheduleImmediately;
        }

        if (null !== $this->autoRerunIntervalMillis) {
            $res['AutoRerunIntervalMillis'] = $this->autoRerunIntervalMillis;
        }

        if (null !== $this->autoRerunTimes) {
            $res['AutoRerunTimes'] = $this->autoRerunTimes;
        }

        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }

        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }

        if (null !== $this->dependentNodeIdList) {
            $res['DependentNodeIdList'] = $this->dependentNodeIdList;
        }

        if (null !== $this->dependentType) {
            $res['DependentType'] = $this->dependentType;
        }

        if (null !== $this->endEffectDate) {
            $res['EndEffectDate'] = $this->endEffectDate;
        }

        if (null !== $this->ignoreParentSkipRunningProperty) {
            $res['IgnoreParentSkipRunningProperty'] = $this->ignoreParentSkipRunningProperty;
        }

        if (null !== $this->inputList) {
            if (\is_array($this->inputList)) {
                $res['InputList'] = [];
                $n1               = 0;
                foreach ($this->inputList as $item1) {
                    $res['InputList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inputParameters) {
            if (\is_array($this->inputParameters)) {
                $res['InputParameters'] = [];
                $n1                     = 0;
                foreach ($this->inputParameters as $item1) {
                    $res['InputParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputList) {
            if (\is_array($this->outputList)) {
                $res['OutputList'] = [];
                $n1                = 0;
                foreach ($this->outputList as $item1) {
                    $res['OutputList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputParameters) {
            if (\is_array($this->outputParameters)) {
                $res['OutputParameters'] = [];
                $n1                      = 0;
                foreach ($this->outputParameters as $item1) {
                    $res['OutputParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
        }

        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        if (null !== $this->startEffectDate) {
            $res['StartEffectDate'] = $this->startEffectDate;
        }

        if (null !== $this->startImmediately) {
            $res['StartImmediately'] = $this->startImmediately;
        }

        if (null !== $this->stop) {
            $res['Stop'] = $this->stop;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['ApplyScheduleImmediately'])) {
            $model->applyScheduleImmediately = $map['ApplyScheduleImmediately'];
        }

        if (isset($map['AutoRerunIntervalMillis'])) {
            $model->autoRerunIntervalMillis = $map['AutoRerunIntervalMillis'];
        }

        if (isset($map['AutoRerunTimes'])) {
            $model->autoRerunTimes = $map['AutoRerunTimes'];
        }

        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }

        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }

        if (isset($map['DependentNodeIdList'])) {
            $model->dependentNodeIdList = $map['DependentNodeIdList'];
        }

        if (isset($map['DependentType'])) {
            $model->dependentType = $map['DependentType'];
        }

        if (isset($map['EndEffectDate'])) {
            $model->endEffectDate = $map['EndEffectDate'];
        }

        if (isset($map['IgnoreParentSkipRunningProperty'])) {
            $model->ignoreParentSkipRunningProperty = $map['IgnoreParentSkipRunningProperty'];
        }

        if (isset($map['InputList'])) {
            if (!empty($map['InputList'])) {
                $model->inputList = [];
                $n1               = 0;
                foreach ($map['InputList'] as $item1) {
                    $model->inputList[$n1++] = inputList::fromMap($item1);
                }
            }
        }

        if (isset($map['InputParameters'])) {
            if (!empty($map['InputParameters'])) {
                $model->inputParameters = [];
                $n1                     = 0;
                foreach ($map['InputParameters'] as $item1) {
                    $model->inputParameters[$n1++] = inputParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['OutputList'])) {
            if (!empty($map['OutputList'])) {
                $model->outputList = [];
                $n1                = 0;
                foreach ($map['OutputList'] as $item1) {
                    $model->outputList[$n1++] = outputList::fromMap($item1);
                }
            }
        }

        if (isset($map['OutputParameters'])) {
            if (!empty($map['OutputParameters'])) {
                $model->outputParameters = [];
                $n1                      = 0;
                foreach ($map['OutputParameters'] as $item1) {
                    $model->outputParameters[$n1++] = outputParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }

        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        if (isset($map['StartEffectDate'])) {
            $model->startEffectDate = $map['StartEffectDate'];
        }

        if (isset($map['StartImmediately'])) {
            $model->startImmediately = $map['StartImmediately'];
        }

        if (isset($map['Stop'])) {
            $model->stop = $map['Stop'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
