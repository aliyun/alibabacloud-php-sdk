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
     * @var string
     */
    public $code;

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
     * @var int
     */
    public $syncedSize;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskTrigger;
    protected $_name = [
        'code'            => 'Code',
        'imageFrom'       => 'ImageFrom',
        'imageTo'         => 'ImageTo',
        'isSuccess'       => 'IsSuccess',
        'layerTasks'      => 'LayerTasks',
        'progress'        => 'Progress',
        'requestId'       => 'RequestId',
        'syncBatchTaskId' => 'SyncBatchTaskId',
        'syncRuleId'      => 'SyncRuleId',
        'syncTaskId'      => 'SyncTaskId',
        'syncedSize'      => 'SyncedSize',
        'taskStatus'      => 'TaskStatus',
        'taskTrigger'     => 'TaskTrigger',
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
