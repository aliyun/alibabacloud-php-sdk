<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\exportProgress;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\progress;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\recallStrategy;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\result;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobGroupResponseBody\jobGroup\strategy;
use AlibabaCloud\Tea\Model;

class jobGroup extends Model
{
    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @example 1578881227404
     *
     * @var int
     */
    public $creationTime;

    /**
     * @var exportProgress
     */
    public $exportProgress;

    /**
     * @example da37319b-6c83-4268-9f19-814aed62e401/a5a9a310-b902-4674-a6e1-29975cbaa312_100.xlsx
     *
     * @var string
     */
    public $jobDataParsingTaskId;

    /**
     * @example da37319b-6c83-4268-9f19-814aed62e401/a5a9a310-b902-4674-a6e1-29975cbaa312_100.xlsx
     *
     * @var string
     */
    public $jobFilePath;

    /**
     * @var string
     */
    public $jobGroupDescription;

    /**
     * @example 46a9ad0c-3e11-44da-a9a7-2c21bf5ce185
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @example 1
     *
     * @var int
     */
    public $minConcurrency;

    /**
     * @example 1578881227404
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @var progress
     */
    public $progress;

    /**
     * @var recallStrategy
     */
    public $recallStrategy;

    /**
     * @var result
     */
    public $result;

    /**
     * @example 30
     *
     * @var int
     */
    public $ringingDuration;

    /**
     * @example fce6c599-8ede-40e3-9f78-0928eda7b4e8
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @example 49f00b0d-78ac-4d51-91de-a9e8e92b8470
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @example 49f00b0d-78ac-4d51-91de-a9e8e92b8470
     *
     * @var string
     */
    public $scriptVersion;

    /**
     * @example Completed
     *
     * @var string
     */
    public $status;

    /**
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'callingNumbers'       => 'CallingNumbers',
        'creationTime'         => 'CreationTime',
        'exportProgress'       => 'ExportProgress',
        'jobDataParsingTaskId' => 'JobDataParsingTaskId',
        'jobFilePath'          => 'JobFilePath',
        'jobGroupDescription'  => 'JobGroupDescription',
        'jobGroupId'           => 'JobGroupId',
        'jobGroupName'         => 'JobGroupName',
        'minConcurrency'       => 'MinConcurrency',
        'modifyTime'           => 'ModifyTime',
        'priority'             => 'Priority',
        'progress'             => 'Progress',
        'recallStrategy'       => 'RecallStrategy',
        'result'               => 'Result',
        'ringingDuration'      => 'RingingDuration',
        'scenarioId'           => 'ScenarioId',
        'scriptId'             => 'ScriptId',
        'scriptName'           => 'ScriptName',
        'scriptVersion'        => 'ScriptVersion',
        'status'               => 'Status',
        'strategy'             => 'Strategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callingNumbers) {
            $res['CallingNumbers'] = $this->callingNumbers;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->exportProgress) {
            $res['ExportProgress'] = null !== $this->exportProgress ? $this->exportProgress->toMap() : null;
        }
        if (null !== $this->jobDataParsingTaskId) {
            $res['JobDataParsingTaskId'] = $this->jobDataParsingTaskId;
        }
        if (null !== $this->jobFilePath) {
            $res['JobFilePath'] = $this->jobFilePath;
        }
        if (null !== $this->jobGroupDescription) {
            $res['JobGroupDescription'] = $this->jobGroupDescription;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }
        if (null !== $this->minConcurrency) {
            $res['MinConcurrency'] = $this->minConcurrency;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->progress) {
            $res['Progress'] = null !== $this->progress ? $this->progress->toMap() : null;
        }
        if (null !== $this->recallStrategy) {
            $res['RecallStrategy'] = null !== $this->recallStrategy ? $this->recallStrategy->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->ringingDuration) {
            $res['RingingDuration'] = $this->ringingDuration;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->scriptVersion) {
            $res['ScriptVersion'] = $this->scriptVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = $map['CallingNumbers'];
            }
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExportProgress'])) {
            $model->exportProgress = exportProgress::fromMap($map['ExportProgress']);
        }
        if (isset($map['JobDataParsingTaskId'])) {
            $model->jobDataParsingTaskId = $map['JobDataParsingTaskId'];
        }
        if (isset($map['JobFilePath'])) {
            $model->jobFilePath = $map['JobFilePath'];
        }
        if (isset($map['JobGroupDescription'])) {
            $model->jobGroupDescription = $map['JobGroupDescription'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }
        if (isset($map['MinConcurrency'])) {
            $model->minConcurrency = $map['MinConcurrency'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Progress'])) {
            $model->progress = progress::fromMap($map['Progress']);
        }
        if (isset($map['RecallStrategy'])) {
            $model->recallStrategy = recallStrategy::fromMap($map['RecallStrategy']);
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['RingingDuration'])) {
            $model->ringingDuration = $map['RingingDuration'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['ScriptVersion'])) {
            $model->scriptVersion = $map['ScriptVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }

        return $model;
    }
}
