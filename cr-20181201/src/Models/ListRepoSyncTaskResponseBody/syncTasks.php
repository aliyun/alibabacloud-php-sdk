<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody\syncTasks\imageFrom;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody\syncTasks\imageTo;
use AlibabaCloud\Tea\Model;

class syncTasks extends Model
{
    /**
     * @var int
     */
    public $modifedTime;

    /**
     * @var string
     */
    public $syncRuleId;

    /**
     * @var string
     */
    public $syncTaskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $syncBatchTaskId;

    /**
     * @var string
     */
    public $taskTrigger;

    /**
     * @var imageTo
     */
    public $imageTo;

    /**
     * @var imageFrom
     */
    public $imageFrom;
    protected $_name = [
        'modifedTime'     => 'ModifedTime',
        'syncRuleId'      => 'SyncRuleId',
        'syncTaskId'      => 'SyncTaskId',
        'taskStatus'      => 'TaskStatus',
        'createTime'      => 'CreateTime',
        'syncBatchTaskId' => 'SyncBatchTaskId',
        'taskTrigger'     => 'TaskTrigger',
        'imageTo'         => 'ImageTo',
        'imageFrom'       => 'ImageFrom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifedTime) {
            $res['ModifedTime'] = $this->modifedTime;
        }
        if (null !== $this->syncRuleId) {
            $res['SyncRuleId'] = $this->syncRuleId;
        }
        if (null !== $this->syncTaskId) {
            $res['SyncTaskId'] = $this->syncTaskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->syncBatchTaskId) {
            $res['SyncBatchTaskId'] = $this->syncBatchTaskId;
        }
        if (null !== $this->taskTrigger) {
            $res['TaskTrigger'] = $this->taskTrigger;
        }
        if (null !== $this->imageTo) {
            $res['ImageTo'] = null !== $this->imageTo ? $this->imageTo->toMap() : null;
        }
        if (null !== $this->imageFrom) {
            $res['ImageFrom'] = null !== $this->imageFrom ? $this->imageFrom->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return syncTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifedTime'])) {
            $model->modifedTime = $map['ModifedTime'];
        }
        if (isset($map['SyncRuleId'])) {
            $model->syncRuleId = $map['SyncRuleId'];
        }
        if (isset($map['SyncTaskId'])) {
            $model->syncTaskId = $map['SyncTaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SyncBatchTaskId'])) {
            $model->syncBatchTaskId = $map['SyncBatchTaskId'];
        }
        if (isset($map['TaskTrigger'])) {
            $model->taskTrigger = $map['TaskTrigger'];
        }
        if (isset($map['ImageTo'])) {
            $model->imageTo = imageTo::fromMap($map['ImageTo']);
        }
        if (isset($map['ImageFrom'])) {
            $model->imageFrom = imageFrom::fromMap($map['ImageFrom']);
        }

        return $model;
    }
}
