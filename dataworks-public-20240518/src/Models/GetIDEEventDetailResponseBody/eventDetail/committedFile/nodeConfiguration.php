<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration\inputList;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration\outputList;

class nodeConfiguration extends Model
{
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
     * @var inputList[]
     */
    public $inputList;

    /**
     * @var outputList[]
     */
    public $outputList;

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
    protected $_name = [
        'autoRerunIntervalMillis' => 'AutoRerunIntervalMillis',
        'autoRerunTimes' => 'AutoRerunTimes',
        'cronExpress' => 'CronExpress',
        'cycleType' => 'CycleType',
        'dependentNodeIdList' => 'DependentNodeIdList',
        'dependentType' => 'DependentType',
        'inputList' => 'InputList',
        'outputList' => 'OutputList',
        'paraValue' => 'ParaValue',
        'rerunMode' => 'RerunMode',
        'resourceGroupId' => 'ResourceGroupId',
        'schedulerType' => 'SchedulerType',
    ];

    public function validate()
    {
        if (\is_array($this->inputList)) {
            Model::validateArray($this->inputList);
        }
        if (\is_array($this->outputList)) {
            Model::validateArray($this->outputList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->inputList) {
            if (\is_array($this->inputList)) {
                $res['InputList'] = [];
                $n1 = 0;
                foreach ($this->inputList as $item1) {
                    $res['InputList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outputList) {
            if (\is_array($this->outputList)) {
                $res['OutputList'] = [];
                $n1 = 0;
                foreach ($this->outputList as $item1) {
                    $res['OutputList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['InputList'])) {
            if (!empty($map['InputList'])) {
                $model->inputList = [];
                $n1 = 0;
                foreach ($map['InputList'] as $item1) {
                    $model->inputList[$n1] = inputList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OutputList'])) {
            if (!empty($map['OutputList'])) {
                $model->outputList = [];
                $n1 = 0;
                foreach ($map['OutputList'] as $item1) {
                    $model->outputList[$n1] = outputList::fromMap($item1);
                    ++$n1;
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

        return $model;
    }
}
