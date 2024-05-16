<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration\inputList;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile\nodeConfiguration\outputList;
use AlibabaCloud\Tea\Model;

class nodeConfiguration extends Model
{
    /**
     * @description The interval at which the node corresponding to the file is rerun. Unit: milliseconds.
     *
     * @example 120000
     *
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @description The number of times that the node corresponding to the file can be rerun.
     *
     * @example 3
     *
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @description The CRON expression that is used to schedule the node corresponding to the file.
     *
     * @example 00 05 00 * * ?
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description The type of the scheduling cycle of the node that corresponds to the file. Valid values: NOT_DAY and DAY. A value of NOT_DAY indicates that the node is scheduled to run by minute or hour. A value of DAY indicates that the node is scheduled to run by day, week, or month.
     *
     * This parameter is equivalent to the Scheduling Cycle parameter in the Schedule section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example DAY
     *
     * @var string
     */
    public $cycleType;

    /**
     * @description The IDs of the nodes on which the node corresponding to the file depends when the DependentType parameter is set to USER_DEFINE. Multiple IDs are separated by commas (,).
     *
     * This parameter is equivalent to the field that appears after Previous Cycle is selected and the Depend On parameter is set to Other Nodes in the Dependencies section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example 5,10,15,20
     *
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @description The type of the cross-cycle scheduling dependency of the node that corresponds to the file. Valid values:
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
     * @description The output names of the parent files on which the current file depends.
     *
     * @var inputList[]
     */
    public $inputList;

    /**
     * @description The output names of the current file.
     *
     * This parameter is equivalent to the Output Name parameter under Output in the Dependencies section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @var outputList[]
     */
    public $outputList;

    /**
     * @description The scheduling parameters.
     *
     * This parameter is equivalent to the configuration of the scheduling parameters in the Parameters section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console). For more information, see [Configure scheduling parameters](https://help.aliyun.com/document_detail/137548.html).
     * @example a=x b=y
     *
     * @var string
     */
    public $paraValue;

    /**
     * @description Indicates whether the node can be rerun. Valid values:
     *
     *   ALL_ALLOWED: The node can be rerun regardless of whether it is successfully run or fails to run.
     *   FAILURE_ALLOWED: The node can be rerun only after it fails to run.
     *   ALL_DENIED: The node cannot be rerun regardless of whether it is successfully run or fails to run.
     *
     * This parameter is equivalent to the Rerun parameter in the Schedule section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example ALL_ALLOWED
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description The ID of the resource group that is used to run the node that corresponds to the file. You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/173913.html) operation to query the available resource groups in the workspace.
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
    protected $_name = [
        'autoRerunIntervalMillis' => 'AutoRerunIntervalMillis',
        'autoRerunTimes'          => 'AutoRerunTimes',
        'cronExpress'             => 'CronExpress',
        'cycleType'               => 'CycleType',
        'dependentNodeIdList'     => 'DependentNodeIdList',
        'dependentType'           => 'DependentType',
        'inputList'               => 'InputList',
        'outputList'              => 'OutputList',
        'paraValue'               => 'ParaValue',
        'rerunMode'               => 'RerunMode',
        'resourceGroupId'         => 'ResourceGroupId',
        'schedulerType'           => 'SchedulerType',
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
