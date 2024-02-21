<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of databases that have been analyzed.
     *
     * @example 2
     *
     * @var int
     */
    public $analyzedDbCount;

    /**
     * @description The details of storage analysis.
     *
     * @var storageAnalysisResult
     */
    public $storageAnalysisResult;

    /**
     * @description Indicates whether the task is complete.
     *
     * @example true
     *
     * @var bool
     */
    public $taskFinish;

    /**
     * @description The task ID.
     *
     * @example 910f83f4b96df0524ddc5749f615****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task progress.
     *
     * >  Valid values are integers that range from 0 to 100.
     * @example 50
     *
     * @var int
     */
    public $taskProgress;

    /**
     * @description The status of the storage analysis task. Valid values:
     *
     *   **INIT**: The task is being initialized.
     *   **PENDING**: The task is being queued for execution.
     *   **RECEIVED**: The task is received for execution.
     *   **RUNNING**: The task is being executed.
     *   **RETRY**: The task is being retried.
     *   **SUCCESS**: The task succeeds.
     *   **FAILURE**: The task fails.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $taskState;

    /**
     * @description Indicates whether the task is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $taskSuccess;

    /**
     * @description The number of databases that need to be analyzed in the storage analysis task.
     *
     * @example 32
     *
     * @var int
     */
    public $totalDbCount;
    protected $_name = [
        'analyzedDbCount'       => 'AnalyzedDbCount',
        'storageAnalysisResult' => 'StorageAnalysisResult',
        'taskFinish'            => 'TaskFinish',
        'taskId'                => 'TaskId',
        'taskProgress'          => 'TaskProgress',
        'taskState'             => 'TaskState',
        'taskSuccess'           => 'TaskSuccess',
        'totalDbCount'          => 'TotalDbCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzedDbCount) {
            $res['AnalyzedDbCount'] = $this->analyzedDbCount;
        }
        if (null !== $this->storageAnalysisResult) {
            $res['StorageAnalysisResult'] = null !== $this->storageAnalysisResult ? $this->storageAnalysisResult->toMap() : null;
        }
        if (null !== $this->taskFinish) {
            $res['TaskFinish'] = $this->taskFinish;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = $this->taskProgress;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->taskSuccess) {
            $res['TaskSuccess'] = $this->taskSuccess;
        }
        if (null !== $this->totalDbCount) {
            $res['TotalDbCount'] = $this->totalDbCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalyzedDbCount'])) {
            $model->analyzedDbCount = $map['AnalyzedDbCount'];
        }
        if (isset($map['StorageAnalysisResult'])) {
            $model->storageAnalysisResult = storageAnalysisResult::fromMap($map['StorageAnalysisResult']);
        }
        if (isset($map['TaskFinish'])) {
            $model->taskFinish = $map['TaskFinish'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskProgress'])) {
            $model->taskProgress = $map['TaskProgress'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['TaskSuccess'])) {
            $model->taskSuccess = $map['TaskSuccess'];
        }
        if (isset($map['TotalDbCount'])) {
            $model->totalDbCount = $map['TotalDbCount'];
        }

        return $model;
    }
}
