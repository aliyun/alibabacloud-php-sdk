<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetTaskResponseBody\data\resourceList;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetTaskResponseBody\data\taskStepList;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $currentTaskMessage;

    /**
     * @var string
     */
    public $currentTaskStep;

    /**
     * @var string
     */
    public $executeRegion;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $performanceType;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $systemImageId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskStepList[]
     */
    public $taskStepList;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'aliUid' => 'AliUid',
        'currentTaskMessage' => 'CurrentTaskMessage',
        'currentTaskStep' => 'CurrentTaskStep',
        'executeRegion' => 'ExecuteRegion',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'performanceType' => 'PerformanceType',
        'progress' => 'Progress',
        'resourceList' => 'ResourceList',
        'runMode' => 'RunMode',
        'status' => 'Status',
        'systemDiskSize' => 'SystemDiskSize',
        'systemImageId' => 'SystemImageId',
        'taskId' => 'TaskId',
        'taskStepList' => 'TaskStepList',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        if (\is_array($this->taskStepList)) {
            Model::validateArray($this->taskStepList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->currentTaskMessage) {
            $res['CurrentTaskMessage'] = $this->currentTaskMessage;
        }

        if (null !== $this->currentTaskStep) {
            $res['CurrentTaskStep'] = $this->currentTaskStep;
        }

        if (null !== $this->executeRegion) {
            $res['ExecuteRegion'] = $this->executeRegion;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->performanceType) {
            $res['PerformanceType'] = $this->performanceType;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['ResourceList'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    $res['ResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->systemImageId) {
            $res['SystemImageId'] = $this->systemImageId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStepList) {
            if (\is_array($this->taskStepList)) {
                $res['TaskStepList'] = [];
                $n1 = 0;
                foreach ($this->taskStepList as $item1) {
                    $res['TaskStepList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CurrentTaskMessage'])) {
            $model->currentTaskMessage = $map['CurrentTaskMessage'];
        }

        if (isset($map['CurrentTaskStep'])) {
            $model->currentTaskStep = $map['CurrentTaskStep'];
        }

        if (isset($map['ExecuteRegion'])) {
            $model->executeRegion = $map['ExecuteRegion'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['PerformanceType'])) {
            $model->performanceType = $map['PerformanceType'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['ResourceList'] as $item1) {
                    $model->resourceList[$n1] = resourceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['SystemImageId'])) {
            $model->systemImageId = $map['SystemImageId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStepList'])) {
            if (!empty($map['TaskStepList'])) {
                $model->taskStepList = [];
                $n1 = 0;
                foreach ($map['TaskStepList'] as $item1) {
                    $model->taskStepList[$n1] = taskStepList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
