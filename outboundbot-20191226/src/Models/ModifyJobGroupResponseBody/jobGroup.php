<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup\exportProgress;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup\recallStrategy;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyJobGroupResponseBody\jobGroup\strategy;

class jobGroup extends Model
{
    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var exportProgress
     */
    public $exportProgress;

    /**
     * @var string
     */
    public $flashSmsExtras;

    /**
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
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @var int
     */
    public $minConcurrency;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var recallStrategy
     */
    public $recallStrategy;

    /**
     * @var int
     */
    public $ringingDuration;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'callingNumbers' => 'CallingNumbers',
        'creationTime' => 'CreationTime',
        'exportProgress' => 'ExportProgress',
        'flashSmsExtras' => 'FlashSmsExtras',
        'jobDataParsingTaskId' => 'JobDataParsingTaskId',
        'jobFilePath' => 'JobFilePath',
        'jobGroupDescription' => 'JobGroupDescription',
        'jobGroupId' => 'JobGroupId',
        'jobGroupName' => 'JobGroupName',
        'minConcurrency' => 'MinConcurrency',
        'modifyTime' => 'ModifyTime',
        'priority' => 'Priority',
        'recallStrategy' => 'RecallStrategy',
        'ringingDuration' => 'RingingDuration',
        'scenarioId' => 'ScenarioId',
        'scriptName' => 'ScriptName',
        'scriptVersion' => 'ScriptVersion',
        'status' => 'Status',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (\is_array($this->callingNumbers)) {
            Model::validateArray($this->callingNumbers);
        }
        if (null !== $this->exportProgress) {
            $this->exportProgress->validate();
        }
        if (null !== $this->recallStrategy) {
            $this->recallStrategy->validate();
        }
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callingNumbers) {
            if (\is_array($this->callingNumbers)) {
                $res['CallingNumbers'] = [];
                $n1 = 0;
                foreach ($this->callingNumbers as $item1) {
                    $res['CallingNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->exportProgress) {
            $res['ExportProgress'] = null !== $this->exportProgress ? $this->exportProgress->toArray($noStream) : $this->exportProgress;
        }

        if (null !== $this->flashSmsExtras) {
            $res['FlashSmsExtras'] = $this->flashSmsExtras;
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
            $res['RecallStrategy'] = null !== $this->recallStrategy ? $this->recallStrategy->toArray($noStream) : $this->recallStrategy;
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
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
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
        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = [];
                $n1 = 0;
                foreach ($map['CallingNumbers'] as $item1) {
                    $model->callingNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['ExportProgress'])) {
            $model->exportProgress = exportProgress::fromMap($map['ExportProgress']);
        }

        if (isset($map['FlashSmsExtras'])) {
            $model->flashSmsExtras = $map['FlashSmsExtras'];
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
