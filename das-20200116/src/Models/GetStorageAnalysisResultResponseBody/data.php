<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult;

class data extends Model
{
    /**
     * @var int
     */
    public $analyzedDbCount;
    /**
     * @var storageAnalysisResult
     */
    public $storageAnalysisResult;
    /**
     * @var bool
     */
    public $taskFinish;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var int
     */
    public $taskProgress;
    /**
     * @var string
     */
    public $taskState;
    /**
     * @var bool
     */
    public $taskSuccess;
    /**
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
        if (null !== $this->storageAnalysisResult) {
            $this->storageAnalysisResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analyzedDbCount) {
            $res['AnalyzedDbCount'] = $this->analyzedDbCount;
        }

        if (null !== $this->storageAnalysisResult) {
            $res['StorageAnalysisResult'] = null !== $this->storageAnalysisResult ? $this->storageAnalysisResult->toArray($noStream) : $this->storageAnalysisResult;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
