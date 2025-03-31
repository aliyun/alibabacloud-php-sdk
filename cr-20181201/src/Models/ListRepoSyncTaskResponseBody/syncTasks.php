<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody\syncTasks\imageFrom;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoSyncTaskResponseBody\syncTasks\imageTo;

class syncTasks extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $crossUser;

    /**
     * @var bool
     */
    public $customLink;

    /**
     * @var imageFrom
     */
    public $imageFrom;

    /**
     * @var imageTo
     */
    public $imageTo;

    /**
     * @var int
     */
    public $modifedTime;

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
        'createTime' => 'CreateTime',
        'crossUser' => 'CrossUser',
        'customLink' => 'CustomLink',
        'imageFrom' => 'ImageFrom',
        'imageTo' => 'ImageTo',
        'modifedTime' => 'ModifedTime',
        'syncBatchTaskId' => 'SyncBatchTaskId',
        'syncRuleId' => 'SyncRuleId',
        'syncTaskId' => 'SyncTaskId',
        'syncTransAccelerate' => 'SyncTransAccelerate',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->crossUser) {
            $res['CrossUser'] = $this->crossUser;
        }

        if (null !== $this->customLink) {
            $res['CustomLink'] = $this->customLink;
        }

        if (null !== $this->imageFrom) {
            $res['ImageFrom'] = null !== $this->imageFrom ? $this->imageFrom->toArray($noStream) : $this->imageFrom;
        }

        if (null !== $this->imageTo) {
            $res['ImageTo'] = null !== $this->imageTo ? $this->imageTo->toArray($noStream) : $this->imageTo;
        }

        if (null !== $this->modifedTime) {
            $res['ModifedTime'] = $this->modifedTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CrossUser'])) {
            $model->crossUser = $map['CrossUser'];
        }

        if (isset($map['CustomLink'])) {
            $model->customLink = $map['CustomLink'];
        }

        if (isset($map['ImageFrom'])) {
            $model->imageFrom = imageFrom::fromMap($map['ImageFrom']);
        }

        if (isset($map['ImageTo'])) {
            $model->imageTo = imageTo::fromMap($map['ImageTo']);
        }

        if (isset($map['ModifedTime'])) {
            $model->modifedTime = $map['ModifedTime'];
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
