<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration\inputList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration\inputParameters;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration\outputList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration\outputParameters;
use AlibabaCloud\Tea\Model;

class nodeConfiguration extends Model
{
    /**
     * @description The interval between automatic reruns after an error occurs. Unit: milliseconds.
     *
     * The interval that you specify in the DataWorks console is measured in minutes. Pay attention to the conversion between the units of time when you call the operation.
     * @example 120000
     *
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @description The number of automatic reruns that are allowed after an error occurs.
     *
     * @example 3
     *
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @description The CRON expression that represents the periodic scheduling policy of the node.
     *
     * @example 00 05 00 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description The type of the scheduling cycle. Valid values: NOT_DAY and DAY. The value NOT_DAY indicates that the node is scheduled to run by minute or hour. The value DAY indicates that the node is scheduled to run by day, week, or month.
     *
     * This parameter corresponds to the Scheduling Cycle parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example DAY
     *
     * @var string
     */
    public $cycleType;

    /**
     * @description The ID of the node on which the node corresponding to the file depends when the DependentType parameter is set to USER_DEFINE. Multiple IDs are separated by commas (,).
     *
     * The value of this parameter is equivalent to the ID of the node that you specified after you select Previous Cycle and set Depend On to Other Nodes in the Dependencies section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 5,10,15,20
     *
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @description The type of the cross-cycle scheduling dependency of the node. Valid values:
     *
     *   SELF: The instance generated for the node in the current cycle depends on the instance generated for the node in the previous cycle.
     *   CHILD: The instance generated for the node in the current cycle depends on the instances generated for the descendant nodes at the nearest level of the node in the previous cycle.
     *   USER_DEFINE: The instance generated for the node in the current cycle depends on the instances generated for one or more specified nodes in the previous cycle.
     *   NONE: No cross-cycle scheduling dependency type is selected for the node.
     *
     * @example USER_DEFINE
     *
     * @var string
     */
    public $dependentType;

    /**
     * @description The end time of automatic scheduling. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter corresponds to the Validity Period parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 4155787800000
     *
     * @var int
     */
    public $endEffectDate;

    /**
     * @description The output names of the parent files on which the current file depends.
     *
     * @var inputList[]
     */
    public $inputList;

    /**
     * @description Input parameters of the node.
     *
     * This parameter corresponds to the Input Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @var inputParameters[]
     */
    public $inputParameters;

    /**
     * @description The output names of the current file.
     *
     * This parameter corresponds to the Output Name parameter under Output after Same Cycle is selected in the Dependencies section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @var outputList[]
     */
    public $outputList;

    /**
     * @description Output parameters of the node.
     *
     * This parameter corresponds to the Output Parameters table in the Input and Output Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @var outputParameters[]
     */
    public $outputParameters;

    /**
     * @description The scheduling parameters of the node.
     *
     * This parameter corresponds to the Parameters section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console). For more information about the configurations of the scheduling parameters, see [Configure scheduling parameters](~~137548~~).
     * @example a=x b=y
     *
     * @var string
     */
    public $paraValue;

    /**
     * @description Indicates whether the node that corresponds to the file can be rerun. Valid values:
     *
     *   ALL_ALLOWED: The node can be rerun regardless of whether it is successfully run or fails to run.
     *   FAILURE_ALLOWED: The node can be rerun only after it fails to run.
     *   ALL_DENIED: The node cannot be rerun regardless of whether it is successfully run or fails to run.
     *
     * This parameter corresponds to the Rerun parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example ALL_ALLOWED
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description The ID of the resource group that is used to run the node. You can call the [ListResourceGroups](~~173913~~) operation to query the available resource groups in the workspace.
     *
     * @example 375827434852437
     *
     * @var int
     */
    public $resourceGroupId;

    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL: The node is an auto triggered node.
     *   MANUAL: The node is a manually triggered node. Manually triggered nodes cannot be automatically triggered. They correspond to the nodes in the Manually Triggered Workflows pane.
     *   PAUSE: The node is a paused node.
     *   SKIP: The node is a dry-run node. Dry-run nodes are started as scheduled but the system sets the status of the nodes to successful when it starts to run them.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The start time of automatic scheduling. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter corresponds to the Validity Period parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 936923400000
     *
     * @var int
     */
    public $startEffectDate;

    /**
     * @description Indicates whether a node is immediately run after the node is deployed to the production environment.
     *
     * This parameter is valid only for an EMR Spark Streaming node or an EMR Streaming SQL node. This parameter corresponds to the Start Method parameter in the Schedule section of the Configure tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example true
     *
     * @var bool
     */
    public $startImmediately;

    /**
     * @description Indicates whether the scheduling for the node is suspended Valid values:
     *
     *   true: The scheduling for the node is suspended.
     *   false: The scheduling for the node is not suspended.
     *
     * This parameter corresponds to the Recurrence parameter in the Schedule section of the Properties tab in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example false
     *
     * @var bool
     */
    public $stop;
    protected $_name = [
        'autoRerunIntervalMillis' => 'AutoRerunIntervalMillis',
        'autoRerunTimes'          => 'AutoRerunTimes',
        'cronExpress'             => 'CronExpress',
        'cycleType'               => 'CycleType',
        'dependentNodeIdList'     => 'DependentNodeIdList',
        'dependentType'           => 'DependentType',
        'endEffectDate'           => 'EndEffectDate',
        'inputList'               => 'InputList',
        'inputParameters'         => 'InputParameters',
        'outputList'              => 'OutputList',
        'outputParameters'        => 'OutputParameters',
        'paraValue'               => 'ParaValue',
        'rerunMode'               => 'RerunMode',
        'resourceGroupId'         => 'ResourceGroupId',
        'schedulerType'           => 'SchedulerType',
        'startEffectDate'         => 'StartEffectDate',
        'startImmediately'        => 'StartImmediately',
        'stop'                    => 'Stop',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->endEffectDate) {
            $res['EndEffectDate'] = $this->endEffectDate;
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
        if (null !== $this->inputParameters) {
            $res['InputParameters'] = [];
            if (null !== $this->inputParameters && \is_array($this->inputParameters)) {
                $n = 0;
                foreach ($this->inputParameters as $item) {
                    $res['InputParameters'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->outputParameters) {
            $res['OutputParameters'] = [];
            if (null !== $this->outputParameters && \is_array($this->outputParameters)) {
                $n = 0;
                foreach ($this->outputParameters as $item) {
                    $res['OutputParameters'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['InputList'])) {
            if (!empty($map['InputList'])) {
                $model->inputList = [];
                $n                = 0;
                foreach ($map['InputList'] as $item) {
                    $model->inputList[$n++] = null !== $item ? inputList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InputParameters'])) {
            if (!empty($map['InputParameters'])) {
                $model->inputParameters = [];
                $n                      = 0;
                foreach ($map['InputParameters'] as $item) {
                    $model->inputParameters[$n++] = null !== $item ? inputParameters::fromMap($item) : $item;
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
        if (isset($map['OutputParameters'])) {
            if (!empty($map['OutputParameters'])) {
                $model->outputParameters = [];
                $n                       = 0;
                foreach ($map['OutputParameters'] as $item) {
                    $model->outputParameters[$n++] = null !== $item ? outputParameters::fromMap($item) : $item;
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

        return $model;
    }
}
