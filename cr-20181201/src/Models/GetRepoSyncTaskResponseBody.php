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
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var layerTasks[]
     */
    public $layerTasks;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $syncTaskId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $syncedSize;

    /**
     * @var string
     */
    public $syncRuleId;

    /**
     * @var imageFrom
     */
    public $imageFrom;

    /**
     * @var string
     */
    public $taskTrigger;

    /**
     * @var imageTo
     */
    public $imageTo;

    /**
     * @var string
     */
    public $syncBatchTaskId;
    protected $_name = [
        'isSuccess'       => 'IsSuccess',
        'progress'        => 'Progress',
        'requestId'       => 'RequestId',
        'layerTasks'      => 'LayerTasks',
        'taskStatus'      => 'TaskStatus',
        'syncTaskId'      => 'SyncTaskId',
        'code'            => 'Code',
        'syncedSize'      => 'SyncedSize',
        'syncRuleId'      => 'SyncRuleId',
        'imageFrom'       => 'ImageFrom',
        'taskTrigger'     => 'TaskTrigger',
        'imageTo'         => 'ImageTo',
        'syncBatchTaskId' => 'SyncBatchTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->syncTaskId) {
            $res['SyncTaskId'] = $this->syncTaskId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->syncedSize) {
            $res['SyncedSize'] = $this->syncedSize;
        }
        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }
        if (null !== $this->imageFrom) {
            $res['ImageFrom'] = null !== $this->imageFrom ? $this->imageFrom->toMap() : null;
        }
        if (null !== $this->taskTrigger) {
            $res['TaskTrigger'] = $this->taskTrigger;
        }
        if (null !== $this->imageTo) {
            $res['ImageTo'] = null !== $this->imageTo ? $this->imageTo->toMap() : null;
        }
        if (null !== $this->syncBatchTaskId) {
            $res['SyncBatchTaskId'] = $this->syncBatchTaskId;
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
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['SyncTaskId'])) {
            $model->syncTaskId = $map['SyncTaskId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['SyncedSize'])) {
            $model->syncedSize = $map['SyncedSize'];
        }
        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }
        if (isset($map['ImageFrom'])) {
            $model->imageFrom = imageFrom::fromMap($map['ImageFrom']);
        }
        if (isset($map['TaskTrigger'])) {
            $model->taskTrigger = $map['TaskTrigger'];
        }
        if (isset($map['ImageTo'])) {
            $model->imageTo = imageTo::fromMap($map['ImageTo']);
        }
        if (isset($map['SyncBatchTaskId'])) {
            $model->syncBatchTaskId = $map['SyncBatchTaskId'];
        }

        return $model;
    }
}
