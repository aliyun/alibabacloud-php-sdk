<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody\imageFrom;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody\imageTo;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoSyncTaskResponseBody\layerTasks;
use AlibabaCloud\Tea\Model;

class GetRepoSyncTaskResponseBody extends Model
{
    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the synchronization task is performed across Alibaba Cloud accounts.
     *
     * @example true
     *
     * @var bool
     */
    public $crossUser;

    /**
     * @description The source address of the image.
     *
     * @var imageFrom
     */
    public $imageFrom;

    /**
     * @description The destination address of the image.
     *
     * @var imageTo
     */
    public $imageTo;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The synchronization tasks for the image layer.
     *
     * @var layerTasks[]
     */
    public $layerTasks;

    /**
     * @description The synchronization progress. Valid values:
     *
     *   `0`: The synchronization starts or failed.
     *   `1`: The synchronization is successful.
     *
     * @example 1
     *
     * @var int
     */
    public $progress;

    /**
     * @description The ID of the request.
     *
     * @example A6DEF8B0-5D45-46D6-867D-8C7FF0966B07
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the synchronization task in which multiple images are synchronized at a time.
     *
     * @example a9434731-95ef-4087-9cf4-369c8e90****
     *
     * @var string
     */
    public $syncBatchTaskId;

    /**
     * @description The ID of the synchronization rule.
     *
     * @example crsr-cllro6ho3wne****
     *
     * @var string
     */
    public $syncRuleId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example rst-zxjkiv5oil6f****
     *
     * @var string
     */
    public $syncTaskId;

    /**
     * @description Indicates whether transfer acceleration is enabled in the synchronization process.
     *
     * @example true
     *
     * @var bool
     */
    public $syncTransAccelerate;

    /**
     * @description The size of the image layer that is synchronized. Unit: bytes.
     *
     * @example 23655489
     *
     * @var int
     */
    public $syncedSize;

    /**
     * @description The status of the task. Valid values:
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The policy that is used to trigger the synchronization task.
     *
     * @example null
     *
     * @var string
     */
    public $taskTrigger;
    protected $_name = [
        'code'                => 'Code',
        'crossUser'           => 'CrossUser',
        'imageFrom'           => 'ImageFrom',
        'imageTo'             => 'ImageTo',
        'isSuccess'           => 'IsSuccess',
        'layerTasks'          => 'LayerTasks',
        'progress'            => 'Progress',
        'requestId'           => 'RequestId',
        'syncBatchTaskId'     => 'SyncBatchTaskId',
        'syncRuleId'          => 'SyncRuleId',
        'syncTaskId'          => 'SyncTaskId',
        'syncTransAccelerate' => 'SyncTransAccelerate',
        'syncedSize'          => 'SyncedSize',
        'taskStatus'          => 'TaskStatus',
        'taskTrigger'         => 'TaskTrigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->crossUser) {
            $res['CrossUser'] = $this->crossUser;
        }
        if (null !== $this->imageFrom) {
            $res['ImageFrom'] = null !== $this->imageFrom ? $this->imageFrom->toMap() : null;
        }
        if (null !== $this->imageTo) {
            $res['ImageTo'] = null !== $this->imageTo ? $this->imageTo->toMap() : null;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->layerTasks) {
            $res['LayerTasks'] = [];
            if (null !== $this->layerTasks && \is_array($this->layerTasks)) {
                $n = 0;
                foreach ($this->layerTasks as $item) {
                    $res['LayerTasks'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskTrigger) {
            $res['TaskTrigger'] = $this->taskTrigger;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoSyncTaskResponseBody
     */
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
                $n                 = 0;
                foreach ($map['LayerTasks'] as $item) {
                    $model->layerTasks[$n++] = null !== $item ? layerTasks::fromMap($item) : $item;
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
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskTrigger'])) {
            $model->taskTrigger = $map['TaskTrigger'];
        }

        return $model;
    }
}
