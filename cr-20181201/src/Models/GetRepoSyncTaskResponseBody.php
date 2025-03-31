<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody\imageFrom;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody\imageTo;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody\layerTasks;

class GetRepoSyncTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $crossUser;

    /**
     * @var imageFrom
     */
    public $imageFrom;

    /**
     * @var imageTo
     */
    public $imageTo;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var layerTasks[]
     */
    public $layerTasks;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $syncBatchTaskId;

    /**
     * @var string
     */
    public $syncRuleId;

    /**
     * @var string
     */
    public $syncTaskId;

    /**
     * @var bool
     */
    public $syncTransAccelerate;

    /**
     * @var int
     */
    public $syncedSize;

    /**
     * @var string
     */
    public $taskIssue;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskTrigger;
    protected $_name = [
        'code' => 'Code',
        'crossUser' => 'CrossUser',
        'imageFrom' => 'ImageFrom',
        'imageTo' => 'ImageTo',
        'isSuccess' => 'IsSuccess',
        'layerTasks' => 'LayerTasks',
        'progress' => 'Progress',
        'requestId' => 'RequestId',
        'syncBatchTaskId' => 'SyncBatchTaskId',
        'syncRuleId' => 'SyncRuleId',
        'syncTaskId' => 'SyncTaskId',
        'syncTransAccelerate' => 'SyncTransAccelerate',
        'syncedSize' => 'SyncedSize',
        'taskIssue' => 'TaskIssue',
        'taskStatus' => 'TaskStatus',
        'taskTrigger' => 'TaskTrigger',
    ];

    public function validate()
    {
        if (null !== $this->imageFrom) {
            $this->imageFrom->validate();
        }
        if (null !== $this->imageTo) {
            $this->imageTo->validate();
        }
        if (\is_array($this->layerTasks)) {
            Model::validateArray($this->layerTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->crossUser) {
            $res['CrossUser'] = $this->crossUser;
        }

        if (null !== $this->imageFrom) {
            $res['ImageFrom'] = null !== $this->imageFrom ? $this->imageFrom->toArray($noStream) : $this->imageFrom;
        }

        if (null !== $this->imageTo) {
            $res['ImageTo'] = null !== $this->imageTo ? $this->imageTo->toArray($noStream) : $this->imageTo;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->layerTasks) {
            if (\is_array($this->layerTasks)) {
                $res['LayerTasks'] = [];
                $n1 = 0;
                foreach ($this->layerTasks as $item1) {
                    $res['LayerTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->syncBatchTaskId) {
            $res['SyncBatchTaskId'] = $this->syncBatchTaskId;
        }

        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }

        if (null !== $this->syncTaskId) {
            $res['SyncTaskId'] = $this->syncTaskId;
        }

        if (null !== $this->syncTransAccelerate) {
            $res['SyncTransAccelerate'] = $this->syncTransAccelerate;
        }

        if (null !== $this->syncedSize) {
            $res['SyncedSize'] = $this->syncedSize;
        }

        if (null !== $this->taskIssue) {
            $res['TaskIssue'] = $this->taskIssue;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskTrigger) {
            $res['TaskTrigger'] = $this->taskTrigger;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CrossUser'])) {
            $model->crossUser = $map['CrossUser'];
        }

        if (isset($map['ImageFrom'])) {
            $model->imageFrom = imageFrom::fromMap($map['ImageFrom']);
        }

        if (isset($map['ImageTo'])) {
            $model->imageTo = imageTo::fromMap($map['ImageTo']);
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['LayerTasks'])) {
            if (!empty($map['LayerTasks'])) {
                $model->layerTasks = [];
                $n1 = 0;
                foreach ($map['LayerTasks'] as $item1) {
                    $model->layerTasks[$n1++] = layerTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SyncBatchTaskId'])) {
            $model->syncBatchTaskId = $map['SyncBatchTaskId'];
        }

        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }

        if (isset($map['SyncTaskId'])) {
            $model->syncTaskId = $map['SyncTaskId'];
        }

        if (isset($map['SyncTransAccelerate'])) {
            $model->syncTransAccelerate = $map['SyncTransAccelerate'];
        }

        if (isset($map['SyncedSize'])) {
            $model->syncedSize = $map['SyncedSize'];
        }

        if (isset($map['TaskIssue'])) {
            $model->taskIssue = $map['TaskIssue'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskTrigger'])) {
            $model->taskTrigger = $map['TaskTrigger'];
        }

        return $model;
    }
}
