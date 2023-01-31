<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup\exportProgress;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup\recallStrategy;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup\strategy;
use AlibabaCloud\Tea\Model;

class jobGroup extends Model
{
    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @example 1578550074361
     *
     * @var int
     */
    public $creationTime;

    /**
     * @var exportProgress
     */
    public $exportProgress;

    /**
     * @example e37d28cb-0413-4816-85ed-fd354d025ea3
     *
     * @var string
     */
    public $jobDataParsingTaskId;

    /**
     * @var string
     */
    public $jobFilePath;

    /**
     * @var string
     */
    public $jobGroupDescription;

    /**
     * @example c62e6789-28a8-41db-941e-171a01d3b3b9
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
     * @example 1628425608429
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
     * @var recallStrategy
     */
    public $recallStrategy;

    /**
     * @example 30
     *
     * @var int
     */
    public $ringingDuration;

    /**
     * @example 6cea9bed-63e6-439e-ae4c-b3333efff53d
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @example 1628425608429
     *
     * @var string
     */
    public $scriptVersion;

    /**
     * @example Scheduling
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
        'recallStrategy'       => 'RecallStrategy',
        'ringingDuration'      => 'RingingDuration',
        'scenarioId'           => 'ScenarioId',
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
        if (null !== $this->recallStrategy) {
            $res['RecallStrategy'] = null !== $this->recallStrategy ? $this->recallStrategy->toMap() : null;
        }
        if (null !== $this->ringingDuration) {
            $res['RingingDuration'] = $this->ringingDuration;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
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
        if (isset($map['RecallStrategy'])) {
            $model->recallStrategy = recallStrategy::fromMap($map['RecallStrategy']);
        }
        if (isset($map['RingingDuration'])) {
            $model->ringingDuration = $map['RingingDuration'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
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
