<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListMetaProfilingSkillJobPageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $componentId;

    /**
     * @var int
     */
    public $currentTaskStatus;

    /**
     * @var string
     */
    public $dcName;

    /**
     * @var int
     */
    public $dcStatus;

    /**
     * @var string
     */
    public $dcType;

    /**
     * @var int
     */
    public $diffNodeNum;

    /**
     * @var int
     */
    public $diffPartitionNum;

    /**
     * @var int
     */
    public $diffTableNum;

    /**
     * @var int
     */
    public $diffWorkflowNum;

    /**
     * @var string
     */
    public $dsCategoryType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var bool
     */
    public $hasIncrementChanges;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jobDesc;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var int
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $lastBatchId;

    /**
     * @var int
     */
    public $lastTaskId;

    /**
     * @var string
     */
    public $nextCronTime;

    /**
     * @var int
     */
    public $profilingEnable;

    /**
     * @var string[]
     */
    public $profilingSchemaList;

    /**
     * @var int
     */
    public $taskExecResult;

    /**
     * @var string
     */
    public $taskFinishTime;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'componentId' => 'componentId',
        'currentTaskStatus' => 'currentTaskStatus',
        'dcName' => 'dcName',
        'dcStatus' => 'dcStatus',
        'dcType' => 'dcType',
        'diffNodeNum' => 'diffNodeNum',
        'diffPartitionNum' => 'diffPartitionNum',
        'diffTableNum' => 'diffTableNum',
        'diffWorkflowNum' => 'diffWorkflowNum',
        'dsCategoryType' => 'dsCategoryType',
        'gmtCreate' => 'gmtCreate',
        'hasIncrementChanges' => 'hasIncrementChanges',
        'id' => 'id',
        'jobDesc' => 'jobDesc',
        'jobName' => 'jobName',
        'jobStatus' => 'jobStatus',
        'lastBatchId' => 'lastBatchId',
        'lastTaskId' => 'lastTaskId',
        'nextCronTime' => 'nextCronTime',
        'profilingEnable' => 'profilingEnable',
        'profilingSchemaList' => 'profilingSchemaList',
        'taskExecResult' => 'taskExecResult',
        'taskFinishTime' => 'taskFinishTime',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        if (\is_array($this->profilingSchemaList)) {
            Model::validateArray($this->profilingSchemaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['componentId'] = $this->componentId;
        }

        if (null !== $this->currentTaskStatus) {
            $res['currentTaskStatus'] = $this->currentTaskStatus;
        }

        if (null !== $this->dcName) {
            $res['dcName'] = $this->dcName;
        }

        if (null !== $this->dcStatus) {
            $res['dcStatus'] = $this->dcStatus;
        }

        if (null !== $this->dcType) {
            $res['dcType'] = $this->dcType;
        }

        if (null !== $this->diffNodeNum) {
            $res['diffNodeNum'] = $this->diffNodeNum;
        }

        if (null !== $this->diffPartitionNum) {
            $res['diffPartitionNum'] = $this->diffPartitionNum;
        }

        if (null !== $this->diffTableNum) {
            $res['diffTableNum'] = $this->diffTableNum;
        }

        if (null !== $this->diffWorkflowNum) {
            $res['diffWorkflowNum'] = $this->diffWorkflowNum;
        }

        if (null !== $this->dsCategoryType) {
            $res['dsCategoryType'] = $this->dsCategoryType;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->hasIncrementChanges) {
            $res['hasIncrementChanges'] = $this->hasIncrementChanges;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->jobDesc) {
            $res['jobDesc'] = $this->jobDesc;
        }

        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }

        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }

        if (null !== $this->lastBatchId) {
            $res['lastBatchId'] = $this->lastBatchId;
        }

        if (null !== $this->lastTaskId) {
            $res['lastTaskId'] = $this->lastTaskId;
        }

        if (null !== $this->nextCronTime) {
            $res['nextCronTime'] = $this->nextCronTime;
        }

        if (null !== $this->profilingEnable) {
            $res['profilingEnable'] = $this->profilingEnable;
        }

        if (null !== $this->profilingSchemaList) {
            if (\is_array($this->profilingSchemaList)) {
                $res['profilingSchemaList'] = [];
                $n1 = 0;
                foreach ($this->profilingSchemaList as $item1) {
                    $res['profilingSchemaList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskExecResult) {
            $res['taskExecResult'] = $this->taskExecResult;
        }

        if (null !== $this->taskFinishTime) {
            $res['taskFinishTime'] = $this->taskFinishTime;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
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
        if (isset($map['componentId'])) {
            $model->componentId = $map['componentId'];
        }

        if (isset($map['currentTaskStatus'])) {
            $model->currentTaskStatus = $map['currentTaskStatus'];
        }

        if (isset($map['dcName'])) {
            $model->dcName = $map['dcName'];
        }

        if (isset($map['dcStatus'])) {
            $model->dcStatus = $map['dcStatus'];
        }

        if (isset($map['dcType'])) {
            $model->dcType = $map['dcType'];
        }

        if (isset($map['diffNodeNum'])) {
            $model->diffNodeNum = $map['diffNodeNum'];
        }

        if (isset($map['diffPartitionNum'])) {
            $model->diffPartitionNum = $map['diffPartitionNum'];
        }

        if (isset($map['diffTableNum'])) {
            $model->diffTableNum = $map['diffTableNum'];
        }

        if (isset($map['diffWorkflowNum'])) {
            $model->diffWorkflowNum = $map['diffWorkflowNum'];
        }

        if (isset($map['dsCategoryType'])) {
            $model->dsCategoryType = $map['dsCategoryType'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['hasIncrementChanges'])) {
            $model->hasIncrementChanges = $map['hasIncrementChanges'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['jobDesc'])) {
            $model->jobDesc = $map['jobDesc'];
        }

        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }

        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }

        if (isset($map['lastBatchId'])) {
            $model->lastBatchId = $map['lastBatchId'];
        }

        if (isset($map['lastTaskId'])) {
            $model->lastTaskId = $map['lastTaskId'];
        }

        if (isset($map['nextCronTime'])) {
            $model->nextCronTime = $map['nextCronTime'];
        }

        if (isset($map['profilingEnable'])) {
            $model->profilingEnable = $map['profilingEnable'];
        }

        if (isset($map['profilingSchemaList'])) {
            if (!empty($map['profilingSchemaList'])) {
                $model->profilingSchemaList = [];
                $n1 = 0;
                foreach ($map['profilingSchemaList'] as $item1) {
                    $model->profilingSchemaList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['taskExecResult'])) {
            $model->taskExecResult = $map['taskExecResult'];
        }

        if (isset($map['taskFinishTime'])) {
            $model->taskFinishTime = $map['taskFinishTime'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
